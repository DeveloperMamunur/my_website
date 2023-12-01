<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class TestimonialController extends Controller
{
    public function index()
    {
        $testimonials = Testimonial::with('users')->latest()->paginate(15);
        return view('admin.testimonial.index', compact('testimonials'));
    }
    public function create()
    {
        return view('admin.testimonial.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required'],
            'location' => ['required'],
            'description' => ['required'],
        ]);
        $testimonial = new Testimonial();
        $testimonial->name = $request->name;
        $testimonial->location = $request->location;
        $testimonial->description = $request->description;
        $testimonial->creator = Auth::guard('admin')->user()->name;
        $testimonial->slug = Str::slug($testimonial->name);
        $testimonial->status = $request->status;
        $testimonial->save();

        return redirect()->route('admin.testimonial.index')->with('success', 'Review Create Successfuly');
    }

    public function edit(Testimonial $testimonial)
    {
        return view('admin.testimonial.edit', compact('testimonial'));
    }

    public function update(Request $request, Testimonial $testimonial)
    {
        $request->validate([
            'name' => ['required'],
            'location' => ['required'],
            'description' => ['required'],
        ]);

        $testimonial->name = $request->name;
        $testimonial->location = $request->location;
        $testimonial->description = $request->description;
        $testimonial->creator = Auth::guard('admin')->user()->name;
        $testimonial->slug = Str::slug($testimonial->name);
        $testimonial->status = $request->status;
        $testimonial->update();

        return redirect()->route('admin.testimonial.index')->with('success', 'Review Update Successfuly');
    }

    public function destroy(Testimonial $testimonial)
    {
        $testimonial->delete();
        return redirect()->route('admin.testimonial.index')->with('success', 'Review Delete Successfuly');
    }

    public function unpublish(Testimonial $testimonial)
    {
        $testimonial->status = 2;
        $testimonial->update();

        return redirect()->route('admin.testimonial.index')->with('success', 'Review Unpublish Successfuly');
    }

    public function publish(Testimonial $testimonial)
    {
        $testimonial->status = 1;
        $testimonial->update();

        return redirect()->route('admin.testimonial.index')->with('success', 'Review Publish Successfuly');
    }
}
