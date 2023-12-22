<?php

namespace App\Http\Controllers\Notification;

use App\Http\Controllers\Controller;
use App\Models\Chat;
use App\Models\User;
use App\Notifications\ChatNotification;
use Illuminate\Support\Facades\Auth;

class ChatNotificationController extends Controller
{
    public function chatnotify()
    {
        $chat = Chat::latest()->first();
        Auth::user()->notify(new ChatNotification($chat));

        return redirect()->route('dashboard');
    }

    public function markasread(User $user, $id)
    {
        if ($id) {
            $user->unreadNotifications->where('id', $id)->markAsRead();
        }
        return back();
    }
}
