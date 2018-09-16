@extends('layouts.master')

@section('title', 'Edit Values')

@section('page-title', 'Values')


@section('stylesheets')

	<link rel="stylesheet" type="text/css" href="{{ asset('css/custom.master.css') }}">

@endsection

@section('content')
			<div class="col-md-12">
				{!! Form::model( $value , ['route' => ['value.update', $value->id], 'method' => 'PUT']) !!}
				<div class="row">
					<div class="col-md-8">
						{{ csrf_field() }}

						{{ Form::label('name', 'Name:', ['class' => 'margin-bottom-10'])}}
						{{ Form::text('name', null, array('class' => 'form-control'))}}

						{{ Form::label('detail', 'Detail:', ['class' => 'margin-bottom-10'])}}
						{{ Form::textarea('detail', null, array('class' => 'form-control'))}}

					</div>
					<div class="col-md-4">
						<div class="card p-2">
							<dl class="dl-horizontal">
								<dt>Created At:</dt>
								<dd> {{ date('M j,Y h:i a' , strtotime($value -> created_at)) }} </dd>
							</dl>
							<dl class="dl-horizontal">
								<dt>Last Updated:</dt>
								<dd> {{ date('M j,Y h:i a', strtotime($value -> created_at)) }} </dd>
							</dl>
							<hr>
							<div class="row">
								<div class="col-sm-6">
									<a href="{{ route('value.index') }}" class="btn btn-danger btn-block">Cancel</a>
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

@endsection

@section('scripts')

<script src="{{ asset('assets/plugins/tinymce/tinymce.min.js') }}"></script>
<script type="text/javascript">
	$(document).ready(function () {
		tinymce.init({
			selector: "textarea",
			theme: "modern",
			plugins: [
			"advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
			"searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
			"save table contextmenu directionality emoticons template paste textcolor"
			],
			toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | print preview media fullpage | forecolor backcolor emoticons",
			style_formats: [
			{title: 'Bold text', inline: 'b'},
			{title: 'Red text', inline: 'span', styles: {color: '#ff0000'}},
			{title: 'Red header', block: 'h1', styles: {color: '#ff0000'}},
			{title: 'Example 1', inline: 'span', classes: 'example1'},
			{title: 'Example 2', inline: 'span', classes: 'example2'},
			{title: 'Table styles'},
			{title: 'Table row 1', selector: 'tr', classes: 'tablerow1'}
			]
		});
	});
</script>

@endsection