<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Food;
use App\Models\Chef;
use App\Models\Blog;

class PageController extends Controller
{
    public function about()
    {
        return view('about');
    }

    public function blog_single()
    {
        return view('blog-single');
    }

    public function blog()
    {
        $blogs = Blog::select(['image','date','author','short'])->paginate(3);
        return view('blog', compact('blogs'));
    }

    public function chef()
    {
        //$chefs = $this->getAllChefs();

        //return view('chef', ['chef' => $chef]);
        //return view('chef', compact('chefs'));
        $chefs = Chef::select(['name','job','bio','img'])->paginate(4);

        return view('chef')->with('chefs', $chefs);
    }

    public function contact()
    {
        return view('contact');
    }

    public function index()
    {
        //$category_columns = ['id','name'];
        //$categories = DB::table('categories')->select($category_columns)->get();
        $categories = $this->getCategories();
        $chefs = Chef::select(['name','job','bio','img'])->get();
        $ovqatlar = Food::select(['id','categoriy_id','nomi','image','retsept','narxi'])->get();
        $blogs = Blog::select(['image','date','author','short'])->get();
        return view('index', compact('chefs','ovqatlar','categories','blogs'));
    }

    public function menu(Request $request)
    {
        //$category_columns = ['id','name'];
        //$categories = DB::table('categories')->select($category_columns)->get();
        $categories = $this->getCategories();
        $foods = Food::select(['id','categoriy_id','nomi','image','retsept','narxi'])
            ->filter($request)
            ->get();

            /* 2-nchi usul */
            /* ->where(function ($query) use ($category_id, $search){
                if(!empty($category_id)){
                    $query->where('categoriy_id', $category_id);
                }

                if(!empty($search)){
                    $query->where('nomi', 'like', "%$search%");
                }
            }) */
    
        return view('menu', compact('categories','foods'));
    }

    public function reservation()
    {
        return view('reservation');
    }

    private function getAllChefs()
    {
        /* $chefs =  [
            [
                'id' => 1,
                'name' => 'John Gustavo',
                'about'=> 'I am an ambitious workaholic, but apart from that, pretty simple person.',
                'role' => 'CEO, Co Founder',
                'image'=> 'images/chef-1.jpg'
            ],
            [
                'id' => 2,
                'name' => 'Odil Ahmedov',
                'about'=> 'I am an ambitious workaholic, but apart from that, pretty simple person.',
                'role' => 'Yordamchi oshpaz',
                'image'=> 'images/chef-2.jpg'
            ],
            [
                'id' => 3,
                'name' => 'Ahad Qayum',
                'about'=> 'I am an ambitious workaholic, but apart from that, pretty simple person.',
                'role' => 'Yordamchi oshpaz',
                'image'=> 'images/chef-3.jpg'
            ],
            [
                'id' => 4,
                'name' => 'Eldor Shomurodov',
                'about'=> 'I am an ambitious workaholic, but apart from that, pretty simple person.',
                'role' => 'Desertchi',
                'image'=> 'images/chef-4.jpg'
            ],
            [
                'id' => 5,
                'name' => 'Elon Musk',
                'about'=> 'Tesla, Buy please Tesla.',
                'role' => 'Director',
                'image'=> 'images/chef-1.jpg'
            ],
        ]; */

        //return json_decode(json_encode($chefs), false);
    }

    private function  getMenuCategories()
    {
        $categories = [
            [
                'id' => 1,
                'name' => 'Milliy Taomlar'
            ],
            [
                'id' => 2,
                'name' => 'Uygur Taomlari'
            ],
            [
                'id' => 3,
                'name' => 'Shirinliklar'
            ]
        ];

        return json_decode(json_encode($categories), false);
    }

    private function getAllFoods()
    {
        $foods = [
            [
                'id' => 1,
                'category_id' => 1,
                'name' => 'Palov',
                'image'=> 'images/xbreakfast-1.jpg.pagespeed.ic.xV22VMsl6g.jpg',
                'price'=> '1.5',
                'tarkib' => "Go'sht, Guruch, Qazi, Sabzi"
            ],
            [
                'id' => 2,
                'category_id' => 2,
                'name' => "Lag'mon",
                'image'=> 'images/xbreakfast-2.jpg.pagespeed.ic.wmmE7NujQH.jpg',
                'price'=> '1.8',
                'tarkib' => "Go'sht, Guruch, Qazi, Sabzi"
            ],
        ];

        return json_decode(json_encode($foods), false);
    }

    private function getFoodByCategory($categoryId)
    {
        $allFood = $this->getAllFoods();
        $food = [];
        //
        return json_decode(json_encode($food), false);
    }

    public function getCategories()
    {
        $category_columns = ['id','name'];
        $categories = DB::table('categories')->select($category_columns)->get();
        return $categories;
    }

}
