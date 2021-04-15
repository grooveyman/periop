@extends('layouts.main')
@section('title','SCH OF PRE-OPERATIVE|VOTING')
@section('body')

    <div class="row">
      <!-- heading -->
      <div class="col-md-3 col-xs-6 col-lg-3 col-sm-3 col-"></div>
      <div class="col-md-6 col-xs-12 col-lg-6 col-sm-6 col- frame">
        <p class="">
          <!-- specify whether its presidential or whatever -->
          
          <h1>Results </h1>
        </p>
        <hr>
      </div>
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
              <h1>President</h1>
              <h4>AUGUSTINE AKAGRI: {{$total_augustine}}</h4>
              <h4>JOSEPH KOJO ERBAH: {{$total_joe}}</h4>
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
              <h1>Secretary</h1>
              <h4>EUGENE ADONGO: {{$total_eugene}}</h4>
              <h4>GRACE DWOMOH APPIAH: {{$total_grace}}</h4>
            </div>
          </div>
           <!-- details and action -->
          <div class="col-md-6">
              <div>
              </div>
          </div>
        </div>

<!-- secretary votes -->

        <div class="row" style="margin-top: 20px">

          <!-- picture -->
          <div class="col-md-6">
            <div class="">
              <h1>Treasurer</h1>
              <h4>SCHOLASTICA RITA ATTAKORA: {{$total_rita}}</h4>
              <h4>BEATRICE ASANTEWAA: {{$total_beatrice}}</h4>
            </div>
          </div>
           <!-- details and action -->
          <div class="col-md-6">
              <div>
                 
              </div>
          </div>
        </div>


<!-- treasurer votes -->


        <div class="row" style="margin-top: 20px">

          <!-- picture -->
          <div class="col-md-6">
            <div class="">
              <h1>P.R.O</h1>
              <h4>MICHAEL ARHIN: {{$total_mike}}</h4>
            </div>
          </div>
           <!-- details and action -->
          <div class="col-md-6">
              <div>
                 
              </div>
          </div>
        </div>


        <!-- pro votes -->


        <div class="row" style="margin-top: 20px">

          <!-- picture -->
          <div class="col-md-6">
            <div class="">
              <h1>Library Commissioner</h1>
              <h4>DIANA MOHAMMED: {{$total_diana}}</h4>
              <h4>JAMES ABDALLAH: {{$total_james}}</h4>
            </div>
          </div>
           <!-- details and action -->
          <div class="col-md-6">
              <div>
                
              </div>
          </div>
        </div>


     <!-- library votes -->


        <div class="row" style="margin-top: 20px">

          <!-- picture -->
          <div class="col-md-6">
            <div class="">
              <h1>Sports Commissioner</h1>
              <h4>SAMUEL BOAMAH: {{$total_sam}}</h4>
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
              <h1>Entertainment Commissioner</h1>
              <h4>DANIEL SAGOE: {{$total_daniel}}</h4>
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