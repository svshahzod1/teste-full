<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Blog;

class BlogController extends Controller
{
    
    public function index()
    {
        //$blog = DB::table('blogs')->get();

        $blog = Blog::paginate(4);
        return view('admin/blogs/index', compact('blog'));
    }

    public function create()
    {
        return view('admin/blogs/create');
    }

    public function store(Request $request)
    {
        $blodValidateData = $request->validate([
            'date' => 'required',
            'author' => 'required|min:3|max:20',
            'short' => 'required|min:10|max:1000',
            'image' => 'nullable|file|mimes:jpg,jpeg,png|max:4096'
        ]);
        
        $full_path = null;
        if($uploaded = $request->file('image')){

            $uploaded = $request->file('image');
            $extension = $uploaded->getClientOriginalExtension();
            $img_name = time()."_img".".$extension";
            $uploaded->move(public_path('images/blog'), $img_name);
            $full_path = '/images/blog/'.$img_name;
        }

        $blodValidateData['image'] = $full_path;

        $created = Blog::create($blodValidateData);

        if($created){
            return redirect()->route('admin/blogs/index')->with(['success' => 'Yaratildi']);
        }
        return redirect()->back();
    }

    public function edit($id)
    {
        //$item = DB::table('blogs')->where('id', $id)->first();

        $item = Blog::findOrFail($id);
        return view('admin/blogs/edit', compact('item'));
    }

    public function update($id, Request $request)
    {
        $bloglar = Blog::find($id);

        $blodUpdateValidateData = $request->validate([
            'date' => 'required',
            'author' => 'required|min:3|max:20',
            'short' => 'required|min:10|max:1000',
            'image' => 'nullable|file|mimes:jpg,jpeg,png|max:4096'
        ]);
        
        $full_path = $bloglar->image;
        if($uploaded = $request->file('image')){

            $uploaded = $request->file('image');
            $extension = $uploaded->getClientOriginalExtension();
            $img_name = time()."_img".".$extension";
            $uploaded->move(public_path('images/blog'), $img_name);
            $full_path = '/images/blog/'.$img_name;
        }

        $blodUpdateValidateData['image'] = $full_path;

        $bloglar->update($blodUpdateValidateData);
        return redirect()->route('admin/blogs/index')->with(['success' => 'O`zgartirildi']);
    }

    public function destroy($id)
    {
        $bloglar = Blog::find($id);
        $bloglar->delete();
        return redirect()->route('admin/blogs/index')->with(['success' => 'O`chirildi']);
    }

}
