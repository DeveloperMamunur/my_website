<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Project;
use App\Models\ProjectCategory;
use App\Models\Service;
use App\Models\ServiceDetail;
use App\Models\Skill;
use App\Models\Testimonial;
use App\Models\WorkProcess;

class FrontendController extends Controller
{
    public function frontSite()
    {
        $services = Service::where('status', 1)->orderBy('id', 'ASC')->get();
        $ser_details = ServiceDetail::where('status', 1)->get();
        $skills = Skill::where('status', 1)->orderBy('order', 'ASC')->get();
        $about = About::where('status', 1)->get();
        $projects = Project::where('status', 1)->with('project_cats:id,slug')->latest()->get();
        $project_cats = ProjectCategory::where('status', 1)->orderBy('id', 'ASC')->get();
        $reviews = Testimonial::where('status', 1)->with('users:id,name,image,city,country')->latest()->paginate(5);
        // dd($review);
        $wprocesses = WorkProcess::where('status', 1)->orderBy('id', 'ASC')->get();
        return view('frontend_home', compact('ser_details', 'services', 'about', 'skills', 'projects', 'project_cats', 'reviews', 'wprocesses'));
    }
}
