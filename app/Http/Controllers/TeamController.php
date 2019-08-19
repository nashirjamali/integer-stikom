<?php

namespace App\Http\Controllers;

use Auth;
use File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Team;
use App\Models\Participants;
use App\User;
use App\Models\Submission_team;
use App\Models\Submission;
use Illuminate\Support\Facades\Session;

class TeamController extends Controller
{
    public function index(){
        $teams = Auth::user()->username;
        // dd($teams);
        $team_ahh = Team::join('competitions', 'teams.competition_id', '=', 'competitions.id')->where('username', $teams)->get();
        $participants = Participants::where('team_id' , $teams )->orderBy('id', 'asc')->get();
        $pc = $participants->count();
        // dd($pc);
       
        return view('team.new.team',['participants' => $participants],['teamku' => $team_ahh])->with ('pc',$pc);
    }

    public function store(Request $request){

        request()->validate([
            'identity_card' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $teams = Auth::user()->team_id;

        $identity_card = $request->file('identity_card');
        $file_name = Auth::user()->team_id . '_' . $request->name . '.' . $identity_card->getClientOriginalExtension();
        $identity_card->move('uploads/identity_card/', $file_name);

        $participant = new Participants;
        $participant->team_id = Auth::user()->team_id;
        $participant->status = 'Anggota';
        $participant->identity_card = $file_name;
        $participant->name = $request->name;
        $participant->birth_date = $request->birth_date;
        $participant->email = $request->email;
        $participant->phone = $request->phone;
        $participant->save();

    	return redirect('team');
    }

    public function update($id, Request $request){
        
        $file_name = Participants::select('identity_card')->where('id',$id)->first()->identity_card;
        File::delete('uploads/identity_card/' . $file_name);

        $file = $request->identity_card;
        $filename = Auth::user()->team_id . '_' . $request->name . '_update' .'.' . $file->getClientOriginalExtension();
        $destinationPath = 'uploads/identity_card/';

        File::delete('uploads/identity_card/' . $filename);
		$file->move($destinationPath,$filename);

        $participants = Participants::find($id);
        // dd($participants);
        $participants->identity_card = $filename;
        $participants->name = $request->name;
        $participants->birth_date = $request->birth_date;
        $participants->email = $request->email;
        $participants->phone = $request->phone;
        $participants->save();
        
        return redirect('team')->with('success', 'Data telah tersimpan');
    }

    public function destroy($id){
        $tm = Participants::findOrFail($id); 
        $file_name = Participants::select('identity_card')->where('id',$id)->first()->identity_card;
        
        File::delete('uploads/identity_card/' . $file_name);
        $tm->delete();
        return redirect('team')->with(['message'=> 'Successfully deleted!!']);
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

        
        $submission_id_before = Submission::select('id')->where('name', 'Pengumpulan Proposal')
                                                        ->where('competition_id', $competition_id)
                                                        ->first()->id;


        $submission_teams = Submission_team::where('team_id', Auth::user()->team_id)
                                            ->where('submission_id', $submission_id);

        $submission_teams_before = Submission_team::where('team_id', Auth::user()->team_id)
                                                    ->where('submission_id',  $submission_id_before);

        $submission_team = $submission_teams->get();

        $submission_team_before =  $submission_teams_before->first();

        $done = $submission_teams->first();

                    
        return view('team.new.video',[
            'submission_team' => $submission_team,
            'submission_team_before' => $submission_team_before,
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
        return view('team.new.setting');
    }


    public function settingstore(Request $request){

        $pass = User::select('password')->where('team_id', Auth::user()->team_id)->first()->password;

        if (Hash::check($request->password_lama, $pass)) {
            
            User::where('team_id', Auth::user()->team_id)->update(array('password' => Hash::make($request->password)));
            Team::where('id', Auth::user()->team_id)->update(array('password' => Hash::make($request->password)));
            Session::flash('sukses','Selamat password anda telah diubah');
            
        }else{
            Session::flash('gagal','Maaf password yang anda masukan salah');
        }

        return redirect('team/setting')->with('success', 'Data telah terkirim');
    }




       


}
