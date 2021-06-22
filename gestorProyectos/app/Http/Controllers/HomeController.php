<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\Category;
use App\Models\Project_User;
use App\Models\Project;
use App\Models\Provider_Project;
use App\Models\Provider;
use App\Models\Tacing;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['welcome', 'projectsbycat']]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if (Auth::user()->role == 'Admin') {
            return view('dashboard-admin');
        } else if (Auth::user()->role == 'Leader') {
            return view('dashboard-leader');
        } else {
            return "Access Denied!";
        } 
    }

    public function welcome()
    {
        $states = Project::where('state')->get();
        $cats    = Category::all();
        $projects   = Project::all();

        return view('welcome')->with('states', $states)
                              ->with('cats', $cats)
                              ->with('projects', $projects);
    }

    public function projectsbycat(Request $request)
    {
        if ($request->idcat == 0) {
            // All Categories
            $cats    = Category::all();
            $projects   = Project::all();
            return view('projectsbycat')->with('cats', $cats)
                                     ->with('projects', $projects);
        } else {
            // By Category
            $cat     = Category::where('id', '=', $request->idcat)->first();
            $projects   = Project::where('category_id', '=', $request->idcat)->get();
            return view('projectssbycat')->with('cat', $cat)
                                     ->with('projects', $projects);
        }
    }

}