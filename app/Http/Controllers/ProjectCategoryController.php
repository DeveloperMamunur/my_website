<?php

namespace App\Http\Controllers;

use App\Models\ProjectCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class ProjectCategoryController extends Controller
{
    public function cat_store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'unique:project_categories,name'],
        ]);
        $project_cat = new ProjectCategory();
        $project_cat->name = $request->name;
        $project_cat->creator = Auth::guard('admin')->user()->name;
        $project_cat->slug = Str::slug($project_cat->name);
        $project_cat->status = $request->status;
        $project_cat->save();

        return redirect()->route('admin.project.index')->with('success', 'Project Category Create Successfuly');
    }
}
