<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Illuminate\Http\Request;
use App\Models\Vote;
use App\Models\Candidate;
use App\Models\Voter;

class PortfolioController extends Controller
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function show(Portfolio $portfolio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function edit(Portfolio $portfolio)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Portfolio $portfolio)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function destroy(Portfolio $portfolio)
    {
        //
    
    }


  

    public function president(Request $request, $cid, $pid, $vid){

        $exist = Vote::where('portfolios_id',$pid)->where('voters_id',$vid)->first();
        if($exist != null){
            return redirect()->route('secretary')->with(['vid' => $vid]);
        }else{
            $vote = new Vote;
        $vote->candidates_id = $cid;
        $vote->portfolios_id = $pid;
        $vote->voters_id = $vid;
        $vote->save();

        // $portfolios = Portfolio::where('id', 2)->with('candidates')->get();
        // return view('pages.secretary', ['voterId' => $vid, 'portfolios' => $portfolios]);

        return redirect()->route('secretary')->with(['vid' => $vid]);

        }

        
    }

    public function secretary_index(){
        $portfolios = Portfolio::where('id', 2)->with('candidates')->get();
        return view('pages.secretary', ['portfolios' => $portfolios]);
    }
    

    public function secretary(Request $request, $cid, $pid, $vid){

         $exist = Vote::where('portfolios_id',$pid)->where('voters_id',$vid)->first();
         if($exist != null){
            return redirect()->route('treasurer')->with(['vid' => $vid]);
        }else {
             $vote = new Vote;
        $vote->candidates_id = $cid;
        $vote->portfolios_id = $pid;
        $vote->voters_id = $vid;
        $vote->save();

        // $portfolios = Portfolio::where('id', 3)->with('candidates')->get();
        // return view('pages.treasurer', ['voterId' => $vid, 'portfolios' => $portfolios]);

        return redirect()->route('treasurer')->with(['vid' => $vid]);
        }

       

    }

    public function treasurer_index(){
        $portfolios = Portfolio::where('id', 3)->with('candidates')->get();
        return view('pages.treasurer', ['portfolios' => $portfolios]);
    }

    public function treasurer(Request $request, $cid, $pid, $vid){

         $exist = Vote::where('portfolios_id',$pid)->where('voters_id',$vid)->first();
         if($exist != null){
            return redirect()->route('pro')->with(['vid' => $vid]);
        }else {
            $vote = new Vote;
        $vote->candidates_id = $cid;
        $vote->portfolios_id = $pid;
        $vote->voters_id = $vid;
        $vote->save();

        return redirect()->route('pro')->with(['vid' => $vid]);
        }
        

        // $portfolios = Portfolio::where('id', 4)->with('candidates')->get();
        // return view('pages.pro', ['voterId' => $vid, 'portfolios' => $portfolios]);

        

    }

    public function pro_index(){
        $portfolios = Portfolio::where('id', 4)->with('candidates')->get();
        return view('pages.pro', ['portfolios' => $portfolios]);
    }


    public function pro(Request $request, $cid, $pid, $vid){

         $exist = Vote::where('portfolios_id',$pid)->where('voters_id',$vid)->first();
         if($exist != null){
            return redirect()->route('library')->with(['vid' => $vid]);
        }else {

        $vote = new Vote;
        $vote->candidates_id = $cid;
        $vote->portfolios_id = $pid;
        $vote->voters_id = $vid;
        $vote->save();

        return redirect()->route('library')->with(['vid' => $vid]);
        }


        // $portfolios = Portfolio::where('id', 5)->with('candidates')->get();
        // return view('pages.library', ['voterId' => $vid, 'portfolios' => $portfolios]);

        
    }

    public function library_index(){
        $portfolios = Portfolio::where('id', 5)->with('candidates')->get();
        return view('pages.library', ['portfolios' => $portfolios]);
    }


    public function library(Request $request, $cid, $pid, $vid){
        
        $exist = Vote::where('portfolios_id',$pid)->where('voters_id',$vid)->first();
        if($exist != null){
            return redirect()->route('sports')->with(['vid' => $vid]);
        }else {
             $vote = new Vote;
        $vote->candidates_id = $cid;
        $vote->portfolios_id = $pid;
        $vote->voters_id = $vid;
        $vote->save();

        // $portfolios = Portfolio::where('id', 6)->with('candidates')->get();
        // return view('pages.sports', ['voterId' => $vid, 'portfolios' => $portfolios]);

        return redirect()->route('sports')->with(['vid' => $vid]);

        }
       
    }

    public function sports_index(){
        $portfolios = Portfolio::where('id', 6)->with('candidates')->get();
        return view('pages.sports', ['portfolios' => $portfolios]);
    }

    public function sports(Request $request, $cid, $pid, $vid){

        $exist = Vote::where('portfolios_id',$pid)->where('voters_id',$vid)->first();
        if($exist != null){
            return redirect()->route('entertainment')->with(['vid' => $vid]);
        }else {
            $vote = new Vote;
        $vote->candidates_id = $cid;
        $vote->portfolios_id = $pid;
        $vote->voters_id = $vid;
        $vote->save();

        // $portfolios = Portfolio::where('id', 7)->with('candidates')->get();
        // return view('pages.entertainment', ['voterId' => $vid, 'portfolios' => $portfolios]);

        return redirect()->route('entertainment')->with(['vid' => $vid]);
        }
        

    }

    public function entertainment_index(){
        $portfolios = Portfolio::where('id', 7)->with('candidates')->get();
        return view('pages.entertainment', ['portfolios' => $portfolios]);
    }


    public function entertainment(Request $request, $cid, $pid, $vid){

        $exist = Vote::where('portfolios_id',$pid)->where('voters_id',$vid)->first();
        if($exist != null){

            $voter = Voter::where('id',$vid)->first();
            $voter->voted = 1;
            $voter->save();
            return redirect()->route('thanks')->with('successs', 'Thank you for voting, have a nice day');
            }else {
            $vote = new Vote;
            $vote->candidates_id = $cid;
            $vote->portfolios_id = $pid;
            $vote->voters_id = $vid;
            $vote->save();

            
            $voter = Voter::where('id',$vid)->first();
            $voter->voted = 1;
            $voter->save();

        // $portfolios = Portfolio::where('id', 7)->with('candidates')->get();
        // return view('pages.thankU')->with('successs', 'Thank you for voting, have a nice day');

        return redirect()->route('thanks')->with('successs', 'Thank you for voting, have a nice day');

        }
        
    }

    public function thankU(){
        return view('pages.thankU')->with('successs', 'Thank you for voting, have a nice day');
    }


}
