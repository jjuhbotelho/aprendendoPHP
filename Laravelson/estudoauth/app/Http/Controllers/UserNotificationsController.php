<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserNotificationsController extends Controller
{
    public function show()
    {
        $notifications = tap(auth()->user()->unreadNotifications)->markAsRead();

        return view('notifications.show', [
            'notifications' => $notifications
        ]);
    }
}
