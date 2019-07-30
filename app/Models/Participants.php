<?php

namespace App\Models;

use App\MasterModel;

class Participants extends MasterModel
{
    protected $table= 'participants';
    protected $gruarderd= ['id'];
    protected $fillable = [
        'name',
        'birth_date',
        'email',
        'phone',
        'tshirt',
        'vegetarian',
        'identity_card',
        'status',
        'team_id',
    ];


    public function team()
    {
        return $this->belongsTo(Team::class);
    }
}
