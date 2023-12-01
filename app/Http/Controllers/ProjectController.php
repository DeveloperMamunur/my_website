<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\ProjectCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;

class ProjectController extends Controller
{
    public function index()
    {
        $project_cats = ProjectCategory::where('status', 1)->get();
        $projects = Project::where('status', 1)->latest()->paginate(15);
        return view('admin.project.index', compact('project_cats', 'projects'));
    }
    public function create()
    {
        $project_cats = ProjectCategory::where('status', 1)->latest()->get();
        return view('admin.project.create', compact('project_cats'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => ['required', 'unique:projects,title'],
            'category_id' => ['required'],
            'description' => ['required'],
            'image' => ['required', 'mimes:png,jpg,jpeg,svg|max:2048'],
            'project_link' => ['required'],
        ]);
        $project = new Project();
        $project->title = $request->title;
        $project->category_id = $request->category_id;
        $project->description = $request->description;
        $project->project_link = $request->project_link;
        $project->creator = Auth::guard('admin')->user()->name;
        $project->slug = Str::slug($project->title);
        $project->status = $request->status;
        $project->save();
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $imageName = Date('Y-m-d-H-i-s') . '.' . $file->getClientOriginalExtension();
            $directory = 'storage/uploads/project/';
            $file->move($directory, $imageName);
            $imageUrl = $directory . $imageName;
            $project->image = $imageUrl;
            $project->save();
        }

        return redirect()->route('admin.project.index')->with('success', 'Project Create Successfuly');
    }

    public function edit(Project $project)
    {

        $project_cats = ProjectCategory::where('status', 1)->get();
        return view('admin.project.edit', compact('project', 'project_cats'));
    }

    public function update(Request $request, Project $project)
    {
        $request->validate([
            'title' => ['required', Rule::unique('projects')->ignore($project->id)],
            'category_id' => ['required'],
            'description' => ['required'],
            // 'image' => ['required'],
            'project_link' => ['required'],
        ]);

        if ($request->hasFile('image')) {
            unlink(public_path() . '/' . $project->image);
            $file = $request->file('image');
            $imageName = Date('Y-m-d-H-i-s') . '.' . $file->getClientOriginalExtension();
            $directory = 'storage/uploads/project/';
            $file->move($directory, $imageName);
            $imageUrl = $directory . $imageName;
            $project->image = $imageUrl;
            $project->save();
        }

        $project->title = $request->title;
        $project->category_id = $request->category_id;
        $project->description = $request->description;
        $project->project_link = $request->project_link;
        $project->creator = Auth::guard('admin')->user()->name;
        $project->slug = Str::slug($project->title);
        $project->status = $request->status;
        $project->save();

        return redirect()->route('admin.project.index')->with('success', 'Project Update Successfuly');
    }

    public function destroy(Project $project)
    {
        unlink(public_path() . '/' . $project->image);
        $project->delete();
        return redirect()->route('admin.project.index')->with('success', 'Project Delete Successfuly');
    }

}
