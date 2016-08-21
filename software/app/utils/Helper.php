<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Helper
{

    public static function activeRoute($route)
    {

        if (Route::currentRouteName() == $route) {
            return "active";
        } else {
            return "";
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
