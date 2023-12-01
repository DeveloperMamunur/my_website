<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;

class AboutController extends Controller
{
    public function index()
    {
        $about = About::where('id', 1)->get();
        return view('admin.about.index', compact('about'));
    }
    public function create()
    {
        return view('admin.about.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'unique:abouts,name'],
            'description' => ['required'],
            'image' => ['required', 'mimes:png,jpg,jpeg,svg', 'max:2048'],
        ]);
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $imageName = Date('Y-m-d-H-i-s') . '.' . $file->getClientOriginalExtension();
            $directory = 'storage/uploads/about/';
            $file->move($directory, $imageName);
            $imageUrl = $directory . $imageName;
        }
        $about = new About();
        $about->name = $request->name;
        $about->description = $request->description;
        $about->image = $imageUrl;
        $about->icon1 = $request->icon1;
        $about->icon2 = $request->icon2;
        $about->icon3 = $request->icon3;
        $about->icon4 = $request->icon4;
        $about->icon5 = $request->icon5;
        $about->link1 = $request->link1;
        $about->link2 = $request->link2;
        $about->link3 = $request->link3;
        $about->link4 = $request->link4;
        $about->link5 = $request->link5;
        $about->creator = Auth::guard('admin')->user()->name;
        $about->slug = Str::slug($about->name);
        $about->status = $request->status;
        $about->save();

        return redirect()->route('admin.about.index')->with('success', 'About Create Successfuly');
    }

    public function edit(About $about)
    {
        return view('admin.about.edit', compact('about'));
    }

    public function update(Request $request, About $about)
    {
        $request->validate([
            'name' => ['required', Rule::unique('abouts')->ignore($about->id)],
            'description' => ['required'],
            // 'image' => ['required', 'mimes:png,jpg,jpeg,svg', 'max:2048'],
        ]);

        $about->name = $request->name;
        $about->description = $request->description;
        $about->icon1 = $request->icon1;
        $about->icon2 = $request->icon2;
        $about->icon3 = $request->icon3;
        $about->icon4 = $request->icon4;
        $about->icon5 = $request->icon5;
        $about->link1 = $request->link1;
        $about->link2 = $request->link2;
        $about->link3 = $request->link3;
        $about->link4 = $request->link4;
        $about->link5 = $request->link5;
        $about->creator = Auth::guard('admin')->user()->name;
        $about->slug = Str::slug($about->name);
        $about->status = $request->status;
        $about->save();

        if ($request->hasFile('image')) {
            unlink(public_path() . '/' . $about->image);
            $file = $request->file('image');
            $imageName = Date('Y-m-d-H-i-s') . '.' . $file->getClientOriginalExtension();
            $directory = 'storage/uploads/about/';
            $file->move($directory, $imageName);
            $imageUrl = $directory . $imageName;
            $about->image = $imageUrl;
            $about->save();
        }

        return redirect()->route('admin.about.index')->with('success', 'About Update Successfuly');
    }

    public function destroy(About $about)
    {
        unlink(public_path() . '/' . $about->image);
        $about->delete();
        return redirect()->route('admin.about.index')->with('success', 'About Delete Successfuly');
    }
}
