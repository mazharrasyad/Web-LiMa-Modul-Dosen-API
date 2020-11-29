<?php

namespace App\Http\Controllers;
use App\MemberTeamNilai;

class MemberTeamNilaiController extends Controller
{
    public function index()
    {
        $member_team_nilais = MemberTeamNilai::all();

        foreach ($member_team_nilais as $member_team_nilai) {
            $member_team_nilai['dosen_id'] = $member_team_nilai->dosen->nama;
            $member_team_nilai['member_team_id'] = $member_team_nilai->member_team->mahasiswa->nama;
        }

        return array('results' => $member_team_nilais);
    }
}
