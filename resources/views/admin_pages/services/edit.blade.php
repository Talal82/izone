@extends('layouts.master')

@section('title', 'Edit Service Info')

@section('page-title', 'Services')


@section('stylesheets')

<link rel="stylesheet" type="text/css" href="{{ asset('css/custom.master.css') }}">

@endsection

@section('content')
		<div class="row">
			<div class="col-md-12">
				{!! Form::model( $service , ['route' => ['service.update', $service->id],  'method' => 'PUT', 'files' => true ]) !!}
				<div class="row">
					<div class="col-md-8">
						{{ csrf_field() }}
						
						{{ Form::label('name', 'Name:', ['class' => 'margin-vertical-10'])}}
						{{ Form::text('name', null, array('class' => 'form-control'))}}


						{{ Form::label('detail', 'Detail:', ['class' => 'margin-vertical-10'])}}
						{{ Form::text('detail', null, array('class' => 'form-control'))}}


						{{ Form::label('full_detail', "Full Detail:", ['class' => 'margin-vertical-10']) }}
						{{ Form::textarea('full_detail', null, ['class' => 'form-control']) }}


						{{ Form::label('image', 'Upload Main Service Image:', ['class' => 'margin-vertical-10']) }}
						{{ Form::file('image', ['class' => 'btn btn-default btn-flat']) }}


						{{ Form::label('transparent_icon', 'Upload Transparent Icon:', ['class' => 'margin-vertical-10']) }}
						{{ Form::file('transparent_icon',['class' => 'btn btn-default btn-flat']) }}
						

						{{ Form::label('visible_icon', 'Upload Visible Icon:', ['class' => 'margin-vertical-10']) }}
						{{ Form::file('visible_icon',['class' => 'btn btn-default btn-flat']) }}
						
					</div>
					<div class="col-md-4">
						<div class="well">
							<dl class="dl-horizontal">
								<dt>Created At:</dt>
								<dd> {{ date('M j,Y h:i a' , strtotime($service -> created_at)) }} </dd>
							</dl>
							<dl class="dl-horizontal">
								<dt>Last Updated:</dt>
								<dd> {{ date('M j,Y h:i a', strtotime($service -> created_at)) }} </dd>
							</dl>
							<hr>
							<div class="row">
								<div class="col-sm-6">
									<a href="{{ route('service.show', [$service -> id]) }}" class="btn btn-danger btn-block">Cancel</a>
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