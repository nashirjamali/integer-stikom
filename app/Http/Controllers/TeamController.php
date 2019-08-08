<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Teams;
use App\Models\Participants;
use App\User;

class TeamController extends Controller
{
    public function index(){
        $teams = Auth::user()->username;
        // dd($teams);
        $participants = Participants::where('team_id' , $teams )->get();
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

    public function setting(){
        return view('team.setting');
    }


    public function settingstore(Request $request){

        $pass = User::select('password')->where('team_id', Auth::user()->team_id)->first()->password;

        if (Hash::check($request->password_lama, $pass)) {
            
            User::where('team_id', Auth::user()->team_id)->update(array('password' => Hash::make($request->password)));
            Teams::where('id', Auth::user()->team_id)->update(array('password' => Hash::make($request->password)));
            //kurang modal berhasil
        }else{

            dd("kurang notifikasi kalau password lama tidak cocok");
            //kurang notifikasi kalau password lama tidak cocok
        }

        return redirect('team/setting')->with('success', 'Data telah terkirim');
    }

}
