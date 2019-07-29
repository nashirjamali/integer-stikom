<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Competition extends Model
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
