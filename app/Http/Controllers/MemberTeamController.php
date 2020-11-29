<?php

namespace App\Http\Controllers;
use App\MemberTeam;

class MemberTeamController extends Controller
{
    public function index()
    {
        $member_teams = MemberTeam::all();

        foreach ($member_teams as $member_team) {
            $member_team['team_id'] = $member_team->team->nama;
            $member_team['mahasiswa_id'] = $member_team->mahasiswa->nama;
        }

        return array('results' => $member_teams);
    }
}
