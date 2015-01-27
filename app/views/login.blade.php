@extends('layout')
@section('content')
<!-- <div class="container"> -->
<div class="panel panel-default">
	<div class="panel-heading">
		<div class="panel-title">Login Here:</div>
	</div>
	<div class="panel-body">
		<!-- <form action="{{ URL::to('/login') }}" class="form-horizontal" role="form" method="post">

			<div class="form-group">
				<label class="control-label col-sm-2" for="name">Email:</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="email" placeholder="Enter email">
				</div>
			</div>	

			<div class="form-group">
				<label class="control-label col-sm-2" for="password">Password:</label>
				<div class="col-sm-10">
					<input type="password" class="form-control" id="pwd" placeholder="Enter password">
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-10 col-sm-2">
					<button type="submit" class="btn btn-default col-sm-12">Submit</button>
				</div>	
			</div>
		</form> -->	
		
		{{ Form::open(array('url' => '/login', 'class' => 'form-horizontal', 'role' => 'form')) }}
		
		<div class="form-group">
			{{ Form::label('name', 'User Name', ['class' => 'control-label col-md-2']) }}
			<div class="col-md-10">
				{{ Form::text('name','Name',['class' => 'form-control']) }}
			</div>	
		</div>
		
		<div class="form-group">
			{{ Form::label('password','Password',['class' => 'control-label col-md-2']) }}
			<div class="col-md-10">
				{{ Form::text('password','Password',['class' => 'form-control']) }}
			</div>
		</div>
		<div class="form-group">
			<div class="col-md-offset-10 col-md-2">
				{{ Form::submit('Submit', ['class' => 'btn btn-default col-md-12'] ) }}
			</div>
		</div>
		{{ Form::close() }}

	</div>
</div>

<!-- </div> -->
@stop