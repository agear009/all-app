<?php

namespace App\Http\Controllers;
use Illuminate\Validation\Validator;
use Illuminate\Routing\Controller;
use Illuminate\Foundation\Validation\ValidatesRequests;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Notifikasi;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    public function Index(){
        $no=0;
        $no++;

        $Post=Post::all();
        return View('Post.Index',["title"=>"Control Panel","active"=>"Home"],compact('Post','no'));
    }
    public function create()
    {
        return view('Post.Create',["title"=>"Post","active"=>"Post"]);
    }




    public function store(Request $request): RedirectResponse
    {

        //dd($request);


        $validated = $request->validate([


        'id_category'=>'required|max:255',
        'image'=>'image|mimes:jpeg,jpg,png',
        'title'=>'required|max:255',
        'content'=>'required',
        'author'=>'required|max:255',
        'source'=>'required'
        ]);
        $image=$request->file('image');
        $image->storeAs('Post', $image->hashName());
        //$image-> storeAs('public/Post', $image->hashName());

        Post::create([
            'id_category'=>$request->id_category,
            'image'=>$image->hashName(),
            'title'=>$request->title,
            'content'=>$request->content,
            'author'=>$request->author,
            'source'=>$request->source
        ]);
        notifikasi::create([
            'id_user'=>$request->id_category,
            'aksi'=>'Menambah Positingan',
            'date'=>now()
        ]);
        return redirect('/post')->with('success',' successfull! ');
    }

    public function edit(string $id)
    {
        $Post=Post::findOrFail($id);
        return view('Post.Edit',["title"=>"Post","active"=>"Edit"],compact('Post'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request,[

        'category_id'=>'required|max:255',
        'image_image_id'=>'max:255',
        'title'=>'required|max:255',
        'content'=>'required',
        'author'=>'required|max:255',
        'source'=>'required'


        ]);

            $this->validate($request,[

                'namePost'=>'required|max:255',


            ]);
            //dd($request);
            $Post=post::FindOrFail($id);

            if($request->hasFile('image'))
            {
                //upload new image
                $image=$request->file('image');
                $image->storeAs('Post', $image->hashName());
                //$image->storeAs('public/Post',$image->hashName());


                //delete old image
                Storage::delete('public/Post/'.$Post->image);

                //update Post with new image
                $Post->update([
                    'category_id'=>$request->category_id,
                    'image'=>$image->hashName(),
                    'title'=>$request->title,
                    'content'=>$request->content,
                    'author'=>$request->author,
                    'source'=>$request->source

                ]);

            }

            else
            {
                $Post->update([
                    'category_id'=>$request->category_id,
                    'title'=>$request->title,
                    'content'=>$request->content,
                    'author'=>$request->author,
                    'source'=>$request->source

                ]);

            }
            return redirect('/post')->with('success','Edit Berhasil! ');
        }


    public function destroy(string $id)
    {
        $Post=Post::findOrFail($id);

        //delete image



        // delete member
        $Post->delete();

        //redirect to index
        return redirect()->route('post.index',["title"=>"Post",'active'=>'User'])->with(['success'=>'data telah berhasil di delete!']);
    }

}