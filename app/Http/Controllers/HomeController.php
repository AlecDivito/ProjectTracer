<?php

namespace App\Http\Controllers;

use App\Contact;
use App\Project;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contacts = Contact::where('userId', Auth::id())->get();
        $projects = Project::where('userId', Auth::id())->get();
        return view('home',['projects'=>$projects, 'contacts'=>$contacts]);
    }

}
