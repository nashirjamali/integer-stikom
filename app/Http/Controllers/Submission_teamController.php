<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use App\Models\Submission;
use Illuminate\Http\Request;
use App\Models\Submission_team;
use App\Models\Team;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Validator;

class Submission_teamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $team_id = Auth::user()->team_id;
        $competition_id = Team::select('competition_id')->where('id', $team_id)->first()->competition_id;
        $submission_id = Submission::select('id')->where('name', 'Pengumpulan Proposal')
            ->where('competition_id', $competition_id)
            ->first()->id;
        $submissions_teams = Submission_team::where('team_id', Auth::user()->team_id)
            ->where('submission_id', $submission_id);

        $submission_team = $submissions_teams->get();
        $payment = Team::where('id', $team_id)->first();
        $done = $submissions_teams->first();

        $proposal = Submission_team::where('team_id', Auth::user()->team_id)->where('submission_id', $submission_id)->first();

        return view('team.submission', [
            'submission_team' => $submission_team,
            'payment' => $payment,
            'done' => $done,
            'proposal' => $proposal
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('team.submission');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:pdf|max:5000',
        ]);
        
        return redirect('team/submission')->with('success', 'Data telah terkirim');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
