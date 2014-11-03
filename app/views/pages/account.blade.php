@extends('layouts.default')
@section('content')
<div class="LoginContent">
	<div class="alert alert-info" role="alert">
	<b> enter details below to add an account </b>
	</div>
	{{ Form::open(array()) }}
	<p>
	{{ Form::text('fullname', Input::old('text'), array('placeholder' => 'Username','class' => 'form-control')) }}
	</p>
	<p>
		{{ Form::password('password',array('placeholder' => 'Password','class' => 'form-control')) }}
	</p>
	<p>
	<input type="submit" name="judge" value="Add Judge" class = 'btn btn-lg btn-default'>
	<input type="submit" name="lawyer" value="Add Lawyer" class = 'btn btn-lg btn-primary'>
	</p>
	{{ Form::close() }}


	
	
</div>
@stop