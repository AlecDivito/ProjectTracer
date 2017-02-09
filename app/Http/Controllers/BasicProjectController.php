<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BasicProjectController extends Controller
{
    public function project(Request $request)
    {
        return view('projectTracker.project');
    }

    public function saveProject(Request $request)
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
