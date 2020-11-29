<?php

namespace App\Http\Controllers;
use App\Project;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::all();

        foreach ($projects as $project) {
            $project['product_owner_id'] = $project->product_owner->nama;
        }

        return array('results' => $projects);
    }
}
