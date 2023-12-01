<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;

class AdminUserController extends Controller
{
    public function update(Request $request, Admin $user)
    {
        if ($request->hasFile('image')) {
            if ($user->image) {
                unlink(public_path() . '/' . $user->image);
            }
            $file = $request->file('image');
            $imageName = Date('Y-m-d-H-i-s') . '.' . $file->getClientOriginalExtension();
            $directory = 'storage/uploads/admin/';
            $file->move($directory, $imageName);
            $imageUrl = $directory . $imageName;
            $user->image = $imageUrl;
            $user->save();
        }

        return redirect()->route('admin.profile.edit')->with('message', 'Image Update Successfully');
    }

    public function phone(Request $request, Admin $user)
    {
        $user->phone = $request->phone;
        $user->save();
        return redirect()->route('admin.profile.edit')->with('message', 'Image Update Successfully');
    }
    public function address(Request $request, Admin $user)
    {
        $user->address = $request->address;
        $user->city = $request->city;
        $user->country = $request->country;
        $user->save();
        return redirect()->route('admin.profile.edit')->with('message', 'Address Update Successfully');
    }
}
