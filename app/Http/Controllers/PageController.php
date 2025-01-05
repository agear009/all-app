<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Produk;
use App\Models\Berita;
use App\Models\Order;
use App\Models\Users;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

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
        $Post=produk::all();
        return View('Page.Produk',["title"=>"Saamparan Digital Group","active"=>"Home"],compact('Post'));
    }
    public function berita(){
        $no=0;
        $no++;
        $Post=berita::orderBy('created_at', 'desc')->get();
        return View('Page.Berita',["title"=>"Saamparan Digital Group","active"=>"Home"],compact('Post'));
    }
    public function order()
    {

        $order=Order::all();
        $produk=Produk::all();
        $user=Users::all();
        return view('Order.Create_User',["title"=>"order","active"=>"order"],compact('order','produk','user'));
    }
}
