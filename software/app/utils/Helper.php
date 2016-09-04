<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class HelperX
{

    public static function activeRoute($route)
    {

        if (Route::currentRouteName() == $route) {
            return "active";
        } else {
            return "";
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
