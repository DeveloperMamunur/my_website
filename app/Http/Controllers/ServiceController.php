<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::where('status', 1)->latest()->paginate(15);
        return view('admin.services.index', compact('services'));
    }
    public function create()
    {
        return view('admin.services.create');
    }

    public function store(Request $request)
    {
        // dd($request);
        $request->validate([
            'title' => ['required', 'unique:services,title'],
            'sort_desc' => ['required'],
            'icon' => ['required'],
            // 'color' => ['required'],
        ]);

        $service = new Service();
        $service->title = $request->title;
        $service->sort_desc = $request->sort_desc;
        $service->icon = $request->icon;
        $service->color = $request->color;
        $service->creator = Auth::guard('admin')->user()->name;
        $service->slug = Str::slug($service->title);
        $service->status = $request->status;
        $service->save();

        return redirect()->route('admin.services.index')->with('success', 'Services Create Successfuly');
    }

    public function edit(Service $service)
    {
        return view('admin.services.edit', compact('service'));
    }

    public function update(Request $request, Service $service)
    {
        $request->validate([
            'title' => ['required', Rule::unique('services')->ignore($service->id)],
            'sort_desc' => ['required'],
            'icon' => ['required'],
            // 'color' => ['required'],
        ]);

        $service->title = $request->title;
        $service->sort_desc = $request->sort_desc;
        $service->icon = $request->icon;
        $service->color = $request->color;
        $service->status = $request->status;
        $service->creator = Auth::guard('admin')->user()->name;
        $service->slug = Str::slug($service->title);
        $service->update();

        return redirect()->route('admin.services.index')->with('success', 'Services Update Successfuly');
    }

    public function destroy(Service $service)
    {
        $service->delete();
        return redirect()->route('admin.services.index')->with('success', 'Services Delete Successfuly');
    }
}
