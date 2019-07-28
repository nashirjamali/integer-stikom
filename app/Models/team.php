<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\MasterModel;

class Team extends Model
{
    protected $table= 'team';
    protected $gruarderd= ['id'];
    protected $fillable = [
        'name',
        'username',
        'password',
        'institution',
        'status',
        'competition_id',
    ];
    // protected $primaryKey = 'id';
    // public $incrementing = false;
    public function competition()
    {
        return $this->belongsTo(competition::class);
    }
}
