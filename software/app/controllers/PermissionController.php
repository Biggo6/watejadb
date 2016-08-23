<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class PermissionController extends BaseController {

    public function add() {
        return View::make('permissions.add');
    }

}
