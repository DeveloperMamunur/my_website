<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\ServiceDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ServiceDetailController extends Controller
{
    public function index()
    {
        $services = Service::all();
        $ser_details = ServiceDetail::where('status', 1)->latest()->paginate(15);
        return view('admin.services_details.index', compact('services', 'ser_details'));
    }
    public function create()
    {
        $services = Service::all();
        return view('admin.services_details.create', compact('services'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'service_id' => ['required'],
            'description' => ['required'],
        ]);

        $ser_detail = new ServiceDetail();
        $ser_detail->service_id = $request->service_id;
        $ser_detail->description = $request->description;
        $ser_detail->creator = Auth::guard('admin')->user()->name;
        $ser_detail->status = $request->status;
        $ser_detail->save();

        return redirect()->route('admin.services.details.index')->with('success', 'Service Details Create Successfuly');
    }

    public function edit(ServiceDetail $ser_detail)
    {
        $services = Service::all();
        return view('admin.services_details.edit', compact('ser_detail', 'services'));
    }

    public function update(Request $request, ServiceDetail $ser_detail)
    {
        $request->validate([
            'service_id' => ['required'],
            'description' => ['required'],
        ]);

        $ser_detail->service_id = $request->service_id;
        $ser_detail->description = $request->description;
        $ser_detail->creator = Auth::guard('admin')->user()->name;
        $ser_detail->status = $request->status;
        $ser_detail->update();

        return redirect()->route('admin.services.details.index')->with('success', 'Service Details Update Successfuly');
    }

    public function destroy(ServiceDetail $ser_detail)
    {
        $ser_detail->delete();
        return redirect()->route('admin.services.details.index')->with('success', 'Service Details Delete Successfuly');
    }
}
