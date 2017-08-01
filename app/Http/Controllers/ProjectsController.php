<?php

namespace App\Http\Controllers;

use App;
use App\Contact;
use App\Project;
use App\ProjectItem;
use App\Service;
use App\Social;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    public function index(Request $request)
    {
        App::setLocale($request->locale);
        $interiors = Service::where('type', 'interior')->where('publish', 'yes')->orderBy('id', 'asc')->get();
        $others = Service::where('type', 'other')->where('publish', 'yes')->orderBy('id', 'asc')->get();
        $servicefooters = Service::limit(3)->orderBy('id', 'asc')->get();
        $featureds = Project::where('status', 'yes')->orderBy('id', 'asc')->get();
        $projects = Project::where('status', 'no')->orderBy('id', 'asc')->paginate(9);
        $items = ProjectItem::orderBy('id', 'asc');
        $socials = Social::where('active', 'yes')->get();
        if (App::isLocale('en')) {
            $contact = Contact::find(1);
        } elseif (App::isLocale('id')) {
            $contact = Contact::find(2);
        } 
        return view('projects', compact('interiors', 'others', 'servicefooters', 'featureds', 'projects', 'items', 'socials', 'contact'));
    }

    public function getItem(Request $request)
    {
        $id = $request->id;
        $project = Project::find($id);
        $data = ProjectItem::where('project_id', $id)->get();
        return view('projects-item', compact('project', 'data'));
    }
}
