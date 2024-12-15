<?php

namespace App\Http\Controllers;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\Users;
use App\Models\Notifikasi;
use Illuminate\Http\RedirectResponse;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Storage;

class UsersController extends Controller
{
    public function index() : View
    {
        $no = 0;
        $no++;

        $user = users::all();
        return view('User.Index', ["title" => "Control Panel", "active" => "Home"], compact('user','no'));
    }

    public function create() : View
    {
        return view('User.Create', ["title" => "Post", "active" => "Post"]);
    }

    public function store(Request $request): RedirectResponse
    {
        // validate form
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
        'bank'=>'required',
         'password'=>'required'
        ]);

        // upload image
        $image = $request->file('ktp');
        $image->storeAs('public/users', $image->hashName());

        // create post
        users::create([
           'name'=>$request->name,
            'email'=>$request->email,
            'ktp'=>$image->hashName(),
            'nohp'=>$request->nohp,
            'level'=>$request->level,
            'status'=>$request->status,
            'id_transaksi'=>$request->id_transaksi,
            'norek'=>$request->norek,
            'saldo'=>$request->saldo,
            'bank'=>$request->bank,
            'password'=>Hash::make($request->password)
        ]);

        // create notification
        Notifikasi::create([
            'id_user'   => $request->name,
            'aksi'      => 'Menambah User',
            'date'      => now()
        ]);

        return redirect('/user')->with('success',' successfull! ');
    }

    public function edit(string $id)
    {
        // get post by id
        $user = users::findOrFail($id);

        return view('User.Edit', ["title" => "Post", "active" => "Edit"], compact('user'));
    }

    public function update(Request $request, $id)
    {
        // validate form
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
            'bank'=>'required',
            'password'=>'required'
        ]);

        // get post by id
        $user = users::findOrFail($id);

        // check if new image is uploaded
        if ($request->hasFile('ktp')) {
            //upload new image
            $image = $request->file('ktp');
            $image->storeAs('public/users/', $image->hashName());

            // delete old image
            Storage::delete('public/users/'. $user->ktp);
            // update post with new image
            $user->update([
              'name'=>$request->name,
                    'email'=>$request->email,
                    'ktp'=>$image->hashName(),
                    'nohp'=>$request->nohp,
                    'level'=>$request->level,
                    'status'=>$request->status,
                    'id_transaksi'=>$request->id_transaksi,
                    'norek'=>$request->norek,
                    'saldo'=>$request->saldo,
                    'bank'=>$request->bank,
                    'password'=>Hash::make($request->password)
            ]);
        } else {
            // update post without image
            $user->update([
                'name'=>$request->name,
                'email'=>$request->email,
                'nohp'=>$request->nohp,
                'level'=>$request->level,
                'status'=>$request->status,
                'id_transaksi'=>$request->id_transaksi,
                'norek'=>$request->norek,
                'saldo'=>$request->saldo,
                'bank'=>$request->bank,
                'password'=>Hash::make($request->password)
            ]);
        }

        //redirect to post index
        return redirect()->route('user.index')->with(['success' => 'Data Berhasil Diubah!']);
    }


    public function destroy(string $id)
    {
        // get post by id
        $user = users::findOrFail($id);

        // delete image
        Storage::delete('public/users/'. $user->ktp);

        // delete post
        $user->delete();

        //redirect to post index
        return redirect()->route('user.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }

}
