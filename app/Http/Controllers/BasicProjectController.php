<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class BasicProjectController extends Controller
{
    public function newProject()
    {
        $project = new Project();
        $project->userId = Auth::id();
        $project->save();
        return redirect("/project/{$project->projectId}");
    }

    public function project(Request $request, Project $project)
    {
        $array[] = $project->toArray();
        return view('projectTracker.project', ['array'=>$array]);
    }

    public function saveProject(Request $request, Project $project)
    {
        return redirect('/project');
    }


    public function contact(Request $request)
    {
        return view('projectTracker.contact');
    }

    public function saveContact(Request $request)
    {
        return redirect('/contact');
    }
}
