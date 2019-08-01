<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teams;
use App\Models\Participants;

class TeamController extends Controller
{
    public function index(){
        $participants = Participants::all();
        return view('team.dashboard-peserta',['participants' => $participants]);
    }

    public function payments(){
        return view('team.payments');
    }

    public function submission(){
        return view('team.submission');
    }

    public function video(){
        return view('team.video');
    }

}
