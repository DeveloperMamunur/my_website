<?php

namespace App\Http\Controllers;

use App\Models\WorkProcess;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;

class WorkProcessController extends Controller
{
    public function index()
    {
        $wprocesses = WorkProcess::where('status', 1)->latest()->paginate(15);
        return view('admin.work_process.index', compact('wprocesses'));
    }
    public function create()
    {
        return view('admin.work_process.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'step' => ['required', 'unique:work_processes'],
            'sort_desc' => ['required'],
        ]);

        $wprocess = new WorkProcess();
        $wprocess->step = $request->step;
        $wprocess->sort_desc = $request->sort_desc;
        $wprocess->creator = Auth::guard('admin')->user()->name;
        $wprocess->slug = Str::slug($wprocess->step);
        $wprocess->status = $request->status;
        $wprocess->save();

        return redirect()->route('admin.wprocess.index')->with('success', 'Work Process Create Successfuly');
    }

    public function edit(WorkProcess $wprocess)
    {
        return view('admin.work_process.edit', compact('wprocess'));
    }

    public function update(Request $request, WorkProcess $wprocess)
    {
        $request->validate([
            'step' => ['required', Rule::unique('work_processes')->ignore($wprocess->id)],
            'sort_desc' => ['required'],
        ]);

        $wprocess->step = $request->step;
        $wprocess->sort_desc = $request->sort_desc;
        $wprocess->creator = Auth::guard('admin')->user()->name;
        $wprocess->slug = Str::slug($wprocess->step);
        $wprocess->status = $request->status;
        $wprocess->update();

        return redirect()->route('admin.wprocess.index')->with('success', 'Work process Update Successfuly');
    }

    public function destroy(WorkProcess $wprocess)
    {
        $wprocess->delete();
        return redirect()->route('admin.wprocess.index')->with('success', 'Work process Delete Successfuly');
    }
}
