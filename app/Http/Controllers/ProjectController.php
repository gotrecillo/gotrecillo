<?php

namespace Gotrecillo\Http\Controllers;

use Gotrecillo\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{

    public function index()
    {
        $projects = Project::all();
        return view('portfolio.index', ['projects' => $projects]);
    }

    public function show(Project $portfolio)
    {
        return view('portfolio.show', ['project' => $portfolio]);
    }
}
