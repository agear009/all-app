<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Users;
use App\Models\Notifikasi;
use Illuminate\Http\RedirectResponse;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index() : View
    {
        $no = 0;
        $no++;
        $id=Auth::user()->id;
        //$id=auth()->user()->id;
        $users = users::findOrFail($id);
        //dd($users);
        if ($users->Level== Null || $users->level =='' ){
            $user = users::findOrFail($id);
            return view('Admin.Index_User', ["title" => "Control Panel", "active" => "Home"], compact('user','no'));

        }
        else{
            $user = users::findOrFail($id);
        return view('Admin.Index', ["title" => "Control Panel", "active" => "Home"], compact('user','no'));
        }
    }
}
