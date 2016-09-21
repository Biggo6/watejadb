<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class HelperX
{

    public static function whatReg($mobile_no){
        $username = $mobile_no;
        $debug = true;
        // Create a instance of Registration class.
        $r = new Registration($username, $debug);
        return ($r->codeRequest('sms')); // could be 'voice' too
    }

    public static function whatRegFinal($code){
        return $r->codeRegister($code);
    }

    

    public static function activeRoute($route)
    {

        if (Route::currentRouteName() == $route) {
            return "active";
        } else {
            return "";
        }
    }

    public static function getInstaLogin(){
        $username = Config::get('wateja.u');
        $password = Config::get('wateja.p');
        $i = new \InstagramAPI\Instagram($username, $password, false, app_path() . "/insta");
        return $i;
    }

    public static function getResults($q){
        $i = self::getInstaLogin();
        $i->login();
        return $i->searchUsername($q);
    }

    public static function getMess(){
        $ch = CompSMS::where('company_id', Auth::user()->company_id)->count();
        if($ch == 0){
            return 0;
        }else{
            return number_format(CompSMS::where('company_id', Auth::user()->company_id)->first()->total_sms);
        }
        
    }

    public static function storeImage($data){
        //$data = 'data:image/png;base64,AAAFBfj42Pj4';
        list($type, $data) = explode(';', $data);
        list(, $data)      = explode(',', $data);
        $data = base64_decode($data);
        $filename = time() . ".png";
        $location = public_path() . '/uploads/' . $filename;
        $lox    = url('/uploads/' . $filename);
        file_put_contents($location, $data);
        return $lox;
    }

    public static function getRealCol($col){
        if($col == 1){
            return 4;
        }
    }


    public static function getPackage(){
        if(Auth::user()->role_id != 1){
            $cid = Auth::user()->company_id;
            $bid = Auth::user()->branch_id;
            $sub = Subscription::where('company_id', $cid)->where('branch_id', $bid)->where('status', 1)->first();
            $days = Package::find($sub->subscription_id)->package;
            return $days;
        }
    }

    public static function getDays(){
        if(Auth::user()->role_id != 1){
            $cid = Auth::user()->company_id;
            $bid = Auth::user()->branch_id;
            $sub = Subscription::where('company_id', $cid)->where('branch_id', $bid)->where('tried', 1)->where('status', 1)->first();
            $days = Package::find($sub->subscription_id)->duration_days;
            return $days;
        }
    }

    public static function deactivatePackage(){
        if(Auth::user()->role_id != 1){
            $cid = Auth::user()->company_id;
            $bid = Auth::user()->branch_id;
            $sub = Subscription::where('company_id', $cid)->where('branch_id', $bid)->where('status', 1)->first();
            $sub->status = 0;
            $sub->save();
            
        }
    }

    public static function getRemainDays(){
        if(Auth::user()->role_id != 1){
            $cid = Auth::user()->company_id;
            $bid = Auth::user()->branch_id;
            $sub = Subscription::where('company_id', $cid)->where('branch_id', $bid)->where('tried', 1)->first();

            if($sub){
                $days = Package::find($sub->subscription_id)->duration_days;

                $firstDateStarted = new Carbon($sub->updated_at);
                $now = Carbon::now();

                $rem = $days - $firstDateStarted->diff($now)->days;

                return $rem;    
            }else{
                return 0;
            }

            
        }

    }

    public static function canAccess($m){

        if(Auth::user()->role_id == 1){
            return true;
        }

        $mArr  = HelperX::getUserAccessModules();

        if(!in_array($m, $mArr)){
            return false;
        }

        return true;

    }

    public static function getUserAccessModules(){
        $role_id = Auth::user()->role_id;

        if($role_id != 1){
             $perms   = RolePerm::where('role_id', $role_id)->get();
            $uniqModules = [];
            if(count($perms)){
               
                foreach ($perms as $p) {
                    $pid         = $p->permission_id;
                    $module_name = Module::find(Permission::find($pid)->module_id)->name; 
                    if (!in_array($module_name, $uniqModules)) {
                        $uniqModules[] = $module_name;
                    }
                }
            }
            return $uniqModules;    
        }else{
            $uniqModules = [];
            $modules = Module::all();
            if(count($modules)){
                foreach ($modules as $m) {
                    
                    $module_name = Module::find($m->id)->name; 
                    if (!in_array($module_name, $uniqModules)) {
                        $uniqModules[] = $module_name;
                    }
                }
            }
            return $uniqModules;   
        }

       
    }

    public static function updateLogouttime() {
        $check = LoginHistory::where('user_id', Auth::user()->id)->count();

        if ($check == 0) {
            $ln = new LoginHistory;
            $ln->user_id = Auth::user()->id;
            $ln->logouttime = Carbon::now();
            $ln->save();
        } else {
            $check1 = LoginHistory::where('user_id', Auth::user()->id)->orderBy('id', 'DESC')->where('logouttime', '=', '0000-00-00 00:00:00')->first();
            if (count($check1)) {
                $check1->logouttime = Carbon::now();
                $check1->save();
            } else {
                $check1->logouttime = Carbon::now();
                $check1->save();
            }
        }
    }

    public static function updateLogintime() {
        $check = LoginHistory::where('user_id', Auth::user()->id)->count();

        if ($check == 0) {
            $ln = new LoginHistory;
            $ln->user_id = Auth::user()->id;
            $ln->logintime = Carbon::now();
            $ln->save();
        } else {
            $check = LoginHistory::where('user_id', Auth::user()->id)->orderBy('id', 'DESC')->where('logouttime', '=', '0000-00-00 00:00:00')->first();
            if (count($check)) {
                //$check->logouttime = Carbon::now();
                //$check->save();
                $ln = new LoginHistory;
                $ln->user_id = Auth::user()->id;
                $ln->logintime = Carbon::now();
                $ln->save();
            } else {
                $ln = new LoginHistory;
                $ln->user_id = Auth::user()->id;
                $ln->logintime = Carbon::now();
                $ln->save();
            }
        }
    }

    public static function getLoginTime($user_id) {
        $check = LoginHistory::where('user_id', $user_id)->orderBy('id', 'DESC')->first();
        if (count($check)) {
            return "<label class='label label-success'>" . $check->logintime . "</label>";
        } else {
            return "<label class='label label-danger'>Never Login</label>";
        }
    }

    public static function getLogoutTime($user_id) {
        $check = LoginHistory::where('user_id', $user_id)->orderBy('id', 'DESC')->where('logouttime', '!=', '0000-00-00 00:00:00')->first();
        if (count($check)) {
            return "<label class='label label-success'>" . $check->logouttime . "</label>";
        } else {
            $check = LoginHistory::where('user_id', $user_id)->orderBy('id', 'DESC')->where('logouttime', '=', '0000-00-00 00:00:00')->where('logintime', '!=', '0000-00-00 00:00:00')->first();
            if (count($check)) {
                return "<label class='label label-primary'>Still in System</label>";
            } else {
                return "<label class='label label-danger'>Never Logout</label>";
            }
        }
    }

    public static function costPic($cid){
        $c = Customer::find($cid);
        $profilepic = $c->photo;
        if($profilepic == ""){
            return url('images/user.png');
        }else{
            return $profilepic;
        }
    }

    public static function userPic($uid){
        $user = User::find($uid);
        $profilepic = $user->profilepic;
        if($profilepic == ""){
            return url('images/user.png');
        }else{
            return $profilepic;
        }
    }

    public static function getCompanyLogo($c){
        $url = Company::find($c)->company_logo;
        if($url == ""){
            return url('wateja/images/logo.png');
        }else{
            return $url;
        }
    }

    public static function uplodFileThenReturnPath($fileStringInput, $destinationPath='uploads/companylogos/')
    {
        $file            = Input::file($fileStringInput);
        $archivo         = value(function () use ($file) {
            $filename = str_random(10) . '.' . $file->getClientOriginalExtension();
            return strtolower($filename);
        });
        $filename = $archivo; //str_random(6) . '_' . $file->getClientOriginalName();
        $url      = $destinationPath . $filename;
        try {
            $uploadSuccess = $file->move($destinationPath, $filename);
            if ($uploadSuccess) {
                $path = url($url);
                return $path;
            }
        } catch (Exception $ex) {
            return $ex->getMessage(); 
        }
    }

    public static function getStatus($s)
    {
        if ($s == 1) {
            return "<label class='label label-success'>Active</label>";
        } else {
            return "<label class='label label-danger'>Blocked</label>";
        }
    }

    public static function generateActions($rId, $url = null, $url1 = null, $config = 'regions')
    {
        return View::make('partials.files._actions', compact('rId', 'url', 'url1', 'config'))->render();
    }

}
