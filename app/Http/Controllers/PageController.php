<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        $no=0;
        $no++;
        return View('Page.Index',["title"=>"Saamparan Digital Group","active"=>"Home"]);
    }
}
