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
        // Get all projects
        $ids = $project->getProjectIds(Auth::id());
        $values = [];
        $values['count'] = count($ids) - 1; // 5
        $values['first'] = $ids[0]; // 1
        $values['last']  = $ids[$values['count']]; // 70
        if ($ids[0] === $project->projectId) {
            $values['next'] = $ids[1];
            $values['pervious'] = $ids[0];
            $values['currentCount'] = 0;

        } elseif ($ids[$values['count']] === $project->projectId) {
            $values['next'] = $ids[$values['count']];
            $values['pervious'] = $ids[$values['count'] - 1];
            $values['currentCount'] = $values['count'];
        } else {
            for ($i=1; $i < $values['count']; $i++) {
                if ($project->projectId === $ids[$i]) {
                    $values['next'] = $ids[$i + 1];
                    $values['pervious'] = $ids[$i - 1];
                    $values['currentCount'] = $i;
                    break;
                }
            }
        }
        return view('projectTracker.project', ['project'=>$project, 'values'=>$values]);
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

    public function deleteProject(Request $request, Project $project)
    {
        $project->delete();
        return redirect('/home');
    }

}
