@extends('layouts.master')

@section('title', 'Create User')

@section('page-title', 'Users')

@section('content')

{!! Form::open(['route' => 'users.store', 'method' => 'POST']) !!}

<div class="card">
	<div class="card-header">
		<div class="col-md-12">
			<h4 style="display: inline;">Create New User</h4>
		</div>
	</div>
	<div class="card-body">
		<div class="row">
			<div class="col-md-8 offset-2">
				<div class="form-group">
					<label for="name" class="form-control-label">Name:</label>
					<input type="text" name="name" id="name" class="form-control">
				</div>
			</div>

			<div class="col-md-8 offset-2">
				<div class="form-group">
					<label for="email" class="form-control-label">email:</label>
					<input type="email" name="email" id="email" class="form-control">
				</div>
			</div>

			<div class="col-md-8 offset-2">
				<div class="form-group">
					<label for="password" class="form-control-label">Password:</label>
					<input type="password" name="password" id="password" class="form-control">
				</div>
			</div>
			<div class="col-md-8 offset-2">
				<div class="form-group checkbox custom-checkbox">
					<input id="auto_generate" type="checkbox" name="auto_generate" onclick="disableMyText()">
					<label for="auto_generate">Auto Generate Password</label>
				</div>
			</div>
			<div class="col-md-8 offset-2">
				<div class="form-group">
					{{ Form::submit('Create User', array('class' => 'btn btn-success btn-block')) }}
				</div>
			</div>
		</div>
	</div>
	
	
</div>
{!! Form::close() !!}


@endsection

@section('scripts')

<script>
	// function disableMyText(){  
	// 	if(document.getElementById("auto_generate").checked == true){  
	// 		document.getElementById("password").disabled = true;  
	// 	}else{
	// 		document.getElementById("password").disabled = false;
	// 	}  
	// } 
	document.getElementById('auto_generate').onchange = function() {
		document.getElementById('password').disabled = this.checked;
		document.getElementById('password').value = '';
	};
</script>

@endsection