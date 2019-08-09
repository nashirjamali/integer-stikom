<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Team;
use App\Models\Participants;
use App\User;
use App\Models\Submission_team;
use App\Models\Submission;

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
        $team_id = Auth::user()->team_id;
        $competition_id = Team::select('competition_id')->where('id', $team_id)->first()->competition_id;

        $submission_id = Submission::select('id')->where('name', 'Pengumpulan Link Video')
                                                 ->where('competition_id', $competition_id)
                                                 ->first()->id;

        $submission_team = Submission_team::where('team_id', Auth::user()->team_id)
                                            ->where('submission_id', $submission_id)
                                            ->get();

        $done = Submission_team::select('id')->where('team_id', Auth::user()->team_id)
                                            ->where('submission_id', $submission_id)
                                            ->first();
                    
        
        return view('team.video',[
            'submission_team' => $submission_team,
            'done' => $done,
        ]);
    }

    public function videostore(Request $request){

        $team_id = Auth::user()->team_id;
        $competition_id = Team::select('competition_id')->where('id', $team_id)->first()->competition_id;

        $document = $request->document;
        $submission_id = Submission::select('id')->where('name', 'Pengumpulan Link Video')
                                                 ->where('competition_id', $competition_id)
                                                 ->first()->id;

        Submission_team::create([
            'submission_id' => $submission_id,
            'team_id'       => $team_id,
            'document'      => $document,
        ]);

        return redirect('team/video')->with('success', 'Data telah terkirim');
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
