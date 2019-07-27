<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\MasterModel;

class participants extends Model
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
        return $this->belongsTo(team::class);
    }
}
