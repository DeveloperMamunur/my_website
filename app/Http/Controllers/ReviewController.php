<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class ReviewController extends Controller
{
    public function index()
    {
        $reviews = Testimonial::latest()->paginate(15);
        return view('backend.review.index', compact('reviews'));
    }
    public function create()
    {
        return view('backend.review.create');
    }

    public function store(Request $request, User $user)
    {
        if (Auth::user()->city == null && Auth::user()->country == null) {
            $request->validate([
                'user_id' => ['required'],
                'city' => ['required'],
                'country' => ['required'],
                'description' => ['required', 'max:500', 'min:25'],
            ]);
        } else {
            $request->validate([
                'user_id' => ['required'],
                'description' => ['required', 'max:500'],
            ]);
        }

        $review = new Testimonial();
        $review->user_id = $request->user_id;
        $review->description = $request->description;
        $review->creator = Auth::user()->name;
        $review->slug = Str::slug(Auth::user()->name);
        $review->status = 2;
        $review->save();

        if (Auth::user()->city == null && Auth::user()->country == null) {
            $user = User::find(Auth::user()->id);
            $user->city = $request->city;
            $user->country = $request->country;
            $user->update();
        }

        return redirect()->route('review.index')->with('success', 'Review Create Successfuly');
    }

    public function edit(Testimonial $review)
    {
        return view('backend.review.edit', compact('review'));
    }

    public function update(Request $request, Testimonial $review)
    {
        $request->validate([
            'user_id' => ['required'],
            'description' => ['required', 'max:500', 'min:25'],
        ]);

        $review->user_id = Auth::user()->id;
        $review->description = $request->description;
        $review->creator = Auth::user()->name;
        $review->slug = Str::slug(Auth::user()->name);
        $review->status = 2;
        $review->update();

        return redirect()->route('review.index')->with('success', 'Review Update Successfuly');
    }

    public function destroy(Testimonial $review)
    {
        $review->delete();
        return redirect()->route('review.index')->with('success', 'Review Delete Successfuly');
    }
}
