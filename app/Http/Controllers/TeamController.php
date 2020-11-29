<?php

namespace App\Http\Controllers;
use App\Team;

class TeamController extends Controller
{
    public function index()
    {
        return array('results' => Team::all());
    }
}
