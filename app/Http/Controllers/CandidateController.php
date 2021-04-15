<?php

namespace App\Http\Controllers;

use App\Models\Candidate;
use Illuminate\Http\Request;
use App\Models\Voter;
use App\Models\Portfolio;

class CandidateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $this->validate($request, [
            'index_code' => 'required',
            'index_year' => 'required',
            'index_number' => 'required'
        ]);

        $input_code = $request->index_code;
        $input_year = $request->index_year;
        $input_number = $request->index_number;

        $input_index = $input_code.'/'. $input_year.'/'.$input_number;
        
        $portfolios = Portfolio::where('id', 1)->with('candidates')->get();
        $voters = Voter::where('index', '=', $input_index)->first();
        $already = Voter::where('index', '=', $input_index)->where('voted', '=', 0)->first();
        if($voters !=null){
            if($already != null){
                return view('pages.president', ['voters' => $voters, 'portfolios' => $portfolios]);    
            }else{
                return back()->with('failed', 'You have already voted. Thanks for voting');
            }
            
        }else{
            return back()->with('failed', 'Verification Failed Please enter your correct index number');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Candidate  $candidate
     * @return \Illuminate\Http\Response
     */
    public function show(Candidate $candidate)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Candidate  $candidate
     * @return \Illuminate\Http\Response
     */
    public function edit(Candidate $candidate)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Candidate  $candidate
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Candidate $candidate)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Candidate  $candidate
     * @return \Illuminate\Http\Response
     */
    public function destroy(Candidate $candidate)
    {
        //
    }
}
