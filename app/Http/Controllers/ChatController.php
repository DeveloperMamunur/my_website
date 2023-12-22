<?php

namespace App\Http\Controllers;

use App\Models\Chat;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class ChatController extends Controller
{
    public function index(User $user)
    {
        $chats = Chat::latest()->get();
        return view('admin.chat.index', compact('user', 'chats'));
    }
    public function adminstore(Request $request)
    {
        // dd($request);
        $request->validate([
            'admin_id' => ['required', 'integer'],
            'user_id' => ['required', 'integer'],
            // 'message' => ['required', 'string'],
        ]);

        $message = new Chat();
        $message->admin_id = $request->admin_id;
        $message->user_id = $request->user_id;
        $message->message = $request->message;
        $message->creator = Auth::guard('admin')->user()->name;
        $message->slug = Str::slug(Auth::guard('admin')->user()->name);
        $message->status = 1;
        $message->save();

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $imageName = Date('Y-m-d-H-i-s') . '.' . $file->getClientOriginalExtension();
            $directory = 'storage/uploads/chat/';
            $file->move($directory, $imageName);
            $imageUrl = $directory . $imageName;
            $message->image = $imageUrl;
            $message->save();
        }
        return back();
    }
    public function userstore(Request $request)
    {
        $request->validate([
            'user_id' => ['required', 'integer'],
            // 'message' => ['required', 'string'],
        ]);

        $message = new Chat();
        $message->user_id = Auth::user()->id;
        $message->message = $request->message;
        $message->creator = Auth::user()->name;
        $message->slug = Str::slug(Auth::user()->name);
        $message->status = 1;
        $message->save();

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $imageName = Date('Y-m-d-H-i-s') . '.' . $file->getClientOriginalExtension();
            $directory = 'storage/uploads/chat/';
            $file->move($directory, $imageName);
            $imageUrl = $directory . $imageName;
            $message->image = $imageUrl;
            $message->save();
        }
        return redirect()->route('chat.notify');

        return back();
    }

    public function fetchChat()
    {
        $chats = Chat::with('users:id,image', 'admin:id,image')->latest()->get();
        // dd($chats);
        return response()->json([
            'chats' => $chats,
        ]);
    }
    public function fetch_Chat()
    {
        $chats = Chat::with('users:id,image', 'admin:id,image')->latest()->get();
        // dd($chats);
        return response()->json([
            'chats' => $chats,
        ]);
    }
}
