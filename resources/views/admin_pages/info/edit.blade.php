@extends('layouts.master')

@section('title', 'Create Information')

@section('page_title', 'Create Information')

@section('breadcrumb', 'contact info')

@section('stylesheets')

<link rel="stylesheet" type="text/css" href="{{ asset('css/custom.master.css') }}">

@endsection

@section('content')
		<div class="row">
			<div class="col-md-12">
				{!! Form::model( $info , ['route' => ['info.update', $info->id],  'method' => 'PUT' ]) !!}
				<div class="row">
					<div class="col-md-8">
						{{ csrf_field() }}

						{{ Form::label('email', 'Email:', ['class' => 'margin-bottom-10'])}}
						{{ Form::text('email', null, array('class' => 'form-control'))}}

						{{ Form::label('phone', "Phone:", ['class' => 'margin-vertical-10']) }}
						{{ Form::text('phone', null, ['class' => 'form-control']) }}

						{{ Form::label('fax', 'Fax:', ['class' => 'margin-vertical-10']) }}
						{{ Form::text('fax', null, ['class' => 'form-control']) }}

						{{ Form::label('type', 'Info Type:', ['class' => 'margin-vertical-10'])}}
						<select class="form-control form-control-lg" name="type">
							@if( $info -> type == 'header')
							<option selected value="header">Header</option>
							<option value="footer">Footer</option>
							@else
							<option value="header">Header</option>
							<option selected value="footer">Footer</option>
							@endif
						</select>

						{{ Form::label('address', 'Address:', ['class' => 'margin-vertical-10']) }}
						{{ Form::text('address', null, ['class' => 'form-control']) }}
					</div>
					<div class="col-md-4">
						<div class="well">
							<dl class="dl-horizontal">
								<dt>Created At:</dt>
								<dd> {{ date('M j,Y h:i a' , strtotime($info -> created_at)) }} </dd>
							</dl>
							<dl class="dl-horizontal">
								<dt>Last Updated:</dt>
								<dd> {{ date('M j,Y h:i a', strtotime($info -> created_at)) }} </dd>
							</dl>
							<hr>
							<div class="row">
								<div class="col-sm-6">
									{!! Html::linkRoute('info.index', 'Cancel', array($info -> id), array('class' => 'btn btn-danger btn-block')) !!}
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