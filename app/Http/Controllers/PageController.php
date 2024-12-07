<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PageController extends Controller
{
    public function index(){
        $no=0;
        $no++;
        $Post=post::all();
        return View('Page.Index',["title"=>"Saamparan Digital Group","active"=>"Home"],compact('Post'));
    }
    public function produk(){
        $no=0;
        $no++;
        $Post=post::all();
        return View('Page.Produk',["title"=>"Saamparan Digital Group","active"=>"Home"],compact('Post'));
    }
}
