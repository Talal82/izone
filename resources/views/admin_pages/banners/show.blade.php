@extends('layouts.master')

@section('title', 'View Banner')

@section('breadcrumb-header', 'Banner')

@section('breadcrumb-detail', 'View')

@section('stylesheets')

<link rel="stylesheet" type="text/css" href="{{ asset('css/custom.master.css') }}">

@endsection


@section('content')
<div class="box box-warning">
	<div class="row">
		<div class="col-md-12">
			<div class="col-md-8">
				<div class="margin-all">
					<img src="{{ asset('images/' . $banner -> image) }}" height="400" width="600" />
					<h3>{{ $banner -> name }}</h3>
					<p><strong>Detail:</strong></p>
					<p>{{ $banner -> detail }}</p>
				</div>
			</div>
			<div class="col-md-4 margin-vertical-10">
				<div class="well">
					<dl class="dl-horizontal">
						<dt>Created At:</dt>
						<dd> {{ date('M j,Y h:i a' , strtotime($banner -> created_at)) }} </dd>
					</dl>
					<dl class="dl-horizontal">
						<dt>Last Updated:</dt>
						<dd> {{ date('M j,Y h:i a', strtotime($banner -> created_at)) }} </dd>
					</dl>
					<hr>
					<div class="row">
						<div class="col-sm-6">
							{!! Html::linkRoute('banner.edit', 'Edit', array($banner -> id), array('class' => 'btn btn-primary btn-block')) !!}
						</div>
						<div class="col-sm-6">
							{{ Form::open(['route' => ['banner.destroy', $banner -> id], 'method' => 'DELETE']) }}

							{{Form::submit('Delete', ['class' => 'btn btn-danger btn-block'])}}

							{{ Form::close() }}
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>
</div>
@endsection