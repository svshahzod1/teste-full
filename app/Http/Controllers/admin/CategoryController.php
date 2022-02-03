<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Category;


class CategoryController extends Controller
{
    /**
     * Admin sahifada barcha kategoriyalarni ko'rsatish
     *
     */
    public function index()
    {
       //1-nchi usul
       //$categories = DB::table('categories')->orderBy('id', 'DESC')->get();

       //2-nchi usul
       $categories = Category::with(['food:id,nomi,categoriy_id'])->paginate(4);
       //dd($categories); 
       return view('admin/category/index', compact('categories'));
    }

    public function create()
    {
        return view('admin/category/create');
    }

    public function store(Request $request)
    {
        //$request->all(); 1-nchi metod
        //$request->input(); 2-nchi metod
        //$request->input('name'); 3-nchi metod
        //$request->name; 4-nchi metod
        //$request->only(['name','description']); 5-nchi metod
        //$request->except(['name']); 6-nchi metod


        /* 1-nchi usul */
        /* 
        $name = $request->name;
        $description = $request->description;

        $categoryData = [
            'name' => $name,
            'description' => $description
        ]; 
        
        $created = DB::table('categories')->insert($categoryData); 
        */

        /* 2-nchi usul */
        $categoryData = $request->input();

        $created = Category::create($categoryData);
        
        if($created){
            return redirect()->route('admin/categories/index')->with(['success' => 'Muaffaqiyatli yaratildi']);
        }
        return redirect()->back();

    }

    public function edit($id)
    {
        //1-nchi usul
        //$item = DB::table('categories')->where('id', $id)->first();

        //2-nchi usul
        //$item = Category::find($id);
        $item = Category::findOrFail($id);
        return view('admin/category/edit', compact('item'));
    }


    public function update($id, Request $request)
    {
        $category = Category::find($id);
        $category->update($request->input());
        return redirect()->route('admin/categories/index')->with(['success' => 'Muaffaqiyatli yaratildi']);
    }


    public function destroy($id)
    {
        /* 1-nchi usul, lakin yaxshi usul amas */
        /* $result = DB::table('categories')->delete($id); */

        /* 2-nchi usul */
        $category = Category::find($id);
        $category->delete();
        return redirect()->route('admin/categories/index')->with(['success' => 'Muaffaqiyatli o`chirildi']);

    }

}
