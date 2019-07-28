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
}
