<?php

namespace App\Models;

use App\MasterModel;

class Submission_team extends MasterModel
{
    protected $table= 'submission_teams';
    protected $gruarderd= ['id'];
    protected $fillable = [
        'submission_id',
        'team_id',
        'document',
        'status',
    ];
    public function team()
    {
        return $this->belongsTo(Team::class);
    }
    public function submission()
    {
        return $this->belongsTo(Submission::class);
    }
}
