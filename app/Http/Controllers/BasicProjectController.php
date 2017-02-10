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
        return view('projectTracker.project')->with('project', $project);
    }

    public function saveProject(Request $request, Project $project)
    {
        $project->projectTitle  = isset($request['projTitle'])  ? $request['projTitle'] : null;
        $project->projectDescription = isset($request['description']) ? $request['description'] : null;
        $project->priority      = isset($request['priority'])   ? $request['priority'] : null;
        $project->referenceNum  = isset($request['referenceNum']) ? $request['referenceNum'] : null;
        $project->moneyBudget   = isset($request['budget'])     ? $request['budget'] : null;
        $project->moneyToDate   = isset($request['budgetLeft']) ? $request['budgetLeft'] : null;
        $project->hoursBudget   = isset($request['budgetHours']) ? $request['budgetHours'] : null;
        $project->hoursToDate   = isset($request['hoursLeft'])  ? $request['hoursLeft'] : null;
        $project->dateDue       = isset($request['dueDate'])    ? $request['dueDate'] : null;
        $project->Status        = isset($request['status'])     ? $request['status'] : null;
        $project->save();
        return redirect("/project/{$project->projectId}");
    }

}
