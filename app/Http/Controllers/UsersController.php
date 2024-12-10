<?php

namespace App\Http\Controllers;
use Illuminate\Validation\Validator;
use Illuminate\Routing\Controller;
use Illuminate\Foundation\Validation\ValidatesRequests;

use Illuminate\Http\Request;
use App\Models\Users;
use App\Models\Notifikasi;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class UsersController extends Controller
{
    public function index(){
        $no=0;
        $no++;

        $User=Users::all();
        return View('User.Index',["title"=>"Control Panel","active"=>"User"],compact('User','no'));
    }
    public function create()
    {
        return view('User.Create',["title"=>"User","active"=>"User"]);
    }




    public function store(Request $request): RedirectResponse
    {

        //dd($request);


        $validated = $request->validate([


        'name'=>'required|max:255',
        'email'=>'required|max:255',
        'ktp'=>'image|mimes:jpeg,jpg,png',
        'nohp'=>'required|max:255',
        'level'=>'required',
        'status'=>'required|max:255',
        'id_transaksi'=>'required',
        'norek'=>'required',
        'saldo'=>'required',
        'bank'=>'required'
        ]);
        $image=$request->file('ktp');
        $image->storeAs('User', $image->hashName());
        //$image-> storeAs('public/Post', $image->hashName());

        Users::create([

            'name'=>$request->name,
            'email'=>$request->email,
            'ktp'=>$image->hashName(),
            'nohp'=>$request->nohp,
            'level'=>$request->level,
            'status'=>$request->status,
            'id_transaksi'=>$request->id_transaksi,
            'norek'=>$request->norek,
            'saldo'=>$request->saldo,
            'bank'=>$request->bank
        ]);
        notifikasi::create([
            'id_user'=>$request->name,
            'aksi'=>'Menambah User',
            'date'=>now()
        ]);
        return redirect('/user')->with('success',' successfull! ');
    }

    public function edit(string $id)
    {
        $User=users::findOrFail($id);
        return view('User.Edit',["title"=>"Post","active"=>"Edit"],compact('User'));
    }

    public function update(Request $request, $id)
    {
        //dd($request);
        $request->validate([


            'name'=>'required|max:255',
            'email'=>'required|max:255',
            'ktp'=>'image|mimes:jpeg,jpg,png',
            'nohp'=>'required|max:255',
            'level'=>'required',
            'status'=>'required|max:255',
            'id_transaksi'=>'required',
            'norek'=>'required',
            'saldo'=>'required',
            'bank'=>'required'


        ]);
           // dd($request);
            $User=users::FindOrFail($id);

            if($request->hasFile('ktp'))
            {
                //dd($request);
                //upload new image
                $image=$request->file('ktp');
                $image->storeAs('User', $image->hashName());
                //$image->storeAs('public/Post',$image->hashName());


                //delete old image
                //dd(Storage::delete('public/Post/'.$User->image));
                Storage::delete('public/User/'.$User->image);

                //update Post with new image
                $User->update([
                    'name'=>$request->name,
                    'email'=>$request->email,
                    'ktp'=>$image->hashName(),
                    'nohp'=>$request->nohp,
                    'level'=>$request->level,
                    'status'=>$request->status,
                    'id_transaksi'=>$request->id_transaksi,
                    'norek'=>$request->norek,
                    'saldo'=>$request->saldo,
                    'bank'=>$request->bank

                ]);

            }

            else
            {
                $User->update([
                    'name'=>$request->name,
                    'email'=>$request->email,
                    'nohp'=>$request->nohp,
                    'level'=>$request->level,
                    'status'=>$request->status,
                    'id_transaksi'=>$request->id_transaksi,
                    'norek'=>$request->norek,
                    'saldo'=>$request->saldo,
                    'bank'=>$request->bank

                ]);

            }
            return redirect('/user')->with('success','Edit Berhasil! ');
        }


    public function destroy(string $id)
    {
        $Post=users::findOrFail($id);

        //delete image
           //delete old image
           Storage::delete('public/User/'.$Post->image);


        // delete member
        $Post->delete();

        //redirect to index
        return redirect()->route('user.index',["title"=>"Post",'active'=>'User'])->with(['success'=>'data telah berhasil di delete!']);
    }

}
