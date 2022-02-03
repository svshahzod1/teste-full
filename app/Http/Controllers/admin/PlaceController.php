<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Place;

class PlaceController extends Controller
{
    
    public function index()
    {
        $guests = Place::paginate(4);
        return view('admin/place/index', compact('guests'));
    }


    public function store(Request $request)
    {
        $guestValidateData = $request->validate([
            'name' => 'required|min:3|max:20',
            'phone' => 'required|numeric',
            'date' => 'required',
            'time' => 'required',
            'guest' => '',
            'email' => 'required|email'
        ]);

        $created = Place::create($guestValidateData);
        if($created){
            return redirect()->back();
        }
        return redirect()->back();
    }


    public function destroy($id)
    {
        $mexmon = Place::find($id);
        $mexmon->delete();
        return redirect()->route('admin/place/index')->with(['success' => 'O`chirildi']);
    }

}
