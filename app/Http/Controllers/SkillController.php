<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;

class SkillController extends Controller
{
    public function index()
    {
        $skills = Skill::where('status', 1)->latest()->paginate(15);
        return view('admin.skills.index', compact('skills'));
    }
    public function create()
    {
        return view('admin.skills.create');
    }

    public function store(Request $request)
    {
        // dd($request);
        $request->validate([
            'name' => ['required', 'unique:skills', 'max:70'],
            'category' => ['required', 'max:40'],
            'value' => ['required', 'max:3'],
            'order' => ['required', 'max:2'],
            'color' => ['required'],
        ]);

        $skill = new Skill();
        $skill->name = $request->name;
        $skill->sec_name = $request->sec_name;
        $skill->category = $request->category;
        $skill->value = $request->value;
        $skill->order = $request->order;
        $skill->color = $request->color;
        $skill->color_sec = $request->color_sec;
        $skill->creator = Auth::guard('admin')->user()->name;
        $skill->slug = Str::slug($skill->name);
        $skill->status = $request->status;
        $skill->save();

        return redirect()->route('admin.skills.index')->with('success', 'Skill Create Successfuly');
    }

    public function edit(Skill $skill)
    {
        return view('admin.skills.edit', compact('skill'));
    }

    public function update(Request $request, Skill $skill)
    {
        $request->validate([
            'name' => ['required', 'max:70', Rule::unique('skills')->ignore($skill->id)],
            'category' => ['required', 'max:40'],
            'value' => ['required', 'max:3'],
            'order' => ['required', 'max:2'],
            'color' => ['required'],
        ]);

        $skill->name = $request->name;
        $skill->sec_name = $request->sec_name;
        $skill->category = $request->category;
        $skill->value = $request->value;
        $skill->order = $request->order;
        $skill->color = $request->color;
        $skill->color_sec = $request->color_sec;
        $skill->status = $request->status;
        $skill->update();

        return redirect()->route('admin.skills.index')->with('success', 'Skill Update Successfuly');
    }

    public function destroy(Skill $skill)
    {
        $skill->delete();
        return redirect()->route('admin.skills.index')->with('success', 'Skill Delete Successfuly');
    }
}
