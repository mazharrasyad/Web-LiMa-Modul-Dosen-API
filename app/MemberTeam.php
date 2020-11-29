<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MemberTeam extends Model
{
    public $table = 'member_team';

    protected $guarded = [];

    public function team()
    {
        return $this->belongsTo(Team::class, 'team_id');
    }

    public function mahasiswa()
    {
        return $this->belongsTo(User::class, 'mahasiswa_id');
    }

    public function member_team_nilais()
    {
        return $this->hasMany(MemberTeamNilai::class, 'member_team_id', 'id');
    }
}
