<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\MasterModel;

class Payment extends Model
{
    protected $table= 'payment';
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
