<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContacController extends Controller
{
    public function index()
    {
        return view('contact');
    }

    public function contact(Request $request)
    {
     dd($request->input());
    }
}
