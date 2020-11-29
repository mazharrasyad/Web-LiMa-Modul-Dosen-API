<?php

namespace App\Http\Controllers;
use App\Team;

class TeamController extends Controller
{
    public function index()
    {
        $teams = Team::all();

        foreach ($teams as $team) {
            $team['scrum_master_id'] = $team->scrum_master->nama;
            if (!empty($team['project_id'])){
                $team['project_id'] = $team->project->nama;
            }
        }

        return array('results' => $teams);
    }
}
