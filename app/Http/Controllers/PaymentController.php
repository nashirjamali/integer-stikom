<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;
use App\Models\Team;
use App\User;
use Illuminate\Support\Facades\Session;


use App\Models\Payment;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $payment = Payment::all();
        // return view('team.payments',['payment' => $payment]);

        $team_id = Auth::user()->team_id;
    
        $payments = Payment::where('team_id', Auth::user()->team_id);

        $payment = $payments->get();

        $done = $payments->first();
                    
        
        return view('team.payments',[
            'payment' => $payment,
            'done' => $done,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('team.payments');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new Payment();
        $evidence = $request->file('evidence');
        $file_extension = $evidence->getClientOriginalExtension(); //** get filename extension
        $fileName = Auth::user()->team_id .".". $file_extension;
        $evidence->move('uploads/payment',$fileName);
        $data->evidence = $fileName;
        $data->description = $request->input('description');
        $data->team_id = Auth::user()->team_id;
        $data->save();
        return redirect('team/payments')->with('success', 'Data telah terkirim');

        // $team_id = Auth::user()->team_id;
        // $competition_id = Team::select('competition_id')->where('id', $team_id)->first()->competition_id;

        // $document = $request->document;
        // $submission_id = Submission::select('id')->where('name', 'Pengumpulan Link Video')
        //                                          ->where('competition_id', $competition_id)
        //                                          ->first()->id;

        // Submission_team::create([
        //     'submission_id' => $submission_id,
        //     'team_id'       => $team_id,
        //     'document'      => $document,
        // ]);

        // return redirect('team/video')->with('success', 'Data telah terkirim');
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
