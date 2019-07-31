<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\MasterModel;

class Team extends Model
{
    protected $table= 'teams';
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
        return $this->belongsTo(Competition::class);
    }

    public function participants()
    {
        return $this->hasMany(Participants::class);
    }

    public function payment()
    {
        return $this->hasMany(Payment::class);
    }

    public function submission_team()
    {
        return $this->hasMany(Submission_team::class);
    }
}
