<?php

namespace App\Notifications;

use Illuminate\Notifications\Notification;
use NotificationChannels\Telegram\TelegramMessage;


class ConatctMassegeNotification extends Notification
{
//    use Queueable;


    public function __construct()
    {

    }


    public function via($notifiable)
    {
        return ['telegram'];
    }
    public function toTelegram($notifiable)
    {
       return TelegramMessage::create()
            ->to($notifiable)
            ->content('Nilli it');
    }

}
