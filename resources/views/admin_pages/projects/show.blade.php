@extends('layouts.master')

@section('title', 'View Project')

@section('page-title', 'Projects')


@section('stylesheets')

<link rel="stylesheet" type="text/css" href="{{ asset('css/custom.master.css') }}">

@endsection


@section('content')
<div class="row">
			<div class="col-md-8 margin-vertical-10">
					<img src="{{ asset('images/'. $project -> main_image) }}" width="400" height="300">
					<h2>{{ $project -> title }}</h2>
					<div>
						<h4>Name:</h4>
						<p class="form-control">{{ $project -> name }}</p>
						<h4>Owner:</h4>
						<p class="form-control">{{ $project -> owner }}</p>
						<h4>Consultant:</h4>
						<p class="form-control">{{ $project -> consultant }}</p>
						<h4>Status:</h4>
						<p class="form-control">{{ $project -> status }}</p>
						<h4>Detail:</h4>
						<div class="form-control">
							{!! $project -> detail !!}
						</div>
					</div>
			</div>
			<div class="col-md-4 margin-vertical-10">
				<div class="card p-2">
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
							{!! Html::linkRoute('project.edit', 'Edit', array($project -> id), array('class' => 'btn btn-primary btn-block')) !!}
						</div>
						<div class="col-sm-6">
							{{ Form::open(['route' => ['project.destroy', $project -> id], 'method' => 'DELETE']) }}

							{{Form::submit('Delete', ['class' => 'btn btn-danger btn-block'])}}

							{{ Form::close() }}
						</div>
					</div>
				</div>
			</div>
</div>
@endsection