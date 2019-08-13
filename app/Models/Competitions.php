<?php

namespace App\Models;

use App\MasterModel;

class Competitions extends MasterModel
{
    protected $table= 'competitions';
    protected $gruarderd= ['id'];
    
    protected $fillable = [
        'name',
    ];

    public function team()
    {
        return $this->hasMany(Team::class);
    }

    public function submission()
    {
        return $this->hasMany(Submission::class);
    }
}
