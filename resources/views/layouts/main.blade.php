<!DOCTYPE html>
<html>
<head>
 <title> @yield('title')</title>
  <meta charset="utf-8">
<!--   <link href="{{url('/'). '/style.css'}}"> -->
<link rel="stylesheet" type="text/css" href="{{asset('style.css')}}">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- <script type="" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.0/jquery-ui.js"></script> -->
  <link rel="stylesheet" href="{{url('/').'/bootstrap-4/css/bootstrap.min.css'}}">
  <link rel="shortcut-icon" href="{{url('/').'/IMAGES/nmtc-logo-trans.png'}}">
 <!--  <script src="{{url('/'). '/bootstrap-4/js/jquery.min.js'}}"></script> -->
  <script src="{{url('/'). '/bootstrap-4/js/jquery.js'}}"></script>
 <!--  <script src="{{url('/'). '/bootstrap-4/js/popper.min.js'}}"></script> -->
  <script src="{{url('/'). '/bootstrap-4/js/bootstrap.min.js'}}"></script>

 <!--  <link rel="stylesheet" type="text/css" href="styles.css"> -->
  
</head>
  <body>

    <!-- navbar -->
    <nav class="navbar navbar-expand-md navbar-dark sticky-top" style="padding: 20px; background-color: #028977">
       <img src="{{url('/').'/images/sop.jpg'}}" width="50px" height="50px" style="margin-right: 10px">
      <a href="#" class="navbar-brand name"> School of Peri-Operative And Critical Care Nursing</a>
      <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
        <span class="" style="border:none;"></span>

      </button>
    </nav>
   
      <div class="content p-0">
        @yield('body')
      </div>

    <!-- footer -->
    <div class="">
      <!-- <hr style="background-color: white; margin-right: 10%; margin-left: 10%; margin-top: 50px;"> -->

    </div>


  </body>

</html>