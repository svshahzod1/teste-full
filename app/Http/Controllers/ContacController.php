<?php

namespace App\Http\Controllers;

use App\Notifications\ConatctMassegeNotification;
use Illuminate\Http\Request;
use NotificationChannels\Telegram\TelegramMessage;
use Illuminate\Support\Facades\Notification;


class ContacController extends Controller
{
    public function index()
    {
        return view('contact');
    }

    public function contact(Request $request)
    {
        $my_tg_id= 976090739;

        Notification::send($my_tg_id ,new ConatctMassegeNotification());


        dd($request->input());
    }
}
