<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MemberTeamNilai extends Model
{
    public $table = 'member_team_nilai';

    protected $guarded = [];

    public function dosen()
    {
        return $this->belongsTo(User::class, 'dosen_id');
    }

    public function member_team()
    {
        return $this->belongsTo(MemberTeam::class, 'member_team_id');
    }
}
