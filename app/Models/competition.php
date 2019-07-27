<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\MasterModel;

class competition extends Model
{
    protected $table= 'competition';
    protected $gruarderd= ['id'];

    protected $fillable = [
        'name',
    ];
}
