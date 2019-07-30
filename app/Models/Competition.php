<?php

namespace App\Models;

use App\MasterModel;

class Competition extends MasterModel
{
    protected $table= 'competition';
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
