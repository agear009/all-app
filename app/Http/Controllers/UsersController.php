<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;


class UsersController extends Controller
{
    public function Index(){
        $no=0;
        $no++;
        return View('Admin.Index',["title"=>"Control Panel","active"=>"Home"]);
    }
}
