<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;
use App\Models\Notifikasi;
use Illuminate\Http\RedirectResponse;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class BeritaController extends Controller
{
    public function index() : View
    {
        $no = 0;
        $no++;

        $Berita = Berita::all();
        return view('Berita.Index', ["title" => "Control Panel", "active" => "Home"], compact('Berita','no'));
    }

    public function create() : View
    {
        return view('Berita.Create', ["title" => "Berita", "active" => "Berita"]);
    }

    public function store(Request $request): RedirectResponse
    {
        // validate form
        $validated = $request->validate([
            'category'=>'required|max:255',
            'image'=>'image|mimes:jpeg,jpg,png',
            'title'=>'required|max:255',
            'content'=>'required',
            'author'=>'required|max:255',
            'source'=>'required'
        ]);

        // upload image
        $image = $request->file('image');
        $image->storeAs('public/Beritas', $image->hashName());

        // create Berita
        Berita::create([
            'category'   => $request->category,
            'image'         => $image->hashName(),
            'title'         => $request->title,
            'content'       => $request->content,
            'author'        => $request->author,
            'source'        => $request->source
        ]);

        // create notification
        notifikasi::create([
            'id_user'   => $request->category,
            'aksi'      => 'Menambah Positingan',
            'date'      => now()
        ]);

        return redirect('/berita')->with('success',' successfull! ');
    }

    public function edit(string $id)
    {
        // get Berita by id
        $Berita = Berita::findOrFail($id);

        return view('Berita.Edit', ["title" => "Berita", "active" => "Edit"], compact('Berita'));
    }

    public function update(Request $request, $id)
    {
        // validate form
        $request->validate([
            'category'      => 'required|max:255',
            'title'         => 'required|max:255',
            'content'       => 'required',
            'author'        => 'required|max:255',
            'source'        => 'required'
        ]);

        // get Berita by id
        $Berita = Berita::findOrFail($id);

        // check if new image is uploaded
        if ($request->hasFile('image')) {
            //upload new image
            $image = $request->file('image');
            $image->storeAs('public/Beritas/', $image->hashName());

            // delete old image
            Storage::delete('public/Beritas/'. $Berita->image);

            // update Berita with new image
            $Berita->update([
                'category'   => $request->category,
                'image'         => $image->hashName(),
                'title'         => $request->title,
                'content'       => $request->content,
                'author'        => $request->author,
                'source'        => $request->source
            ]);
        } else {
            // update Berita without image
            $Berita->update([
                'category'   => $request->category,
                'title'         => $request->title,
                'content'       => $request->content,
                'author'        => $request->author,
                'source'        => $request->source
            ]);
        }

        //redirect to Berita index
        return redirect()->route('berita.index')->with(['success' => 'Data Berhasil Diubah!']);
    }


    public function destroy(string $id)
    {
        // get Berita by id
        $Berita = Berita::findOrFail($id);

        // delete image
        Storage::delete('public/Beritas/'. $Berita->image);

        // delete Berita
        $Berita->delete();

        //redirect to Berita index
        return redirect()->route('berita.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
