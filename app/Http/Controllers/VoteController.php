<?php

namespace App\Http\Controllers;

use App\Models\Vote;
use Illuminate\Http\Request;
use App\Models\Voter;
use Illuminate\Support\Facades\DB;

class VoteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $voters = Voter::where('voted',1)->get();
        $presidents = Vote::where('portfolios_id',1)->get();
        $secretaries = Vote::where('portfolios_id',2)->get();
        $treasurers = Vote::where('portfolios_id',3)->get();
        $pros = Vote::where('portfolios_id',4)->get();
        $libraries = Vote::where('portfolios_id',5)->get();
        $sports = Vote::where('portfolios_id',6)->get();
        $entertainments = Vote::where('portfolios_id',7)->get();

        // CLASS PON_L400
        $PON_L400_count = Voter::where('voted', 1)->where('index', 'LIKE', 'PON/18/%')->get()->count();
        $PON_L300_count = Voter::where('voted', 1)->where('index', 'LIKE', 'PON/19/%')->get()->count();
        $CCN_L400_count = Voter::where('voted', 1)->where('index', 'LIKE', 'CCN/18/%')->get()->count();
        $CCN_L300_count = Voter::where('voted', 1)->where('index', 'LIKE', 'CCN/19/%')->get()->count();
        // $PON_L400_count = $PON_L400->count();


        $total_prez = $presidents->count();
        $total_secre = $secretaries->count();
        $total_treas = $treasurers->count();
        $total_pro = $pros->count();
        $total_lib = $libraries->count();
        $total_sport = $sports->count();
        $total_enter = $entertainments->count();
        $total = $voters->count();
        return view('pages.dashboard', ['total' => $total, 'total_prez' => $total_prez, 'total_secre' => $total_secre, 'total_treas' => $total_treas, 'total_pro' => $total_pro, 'total_lib' => $total_lib, 'total_sport' => $total_sport, 'total_enter' => $total_enter, 'PON_L400' => $PON_L400_count, 'PON_L300' => $PON_L300_count, 'CCN_L400' => $CCN_L400_count, 'CCN_L300' => $CCN_L300_count]);
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
     * @param  \App\Models\Vote  $vote
     * @return \Illuminate\Http\Response
     */
    public function show(Vote $vote)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Vote  $vote
     * @return \Illuminate\Http\Response
     */
    public function edit(Vote $vote)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Vote  $vote
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Vote $vote)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Vote  $vote
     * @return \Illuminate\Http\Response
     */
    public function destroy(Vote $vote)
    {
        //
    }

    public function noPro(Request $request, $cid, $pid, $vid){
        return redirect()->route('library')->with(['vid' => $vid]);
    }

    public function noSport(Request $request, $cid, $pid, $vid){
        return redirect()->route('entertainment')->with(['vid' => $vid]);
    }

     public function noEnter(Request $request, $cid, $pid, $vid){
        $voter = Voter::where('id',$vid)->first();
        $voter->voted = 1;
        $voter->save();
         return redirect()->route('thanks')->with('successs', 'Thank you for voting, have a nice day');
    }

    public function results(){
        $results_prez_augustine = Vote::where('candidates_id',1)->where('portfolios_id',1)->get()->count();
        $results_prez_joe = Vote::where('candidates_id',2)->where('portfolios_id',1)->get()->count();
        $results_secre_eugene = Vote::where('candidates_id',3)->where('portfolios_id',2)->get()->count();
        $results_secre_grace = Vote::where('candidates_id',4)->where('portfolios_id',2)->get()->count();
        $results_treas_rita = Vote::where('candidates_id',5)->where('portfolios_id',3)->get()->count();
        $results_treas_beatrice = Vote::where('candidates_id',6)->where('portfolios_id',3)->get()->count();
        $results_pro_mike = Vote::where('candidates_id',7)->where('portfolios_id',4)->get()->count();
        $results_lib_diana = Vote::where('candidates_id',8)->where('portfolios_id',5)->get()->count();
        $results_lib_james = Vote::where('candidates_id',9)->where('portfolios_id',5)->get()->count();
        $results_sports_sam = Vote::where('candidates_id',10)->where('portfolios_id',6)->get()->count();
        $results_enter_daniel = Vote::where('candidates_id',11)->where('portfolios_id',7)->get()->count();
        return view('pages.results', ['total_augustine' => $results_prez_augustine, 'total_joe' => $results_prez_joe, 'total_eugene' => $results_secre_eugene, 'total_grace'=>$results_secre_grace, 'total_rita'=>$results_treas_rita, 'total_beatrice'=>$results_treas_beatrice, 'total_mike'=>$results_pro_mike, 'total_diana'=>$results_lib_diana, 'total_james'=>$results_lib_james, 'total_sam'=>$results_sports_sam, 'total_daniel'=>$results_enter_daniel]);
    }


}
