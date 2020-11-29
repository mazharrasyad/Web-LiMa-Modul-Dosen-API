<?php

namespace App\Http\Controllers;
use App\MemberTeamNilai;

class MemberTeamNilaiController extends Controller
{
    public function index()
    {
        return array('results' => MemberTeamNilai::all());
    }
}
