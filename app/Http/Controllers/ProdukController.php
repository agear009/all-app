<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;
use App\Models\Notifikasi;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\RedirectResponse;

class ProdukController extends Controller
{
    //
    public function Index(){
        $no=0;
        $no++;

        $produk=Produk::all();
        return View('Product.Index',["title"=>"Control Panel","active"=>"Product"],compact('produk','no'));
    }
    public function create()
    {
        return view('Product.Create',["title"=>"Produk","active"=>"Produk"]);
    }

    public function store(Request $request): RedirectResponse
    {

        //dd($request);


        $validated = $request->validate([


        'category'=>'required|max:255',
        'name'=>'required|max:255',
        'image'=>'image|mimes:jpeg,jpg,png',
        'description'=>'required|max:255',
        'price'=>'required',
        'status'=>'required|max:255',
        'stock'=>'required'
        ]);
        $image=$request->file('image');
        $image->storeAs('public/Produk/', $image->hashName());

        //$image-> storeAs('public/Produk', $image->hashName());

        Produk::create([
            'category'=>$request->category,
            'name'=>$request->name,
            'image'=>$image->hashName(),
            'description'=>$request->description,
            'price'=>$request->price,
            'status'=>$request->status,
            'stock'=>$request->stock
        ]);
        notifikasi::create([
            'id_user'=>$request->category,
            'aksi'=>'Menambah Produk',
            'date'=>now()
        ]);
        return redirect('/produk')->with('success',' successfull! ');
    }


    public function edit(string $id)
    {
        $produk=Produk::findOrFail($id);
        return view('Product.Edit',["title"=>"Produk","active"=>"Edit"],compact('produk'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([

            'category'=>'required|max:255',
            'name'=>'required|max:255',
            'description'=>'required|max:255',
            'price'=>'required',
            'status'=>'required|max:255',
            'stock'=>'required'


        ]);
           // dd($request);
            $Produk=Produk::FindOrFail($id);

            if($request->hasFile('image'))
            {
                //dd($request);
                //upload new image
                $image=$request->file('image');
                $image->storeAs('public/Produk/', $image->hashName());

                //$image->storeAs('public/Produk',$image->hashName());


                //delete old image
                //dd(Storage::delete('public/Produk/'.$Produk->image));
                Storage::delete('public/Produk/'.$Produk->image);

                //update Produk with new image
                $Produk->update([
                    'category'=>$request->category,
                    'name'=>$request->name,
                    'image'=>$image->hashName(),
                    'description'=>$request->description,
                    'price'=>$request->price,
                    'status'=>$request->status,
                    'stock'=>$request->stock

                ]);

            }

            else
            {
                $Produk->update([
                    'category'=>$request->category,
                    'name'=>$request->name,
                    'description'=>$request->description,
                    'price'=>$request->price,
                    'status'=>$request->status,
                    'stock'=>$request->stock

                ]);

            }
            return redirect('/produk')->with('success','Edit Berhasil! ');
        }


    public function destroy(string $id)
    {
        $Produk=Produk::findOrFail($id);

        //delete image
           //delete old image
           Storage::delete('public/Produk/'.$Produk->image);



        // delete member
        $Produk->delete();

        //redirect to index
        return redirect()->route('produk.index',["title"=>"Produk",'active'=>'User'])->with(['success'=>'data telah berhasil di delete!']);
    }

}
