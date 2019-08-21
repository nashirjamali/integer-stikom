<?php

namespace App\Http\Controllers;

use App\Models\Competitions;
use App\Models\Submission;
use App\Models\Submission_team;
use Illuminate\Http\Request;

class Admin_SubmissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $submissions = Submission::all();
        $competitions = Competitions::all();
        return view('admin.new.admin-submission', ['submissions' => $submissions, 'competitions' => $competitions]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $competition = Competitions::where('id', $id)->first();
        $submissions = Submission::where('competition_id', $id)->get();
        $submissionsTeams = Submission_team::all();

        return view('admin.new.admin-submission-detail', ['submissions' => $submissions, 'competition' => $competition, 'submissionsTeams' => $submissionsTeams]);
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
        $submission = Submission_team::all()->where('id', $id)->where('submission_id', $request->get('submission_id'))->find(1);
        
        if ($submission->status == 'On Progress') {
            $submission->update([
                'status' => 'Lolos'
            ]);
        } elseif ($submission->status == 'Lolos') {
            $submission->update([
                'status' => 'Tidak Lolos'
            ]);
        } elseif ($submission->status == 'Tidak Lolos') {
            $submission->update([
                'status' => 'Lolos'
            ]);
        }

        return redirect()->back();
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
