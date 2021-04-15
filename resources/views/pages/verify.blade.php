@extends('layouts.main')
@section('title','SCH OF PRE-OPERATIVE|VOTING')

@section('body')
<div class="container">

	@if(session('failed'))

<!-- pascode -->
	<div class="row" style="margin-top: 10px">
		<div class="col-md-3 col-xs-3 col-sm-4 col-lg-3 col-"></div>
		<div class="col-md-6 col-xs-6 col-sm-4 col-lg-6 col- alert alert-danger">
			<p style="font-size: 20px; color:red ">{{session('failed')}}</p>
		</div>
		<div class="col-md-3 col-xs-3 col-sm-4 col-lg-3 col-"></div>

		
	</div>

 @endif
	<!--------- -->	
	<div class="row" style="margin-top: 10%">
		<div class="col-md-4 col-xs-6 col-sm-4 col-lg-4 col-"></div>
		<div class="col-md-4 col-xs-6 col-sm-4 col-lg-4 col-">
			<form method="post" action="{{route('verify')}}">
			    {{csrf_field()}}

			<div class="form-group">
				<label>Please Enter Your Index Number</label>
				<div class="row">
					<div class="col-md-3">
						<input type="text" placeholder="" name="index_code" class="form-control" required/>
					</div>
					<div class="col-md-1" style="font-size: 20px; font-weight: bold;">/</div>
					<div class="col-md-3">

						<input type="text" placeholder="" name="index_year" class="form-control" required/>
					</div>
					<div class="col-md-1" style="font-size: 20px; font-weight: bold;">/</div>
					<div class="col-md-3">
						<input type="text" placeholder="" name="index_number" class="form-control" required/>
					</div>
				</div>
				
			</div>
			@if($errors->any())
			@foreach ($errors->all() as $error)
				<span><p style="color: red">{{ $error }}</p></span>
				@endforeach
			@endif 

			@if(session('failed'))
			<span><p style="color: red">{{session('failed')}}</p></span>
			@endif

			<input type="submit" class="btn btn-success form-control" name="" style="background-color: #028977">
			

		</form>
		</div>
		<div class="col-md-4 col-xs-6 col-sm-4 col-lg-4 col-"></div>
		
	</div>
</div>

@endsection