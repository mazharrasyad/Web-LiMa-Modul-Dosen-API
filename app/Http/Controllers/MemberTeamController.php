<?php

namespace App\Http\Controllers;
use App\MemberTeam;

class MemberTeamController extends Controller
{
    public function index()
    {
        return array('results' => MemberTeam::all());
    }
}
