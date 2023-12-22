<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Chat;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $chats = Chat::with('admin')->latest()->get();
        $admin = Admin::whereId(1)->get();
        return view('dashboard', compact('chats', 'admin'));
    }
}
