<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Message;

class MessageController extends Controller
{
    
    public function index()
    {
        $messages = Message::paginate(4);
        return view('admin/xabar/index', compact('messages'));
    }

    
    public function create()
    {
        return view('admin/xabar/create');
    }


    public function store(Request $request)
    {
        $messageValidateData = $request->validate([
            'name' => 'required|string|min:3|max:25',
            'email' => 'required|email',
            'subject' => 'required|min:3|max:200',
            'message' => 'required|max:1000'
        ]);


        $created = Message::create($messageValidateData );

        if($created){
            return redirect()->back();
        }
        return redirect()->back();
    }


    public function destroy($id)
    {
        $xabarlar = Message::find($id);
        $xabarlar->delete();
        return redirect()->route('admin/xabar/index')->with(['success' => 'O`chirildi']);
    }

}
