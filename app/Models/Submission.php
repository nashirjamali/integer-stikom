<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\MasterModel;


class Submission extends Model
{
    protected $table= 'submission';
    protected $gruarderd= ['id'];
    protected $fillable = [
        'name',
        'date_start',
        'date_end',
        'competition_id',
    ];

    // protected $primaryKey = 'id';
    public function competition()
    {
        return $this->belongsTo(Competition::class);
    }
}
