<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Database\Eloquent\Model;
use Laravel\Lumen\Auth\Authorizable;

class User extends Model implements AuthenticatableContract, AuthorizableContract
{
    use Authenticatable, Authorizable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email',
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'password',
    ];

    public function projects()
    {
        return $this->hasMany(Project::class, 'product_owner_id', 'id');
    }

    public function teams()
    {
        return $this->hasMany(Team::class, 'scrum_master_id', 'id');
    }

    public function mahasiswas()
    {
        return $this->hasMany(MemberTeam::class, 'mahasiswa_id', 'id');
    }

    public function dosens()
    {
        return $this->hasMany(MemberTeamNilai::class, 'dosen_id', 'id');
    }
}
