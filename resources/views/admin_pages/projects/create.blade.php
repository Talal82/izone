@extends('layouts.master')

@section('title', 'Create Project')

@section('page-title', 'Projects')


@section('stylesheets')

<style>

@font-face {
	font-family: DeliciousRoman;
	src: url(public/assets/plugins/dropify/fonts/*);
}

</style>

{{-- custom style for tabs --}}
<link rel="stylesheet" type="text/css" href="{{ asset('css/styles.css') }}">

<link rel="stylesheet" type="text/css" href="{{ asset('css/custom.master.css') }}">
{{-- dropify js link --}}
<link rel="stylesheet" type="text/css" href="{{ asset('assets/plugins/dropify/css/dropify.min.css') }}">

@endsection

@section('content')
{!! Form::open(['route' => 'project.store', 'method' => 'POST', 'files' => true]) !!}
{{ csrf_field() }}

<div class="card">
	{{-- <div class="card-header"> --}}
		<div class="row p-3">
			<div class="col-md-12">
				<h4 style="display: inline; margin-top: 5px;">Create New Project</h4>
				{{ Form::submit('Submit', array('class' => 'btn btn-success pull-right')) }}
			</div>
		</div>
		
	{{-- </div> --}}
	<div class="row">
		<div class="col-md-12 p-3">
			<ul class="nav nav-tabs">
				<li class="nav-item">
					<a href="#home1" data-toggle="tab" aria-expanded="false" class="nav-link active">
						Info
					</a>
				</li>

				<li class="nav-item">
					<a href="#set2" data-toggle="tab" aria-expanded="false" class="nav-link">
						Image
					</a>
				</li>

			</ul>
			<div class="tab-content">
				<div role="tabpanel" class="tab-pane fade show active" id="home1">
					<h4>Project Info</h4>
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								{{ Form::label('title', 'Title:', ['class' => 'margin-top-10'])}}
								{{ Form::text('title', null, array('class' => 'form-control'))}}
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								{{ Form::label('name', 'Name:', ['class' => 'margin-top-10'])}}
								{{ Form::text('name', null, array('class' => 'form-control'))}}
							</div>
						</div>

						<div class="col-md-6">
							<div class="form-group">
								{{ Form::label('owner', 'Owner:', ['class' => 'margin-top-10'])}}
								{{ Form::text('owner', null, array('class' => 'form-control'))}}
							</div>
						</div>

						<div class="col-md-6">
							<div class="form-group">
								{{ Form::label('consultant', 'Consultant:', ['class' => 'margin-top-10'])}}
								{{ Form::text('consultant', null, array('class' => 'form-control'))}}
							</div>
						</div>

						<div class="col-md-12">
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										{{ Form::label('status', 'Status:', ['class' => 'margin-top-10'])}}
										<select class="form-control form-control" name="status">
											<option value="Ongoing">Ongoing</option>
											<option value="Completed">Completed</option>
										</select>
									</div>
								</div>


								<div class="col-md-6">
									<div class="form-group" style="padding-top: 40px">
										<div class="form-check">
											<input type="checkbox" name="featured" class="form-check-input">
											{{ Form::label('featured', 'Featured:',['class', ''])}}<br>
										</div>
									</div>
								</div>
							</div>
						</div>



						<div class="col-md-12">
							<div class="form-group">
								{{ Form::label('detail', "Detail:", ['class' => 'margin-top-10']) }}
								{{ Form::textarea('detail', null, ['class' => 'form-control']) }}
							</div>
						</div>


					</div>
				</div>
				<div role="tabpanel" class="tab-pane fade" id="set2">
					<h4>Project Image</h4>
					<input type="file" name="main_image" class="dropify form-control-file" data-height="400" data-width="400">
				</div>
			</div>
			

		</div>
	</div>
	
	
</div>
{!! Form::close() !!}


@endsection




@section('scripts')




{{-- tinymce plugin --}}
<script src="{{ asset('assets/plugins/tinymce/tinymce.min.js') }}"></script>
<script type="text/javascript">
	$(document).ready(function () {
		tinymce.init({
			selector: "textarea",
			theme: "modern",
			height:300,
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

<script type="text/javascript" src="{{ asset('assets/plugins/dropify/js/dropify.min.js') }}"></script>

<script type="text/javascript">
	$('.dropify').dropify();
</script>

@endsection