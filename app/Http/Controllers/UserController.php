<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::latest()->paginate(12);
        return view('admin.user.index', compact('users'));
    }
    public function update(Request $request, User $user)
    {
        if ($request->hasFile('image')) {
            if ($user->image) {
                unlink(public_path() . '/' . $user->image);
            }
            $file = $request->file('image');
            $imageName = Date('Y-m-d-H-i-s') . '.' . $file->getClientOriginalExtension();
            $directory = 'storage/uploads/user/';
            $file->move($directory, $imageName);
            $imageUrl = $directory . $imageName;
            $user->image = $imageUrl;
            $user->save();
        }

        return redirect()->route('profile.edit')->with('message', 'Image Update Successfully');
    }

    public function show(User $user)
    {
        return view('admin.user.view', compact('user'));
    }

    public function phone(Request $request, User $user)
    {
        $user->phone = $request->phone;
        $user->save();
        return redirect()->route('profile.edit')->with('message', 'Image Update Successfully');
    }

    public function address(Request $request, User $user)
    {
        $user->address = $request->address;
        $user->city = $request->city;
        $user->country = $request->country;
        $user->save();
        return redirect()->route('profile.edit')->with('message', 'Address Update Successfully');
    }

    public function block(User $user)
    {
        $user->status = 2;
        $user->update();

        return back()->with('success', 'Review Unpublish Successfuly');
    }

    public function unblock(User $user)
    {
        $user->status = 1;
        $user->update();

        return back()->with('success', 'Review Publish Successfuly');
    }
}
