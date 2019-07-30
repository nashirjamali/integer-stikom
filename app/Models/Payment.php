<?php

namespace App\Models;

use App\MasterModel;

class Payment extends MasterModel
{
    protected $table= 'payments';
    protected $gruarderd= ['id'];
    protected $fillable = [
        'evidence',
        'description',
        'team_id',
        
        
    ];

    public function team()
    {
        return $this->belongsTo(Team::class);
    }
}
