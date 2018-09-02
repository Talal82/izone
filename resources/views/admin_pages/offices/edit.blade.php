@extends('layouts.master')

@section('title', 'Edit Office Info')

@section('page_title', 'Edit Ofice Information')

@section('breadcrumb', 'offices')

@section('stylesheets')

<link rel="stylesheet" type="text/css" href="{{ asset('css/custom.master.css') }}">

@endsection

@section('content')
		<div class="row">
			<div class="col-md-12">
				{!! Form::model( $office , ['route' => ['office.update', $office->id],  'method' => 'PUT' ]) !!}
				<div class="row">
					<div class="col-md-8">
						{{ csrf_field() }}

						{{ Form::label('name', 'Name:', ['class' => 'margin-bottom-10'])}}
						{{ Form::text('name', null, array('class' => 'form-control'))}}

						{{ Form::label('address', 'Address:', ['class' => 'margin-bottom-10'])}}
						{{ Form::text('address', null, array('class' => 'form-control'))}}

						{{ Form::label('po_box', 'P.O.Box:', ['class' => 'margin-bottom-10'])}}
						{{ Form::text('po_box', null, array('class' => 'form-control'))}}

						{{ Form::label('phone', "Phone:", ['class' => 'margin-vertical-10']) }}
						{{ Form::text('phone', null, ['class' => 'form-control']) }}

						{{ Form::label('fax', 'Fax:', ['class' => 'margin-vertical-10']) }}
						{{ Form::text('fax', null, ['class' => 'form-control']) }}

						{{ Form::label('email', "Email:", ['class' => 'margin-vertical-10']) }}
						{{ Form::text('email', null, ['class' => 'form-control']) }}

						{{ Form::label('latitude', "Latitude:", ['class' => 'margin-vertical-10']) }}
						{{ Form::text('latitude', null, ['class' => 'form-control']) }}

						{{ Form::label('longitude', "Longitude:", ['class' => 'margin-vertical-10']) }}
						{{ Form::text('longitude', null, ['class' => 'form-control']) }}
					</div>
					<div class="col-md-4">
						<div class="well">
							<dl class="dl-horizontal">
								<dt>Created At:</dt>
								<dd> {{ date('M j,Y h:i a' , strtotime($office -> created_at)) }} </dd>
							</dl>
							<dl class="dl-horizontal">
								<dt>Last Updated:</dt>
								<dd> {{ date('M j,Y h:i a', strtotime($office -> created_at)) }} </dd>
							</dl>
							<hr>
							<div class="row">
								<div class="col-sm-6">
									<a href="{{ route('office.show', [$office -> id]) }}" class="btn btn-danger btn-block">Cancel</a>
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