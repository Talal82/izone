@extends('layouts.master')

@section('title', 'Edit Project Info')

@section('page_title', 'Edit Project Information')

@section('breadcrumb', 'porjects')

@section('stylesheets')

<link rel="stylesheet" type="text/css" href="{{ asset('css/custom.master.css') }}">

@endsection

@section('content')
		<div class="row">
			<div class="col-md-12">
				{!! Form::model( $project , ['route' => ['project.update', $project->id],  'method' => 'PUT', 'files' => true ]) !!}
				<div class="row">
					<div class="col-md-8">
						{{ csrf_field() }}
						
						{{ Form::label('title', 'Title:', ['class' => 'margin-top-10'])}}
						{{ Form::text('title', null, array('class' => 'form-control'))}}

						{{ Form::label('name', 'Name:', ['class' => 'margin-top-10'])}}
						{{ Form::text('name', null, array('class' => 'form-control'))}}

						{{ Form::label('owner', 'Owner:', ['class' => 'margin-top-10'])}}
						{{ Form::text('owner', null, array('class' => 'form-control'))}}

						{{ Form::label('consultant', 'Consultant:', ['class' => 'margin-top-10'])}}
						{{ Form::text('consultant', null, array('class' => 'form-control'))}}

						{{ Form::label('status', 'Status:', ['class' => 'margin-top-10'])}}
						@if( $project -> status == 'Ongoing')
							<select class="form-control form-control-lg" name="status" value="Ongoing">
						@else
							<select class="form-control form-control-lg" name="status" value="Completed">
						@endif
							<option value="Ongoing">Ongoing</option>
							<option value="Completed">Completed</option>
						</select>
						<br>
						
						@if($project -> featured == true)
							<input type="checkbox" checked name="featured" class="form-check-input">
						@else
							<input type="checkbox" name="featured" class="form-check-input">
						@endif
						{{ Form::label('featured', 'Featured:',['class', ''])}}<br>


						{{ Form::label('main_image', 'Upload Main Project Image:', ['class' => 'margin-top-10']) }}
						{{ Form::file('main_image', ['class' => 'btn btn-default btn-flat']) }}

						{{ Form::label('detail', "Detail:", ['class' => 'margin-top-10']) }}
						{{ Form::textarea('detail', null, ['class' => 'form-control']) }}
						
					</div>
					<div class="col-md-4">
						<div class="well">
							<dl class="dl-horizontal">
								<dt>Created At:</dt>
								<dd> {{ date('M j,Y h:i a' , strtotime($project -> created_at)) }} </dd>
							</dl>
							<dl class="dl-horizontal">
								<dt>Last Updated:</dt>
								<dd> {{ date('M j,Y h:i a', strtotime($project -> created_at)) }} </dd>
							</dl>
							<hr>
							<div class="row">
								<div class="col-sm-6">
									<a href="{{ route('project.show', [$project -> id]) }}" class="btn btn-danger btn-block">Cancel</a>
									{{-- {!! Html::linkRoute('office.view', 'Cancel', array($office -> id), array('class' => 'btn btn-danger btn-block')) !!} --}}
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