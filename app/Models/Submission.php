<?php

namespace App\Models;

use App\MasterModel;


class Submission extends MasterModel
{
    protected $table= 'submissions';
    protected $gruarderd= ['id'];
    protected $fillable = [
        'name',
        'date_start',
        'date_end',
        'competition_id',
    ];
    protected $primaryKey = 'id'; // or null

    public $incrementing = false;
    // protected $primaryKey = 'id';
    public function competition()
    {
        return $this->belongsTo(Competitions::class, 'competition_id', 'id');
    }

    public function submission_team()
    {
        return $this->hasMany(Submission_team::class);
    }
}
