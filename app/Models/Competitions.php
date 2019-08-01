<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Competitions extends Model
{
    protected $table= 'competitions';
    protected $gruarderd= ['id'];
    
    protected $fillable = [
        'name',
    ];

    public function team()
    {
        return $this->hasMany(Teams::class);
    }

    public function submission()
    {
        return $this->hasMany(Submission::class);
    }
}
