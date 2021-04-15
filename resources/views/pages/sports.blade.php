@extends('layouts.main')
@section('title','SCH OF PRE-OPERATIVE|VOTING')
@section('body')


    <div class="row">
      <!-- heading -->
      <div class="col-md-3 col-xs-6 col-lg-3 col-sm-3 col-"></div>
      <div class="col-md-6 col-xs-12 col-lg-6 col-sm-6 col- frame">
        <p class="heading">
          <!-- specify whether its presidential or whatever -->
          
          <h1>Sports Commssioner</h1>
        </p>
        <hr>
      </div>
      <div class="col-md-4 col-xs-6 col-lg-4 col-sm-4 col-"></div>
    </div>

    <!-- end of headings --->



      <!-- candidate details -->

      <!-- candidate one -->
     <div class="row">
      <!-- heading -->
      <div class="col-md-3 col-xs-6 col-lg-3 col-sm-3 col-">
      </div>
      <div class="col-md-6 col-xs-12 col-lg-6 col-sm-6 col-">
      	<?php $count = 0; ?>
      	@foreach($portfolios as $portfolio)
          @foreach($portfolio->candidates as $candidate)
             
      	<?php  $count++;?>
        <div class="row">

          <!-- picture -->
          <div class="col-md-1">
            <div class="">
              <p>{{$count}}</p>
            </div>
          </div>
          <div class="col-md-4">
            
            <img src="{{url('/').'/IMAGES/' .$candidate->image.''}}" width="250px" height="300px" class="img-thumbnail candidate-pic">
          </div>

          <!-- -->

           <!-- details and action -->
          <div class="col-md-7">
              <div>
                <p class="candiName">{{$candidate->name}}</p>

                <p class="candiPosition">{{$portfolio->name}}</p>
              </div>

              <div>
                <form method="post" action="castSport/{{$candidate->id}}/{{$portfolio->id}}/{{session()->get('vid')}}">
                	{{csrf_field()}}
                  <input type="submit" name="Vote" class="btn btn-success" value="YES"/>
                  <a href="castNoSport/{{$candidate->id}}/{{$portfolio->id}}/{{session()->get('vid')}}"><span class="btn btn-danger" value="NO">NO</span></a>
                	
                </form>
              </div>
          </div>

          <!-- -->

        </div>

        <hr>
                 
            @endforeach
        @endforeach
      </div>

     
      <div class="col-md-4 col-xs-6 col-lg-4 col-sm-4 col-"></div>

    </div>




@endsection
