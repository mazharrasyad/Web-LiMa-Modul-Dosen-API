<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    public $table = 'project';

    protected $guarded = [];

    public function product_owner()
    {
        return $this->belongsTo(User::class, 'product_owner_id');
    }

    public function sprints()
    {
        return $this->hasMany(Sprint::class, 'project_id', 'id');
    }

    public function teams()
    {
        return $this->hasMany(Team::class, 'project_id', 'id');
    }
}
