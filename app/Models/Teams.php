<?php

namespace App\Models;

use App\MasterModel;

class Teams extends MasterModel
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
    public function competitions()
    {
        return $this->belongsTo(Competitions::class);
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

    public function user()
    {
        return $this->hasMany(App\User::class);
    }
}
