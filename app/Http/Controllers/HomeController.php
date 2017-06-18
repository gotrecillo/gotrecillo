<?php

namespace Gotrecillo\Http\Controllers;

use Gotrecillo\Models\Project;

class HomeController extends Controller
{

    public function index()
    {
        $projects = Project::highlighteds()->get();
        return view('welcome', compact('projects'));
    }
}
