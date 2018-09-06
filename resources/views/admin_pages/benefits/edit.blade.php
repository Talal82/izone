@extends('layouts.master')

@section('title', 'Edit Benefits')

@section('breadcrumb-header', 'Benefit')

@section('breadcrumb-detail', 'Edit')

@section('stylesheets')

	<link rel="stylesheet" type="text/css" href="{{ asset('css/custom.master.css') }}">
	<script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
  	<script>
  		tinymce.init({ 
  			selector:'textarea'
  		});
  	</script>

@endsection

@section('content')
		<div class="row">
			<div class="col-md-12">
				{!! Form::model( $benefit , ['route' => ['benefit.update', $benefit->id], 'method' => 'PUT']) !!}
				<div class="row">
					<div class="col-md-8">
						{{ csrf_field() }}

						{{ Form::label('name', 'Name:', ['class' => 'margin-bottom-10'])}}
						{{ Form::text('name', null, array('class' => 'form-control'))}}

						{{ Form::label('detail', 'Detail:', ['class' => 'margin-bottom-10'])}}
						{{ Form::textarea('detail', null, array('class' => 'form-control'))}}

					</div>
					<div class="col-md-4">
						<div class="well">
							<dl class="dl-horizontal">
								<dt>Created At:</dt>
								<dd> {{ date('M j,Y h:i a' , strtotime($benefit -> created_at)) }} </dd>
							</dl>
							<dl class="dl-horizontal">
								<dt>Last Updated:</dt>
								<dd> {{ date('M j,Y h:i a', strtotime($benefit -> created_at)) }} </dd>
							</dl>
							<hr>
							<div class="row">
								<div class="col-sm-6">
									<a href="{{ route('benefit.index') }}" class="btn btn-danger btn-block">Cancel</a>
								</div>
								<div class="col-sm-6">
									{{ Form::submit('Save Changes', ['class' => 'btn btn-success btn-block']) }}
								</div>
							</div>
						</div>
					</div>
				</div>
				{!! Form::close() !!}
			</div>
		</div>

@endsection