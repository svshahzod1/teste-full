<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Food;
use App\Models\Category;

class FoodController extends Controller
{
    
    public function index()
    {
        //$foods = DB::table('food')->get();

        $foods = Food::with(['category:id,name'])->paginate(4);
       return view('admin/food/index', compact('foods'));
    }

    public function create()
    {
        $categories = Category::select(['id','name'])->get();
        return view('admin/food/create', compact('categories'));
    }

    public function store(Request $request)
    {
        $foodValidateData = $request->validate([
            'nomi' => 'required|string|min:3|max:255',
            'categoriy_id' => 'required|integer',
            'narxi' => 'numeric|min:0|max:99999999',
            'retsept' => 'min:10|max:255',
            'image' => 'nullable|file|mimes:jpg,png,svg,webp|max:4096'
        ]);
        
        $full_path = null;
        if($uploaded = $request->file('image')){

            $uploaded = $request->file('image');
            $extension = $uploaded->getClientOriginalExtension();
            $img_name = time()."_img".".$extension";
            $uploaded->move(public_path('images/food'), $img_name);
            $full_path = '/images/food/'.$img_name;
        }

        $foodValidateData['image'] = $full_path;
            
        $created = Food::create($foodValidateData);
        
        if($created){
            return redirect()->route('admin/foods/index')->with(['success' => 'Yaratildi']);
        }
        return redirect()->back()->withErrors(['msg' => 'Nomalum xatolik']);
    }

    public function edit($id)
    {
        //$item = DB::table('food')->where('id', $id)->first();

        $categories = Category::select(['id','name'])->get();
        $item = Food::findOrFail($id);
        return view('admin/food/edit', compact('item','categories'));
    } 

    public function update($id, Request $request)
    {
        $food = Food::find($id);

        $foodUpdateValidateData = $request->validate([
            'nomi' => 'required|string|min:3|max:255',
            'categoriy_id' => 'required|integer',
            'narxi' => 'numeric|min:0|max:99999999',
            'retsept' => 'min:10|max:255',
            'image' => 'nullable|file|mimes:jpg,png,svg,webp|max:4096'
        ]);
        
        $full_path = null;
        if($uploaded = $request->file('image')){

            $uploaded = $request->file('image');
            $extension = $uploaded->getClientOriginalExtension();
            $img_name = time()."_img".".$extension";
            $uploaded->move(public_path('images/food'), $img_name);
            $full_path = '/images/food/'.$img_name;
        }

        $foodUpdateValidateData['image'] = $full_path;

        $food->update($foodUpdateValidateData);
        return redirect()->route('admin/foods/index')->with(['success' => 'O`zgartirilidi']);
    }

    public function destroy($id)
    {
        $food = Food::find($id);
        $food->delete();
        return redirect()->route('admin/foods/index')->with(['success' => 'O`chirildi']);
    }

}
