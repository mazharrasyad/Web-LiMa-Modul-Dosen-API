<?php

namespace App\Http\Controllers;
use App\Project;

class ProjectController extends Controller
{
    public function index()
    {
        return array('results' => Project::all());
    }
}
