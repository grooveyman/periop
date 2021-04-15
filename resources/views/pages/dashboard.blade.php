@extends('layouts.main')
@section('title','SCH OF PRE-OPERATIVE|VOTING')
@section('body')




    <div class="row">
      <!-- heading -->
      <div class="col-md-3 col-xs-6 col-lg-3 col-sm-3 col-"></div>
      <div class="col-md-6 col-xs-12 col-lg-6 col-sm-6 col- frame">
        <p class="heading">
          <!-- specify whether its presidential or whatever -->
          
          <h1>Dashboard | Expected Vote: 347</h1>
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
      	
             
      	
        <div class="row">

          <!-- picture -->
          <div class="col-md-6">
            <div class="">
              <h2>Total Vote Cast: {{$total}}</h2>
            </div>
          </div>
           <!-- details and action -->
          <div class="col-md-6">
              <div>
                <p class="candiName"></p>
              </div>
          </div>
        </div>


<!-- vote per portfolio -->
         <div class="row" style="margin-top: 20px">

          <!-- picture -->
          <div class="col-md-6">
            <div class="">
              <h2>Presidents vote: {{$total_prez}}</h2>
            </div>
          </div>
           <!-- details and action -->
          <div class="col-md-6">
              <div>
                <p class="" style="font-size: 20px; font-weight: bold;">
                  PON_L400 class : {{$PON_L400}}
                </p>
              </div>
          </div>
        </div>

<!-- secretary votes -->

        <div class="row" style="margin-top: 20px">

          <!-- picture -->
          <div class="col-md-6">
            <div class="">
              <h2>Secretary votes: {{$total_secre}}</h2>
            </div>
          </div>
           <!-- details and action -->
          <div class="col-md-6">
              <div>
                 <p class="" style="font-size: 20px; font-weight: bold;">
                  PON_L300 class : {{$PON_L300}}
              </div>
          </div>
        </div>


<!-- treasurer votes -->


        <div class="row" style="margin-top: 20px">

          <!-- picture -->
          <div class="col-md-6">
            <div class="">
              <h2>Treasurer votes: {{$total_treas}}</h2>
            </div>
          </div>
           <!-- details and action -->
          <div class="col-md-6">
              <div>
                 <p class="" style="font-size: 20px; font-weight: bold;">
                  CCN_L400 class : {{$CCN_L400}}
              </div>
          </div>
        </div>


        <!-- pro votes -->


        <div class="row" style="margin-top: 20px">

          <!-- picture -->
          <div class="col-md-6">
            <div class="">
              <h2>P.R.O votes: {{$total_pro}}</h2>
            </div>
          </div>
           <!-- details and action -->
          <div class="col-md-6">
              <div>
                 <p class="" style="font-size: 20px; font-weight: bold;">
                  CCN_L300 class : {{$CCN_L300}}
              </div>
          </div>
        </div>


     <!-- library votes -->


        <div class="row" style="margin-top: 20px">

          <!-- picture -->
          <div class="col-md-6">
            <div class="">
              <h2>Library votes: {{$total_lib}}</h2>
            </div>
          </div>
           <!-- details and action -->
          <div class="col-md-6">
              <div>
                <p class="candiName"></p>
              </div>
          </div>
        </div>


     <!-- sports votes -->


        <div class="row" style="margin-top: 20px">

          <!-- picture -->
          <div class="col-md-6">
            <div class="">
              <h2>Sports votes: {{$total_sport}}</h2>
            </div>
          </div>
           <!-- details and action -->
          <div class="col-md-6">
              <div>
                <p class="candiName"></p>
              </div>
          </div>
        </div>


     <!-- entertainment votes -->


        <div class="row" style="margin-top: 20px">

          <!-- picture -->
          <div class="col-md-6">
            <div class="">
              <h2>Entertainment votes: {{$total_enter}}</h2>
            </div>
          </div>
           <!-- details and action -->
          <div class="col-md-6">
              <div>
                <p class="candiName"></p>
              </div>
          </div>
        </div>





        <hr>
          
      </div>

     
      <div class="col-md-4 col-xs-6 col-lg-4 col-sm-4 col-"></div>

    </div>



@endsection