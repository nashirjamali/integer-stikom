<?php

namespace App\Http\Controllers;

use App\Models\Participants;
use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class Admin_ListTimController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teams = Team::all();
        
        return view('admin.new.admin-list-tim', ['teams' => $teams]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
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
        $team = Team::find($id);
        $participant1 = Participants::where('team_id', $id)->where('status', 'Ketua')->get();
        $participant2 = Participants::where('team_id', $id)->where('status', 'Anggota')->get();

        return view('admin.new.admin-detail-tim', ['team' => $team, 'participant1' => $participant1, 'participant2' => $participant2]);
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
        $file_name = Participants::all()->where('team_id', $id);
        foreach ($file_name as $key) {
            File::delete('uploads/identity_card/'. $key->identity_card);
        }

        Participants::where('team_id', $id)->delete();
        Team::where('id', $id)->delete();

        return redirect('/admin/list-tim');
    }
}
