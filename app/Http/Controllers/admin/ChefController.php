<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Chef;

class ChefController extends Controller
{
    
    public function index()
    {
        //$chefs = DB::table('chefs')->get();

        $chefs = Chef::paginate(4);
       return view('admin/chefs/index', compact('chefs'));
    }

    public function create()
    {
        return view('admin/chefs/create');
    }

    public function store(Request $request)
    {
        $chefValidateData = $request->validate([
            'name' => 'min:3|max:20',
            'job' => 'min:5|max:100',
            'bio' => 'min:10|max:1000',
            'img' => 'nullable|file|mimes:jpg,png,jpeg|max:10240'
        ]);

        $full_path = null;
        if($uploaded = $request->file('img')){

            $uploaded = $request->file('img');
            $extension = $uploaded->getClientOriginalExtension();
            $img_name = time()."_img".".$extension";
            $uploaded->move(public_path('images/chef'), $img_name);
            $full_path = '/images/chef/'.$img_name;

        }

        $chefValidateData['img'] = $full_path;

        $created = Chef::create($chefValidateData);

        if($created){
            return redirect()->route('admin/chefs/index')->with(['success' => 'Yaratildi']);
        }
        return redirect()->back()->withErrors(['msg' => 'Xato ma`lumot']);
    }

    public function edit($id)
    {
        //$item = DB::table('chefs')->where('id', $id)->first();

        $item = Chef::findOrFail($id);
        return view('admin/chefs/edit', compact('item'));
    }
    
    public function update($id, Request $request)
    {
        $chef = Chef::find($id);

        $chefUpdateValidateData = $request->validate([
            'name' => 'min:3|max:20',
            'job' => 'min:5|max:100',
            'bio' => 'min:10|max:1000',
            'img' => 'nullable|file|mimes:jpg,png,jpeg|max:10240'
        ]);

        $full_path = $chef->img;
        if($uploaded = $request->file('img')){

            $uploaded = $request->file('img');
            $extension = $uploaded->getClientOriginalExtension();
            $img_name = time()."_img".".$extension";
            $uploaded->move(public_path('images/chef'), $img_name);
            $full_path = '/images/chef/'.$img_name;

        }

        $chefUpdateValidateData['img'] = $full_path;

        $chef->update($chefUpdateValidateData);
        return redirect()->route('admin/chefs/index')->with(['success' => 'O`zgartirildi']);
    }

    public function destroy($id)
    {
        $chef = Chef::find($id);
        $chef->delete();
        return redirect()->route('admin/chefs/index')->with(['success' => 'O`chirildi']);
    }

}
