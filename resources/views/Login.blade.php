@extends('layout.main')

@section('title')
    welcome page
@endsection

@section('body')
	<div class="col-md-6">
		<h2>Login</h2>
		<form method="POST" action="{{route('signin')}}">
			@csrf
		  	<div class="form-group">
		    	<label for="email">Email address:</label>
		    	<input type="email" class="form-control" id="email" name = "email">
		  	</div>
		  	<div class="form-group">
		    	<label for="pwd">Password:</label>
		    	<input type="password" class="form-control" id="pwd" name="password">
		  	</div>
		  	<div class="checkbox">
		    	<label><input type="checkbox"> Remember me</label>
		  	</div>
		  	
		  	<button type="submit" class="btn btn-default">Submit</button>
		</form>
	</div>

@endsection