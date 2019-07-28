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

    public function competition()
    {
        return $this->hasMany(Competition::class);
    }

    public function submission()
    {
        return $this->hasMany(Submission::class);
    }
}
