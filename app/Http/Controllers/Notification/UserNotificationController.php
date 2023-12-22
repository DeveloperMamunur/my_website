<?php

namespace App\Http\Controllers\Notification;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Notifications\UserNotification;
use App\Providers\RouteServiceProvider;

class UserNotificationController extends Controller
{
    public function notify()
    {
        if (auth()->user()) {
            $user = User::latest()->first();
            auth()->user()->notify(new UserNotification($user));
        }

        return redirect()->intended(RouteServiceProvider::HOME . '?verified=1')->with('success', 'Thank you for Rsgistration.');
    }

    public function markasread($id)
    {
        if ($id) {
            auth()->user()->unreadNotifications->where('id', $id)->markAsRead();
        }
        return back();
    }
}
