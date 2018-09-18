@extends('layouts.master')

@section('title', 'Create User')

@section('page-title', 'Users')

@section('content')

<form action="{{ route('users.update', [$user -> id]) }}" method="POST">
	{{ method_field('PUT') }}
	{{ csrf_field() }}

<div class="card">
	<div class="card-header">
		<div class="col-md-12">
			<h4 style="display: inline;">Edit User</h4>
		</div>
	</div>
	<div class="card-body">
		<div class="row">
			<div class="col-md-8 offset-2">
				<div class="form-group">
					<label for="name" class="form-control-label">Name:</label>
					<input type="text" name="name" id="name" class="form-control" value="{{ $user -> name }}">
				</div>
			</div>

			<div class="col-md-8 offset-2">
				<div class="form-group">
					<label for="email" class="form-control-label">email:</label>
					<input type="email" name="email" id="email" class="form-control" value="{{ $user -> email }}">
				</div>
			</div>

			{{-- <div class="col-md-8 offset-2">
				<div class="form-group">
					<label for="password" class="form-control-label">Password:</label>
					<input type="password" name="password" id="password" class="form-control">
				</div>
			</div> --}}
			<div class="col-md-8 offset-2">
				<div class="form-group">
					<div class="radio radio-success">
						<input type="radio" name="set_pass" id="keep" value="keep" checked onclick="passwordVisibility()"> <label for="keep">Do Not Change Password</label>
					</div>
				</div>
				<div class="form-group">
					<div class="radio radio-success">
						<input type="radio" name="set_pass" id="auto" value="auto" onclick="passwordVisibility()"> <label for="auto">Auto-Generate New Password</label>
					</div>
				</div>	
				<div class="form-group">
					<div class="radio radio-success">
						<input type="radio" name="set_pass" id="manual" value="manual" onclick="passwordVisibility()"> <label for="manual">Manually Set New Password</label>
					</div>
				</div>
			</div>

			<div class="col-md-8 offset-2">
				<div class="form-group">
					<input type="password" hidden name="password" id="password" class="form-control" placeholder="New Password">
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
</form>


@endsection

@section('scripts')

<script>
	function passwordVisibility(){
		var keep = document.getElementById('keep');
		var auto = document.getElementById('auto');
		var manual = document.getElementById('manual');
		if(manual.checked){
			document.getElementById('password').hidden = false;
		}
		if(auto.checked || keep.checked){
			document.getElementById('password').hidden = true;
		}
	}
</script>

@endsection