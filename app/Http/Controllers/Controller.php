<?php

namespace App\Http\Controllers;

abstract class Controller
{
    public function index(){
        $no=0;
        $no++;
        return View('Page.Index',["title"=>"Saamparan Digital Group","active"=>"Home"]);
    }
}
