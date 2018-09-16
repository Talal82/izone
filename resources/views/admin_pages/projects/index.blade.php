@extends('layouts.master')

@section('title', 'Projects')

@section('page-title', 'Projects')


@section('stylesheets')

<meta name="csrf-token" content="{{ csrf_token() }}">

<link rel="stylesheet" type="text/css" href="{{ asset('css/custom.master.css') }}">
{{-- datatables  --}}
<link rel="stylesheet" type="text/css" href="{{ asset('assets/plugins/datatables/dataTables.bootstrap4.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/plugins/datatables/buttons.bootstrap4.min.css') }}">
{{-- reponsive datatables --}}
<link rel="stylesheet" type="text/css" href="{{ asset('assets/plugins/datatables/responsive.bootstrap4.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/plugins/datatables/select.bootstrap4.min.css') }}">



@endsection

@section('content')
<div class="card p-2">
	<div class="card-header">
		<h4 style="display: inline; margin-top: 5px;">All Project</h4>
		<a href="{{ route('project.create') }}" class="btn btn-primary pull-right m-0"><span class="fa fa-plus m-0"></span> Create</a>
	</div>
	<div class="card-body">
		

		<div class="row">
			<div class="col-md-12">
				<table id="table" class="table table-responsive">
					<thead>
						<tr>
							{{-- <th> --}}
								{{-- <input type="checkbox" class="checkAll"/>&nbsp; Check all &nbsp;
								<br> --}}
								{{-- <select id="bulk_action" width="100" name="bulk_action">
									<option value="0">action</option>
									<option id="delete_action" value="1">delete</option>
									<option id="sort_action" value="2">sort</option>
								</select> --}}
								{{-- {!! Form::select('bulkAction' , array(0 =>'Action' , 1 => 'Delete' , 2 =>"Sort") ,'', array('class' =>'form-control input-sm bulkAction')) !!} --}}
							{{-- </th> --}}
							<th>ID</th>
							{{-- <th>Sort</th> --}}
							<th>Title</th>
							<th>Status</th>
							<th>Visibility</th>
							<th>Image</th>
							<th>Detail</th>
							<th>Actions</th>
						</tr>
					</thead>
					<tbody class="text-md-left card-text">
						@foreach($projects as $project)
						<tr id="{{ $project -> id }}">
							{{-- <td> --}}
								{{-- <div class="form-group">
									<label>
										<input type="checkbox" class="bulkChecked" name="{{$project -> id}}">
									</label>
								</div> --}}
							{{-- </td> --}}
							<td>{{ $project -> id }}</td>
							{{-- <td>
								<div class="form-group" style="width: 60px;">
									<input type="number" class="bulkSort form-control" id="{{$project -> id}}" name="sort"
									value="{{$project -> sort}}" style="width: 100%">
								</div>
							</td> --}}
							<td>{{ $project -> title }}</td>
							<td>{{ $project -> status }}</td>

							@if($project -> featured)
								<td>
									{{-- <form action="{{ route('project.visibility', [$project -> id]) }}" method="POST">

										<button type="submit" class="btn btn-success waves-effect waves-light">Visible</button>
										
									</form> --}}
									<a href="{{ route('project.visibility', [$project -> id]) }}" class="btn btn-success waves-effect waves-light">Visible</a>
									{{-- {{ Form::open(['route' => ['project.visibility', $project -> id], 'method' => 'PUT']) }}

									<button type="submit" class="btn btn-success waves-effect waves-light">Visible</button>

									{{ Form::close() }} --}}
								</td>
							@else
								<td>
									{{-- <form action="{{ route('project.visibility', [$project -> id]) }}" method="POST">

										<button type="submit" class="btn btn-danger btn-bordered waves-effect waves-light">Hide</button>
										
									</form> --}}
									<a href="{{ route('project.visibility', [$project -> id]) }}" class="btn btn-danger waves-effect waves-light">Hide</i></a>
									{{-- {{ Form::open(['route' => ['project.visibility', $project -> id], 'method' => 'PUT']) }}

									<button type="submit" class="btn btn-danger waves-effect waves-light">Hide</button>

									{{ Form::close() }} --}}
								</td>
							@endif

							<td>
								<img src="{{ asset('images/'. $project -> main_image) }}" width="200" height="150">
							</td>
							<td>{{ (strlen($project -> detail) > 30) ? substr($project -> detail,0, 30).'...' : $project -> detail }}</td>
							<td>
								<a href="{{ route('project.edit', [$project -> id]) }}" class="btn btn-icon waves-effect waves-light btn-primary float-left m-b-5"><i class="fa fa-wrench"></i></a>
								{{ Form::open(['route' => ['project.destroy', $project -> id], 'method' => 'DELETE']) }}

								<button type="submit" class="btn btn-icon waves-effect waves-light btn-danger m-b-5 float-left"><i class="fa fa-remove"></i></button>

								{{ Form::close() }}
							</td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
@endsection

@section('scripts')


<!-- Required datatable js -->
<script src="{{ asset('assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables/dataTables.bootstrap4.min.js') }}"></script>
<!-- Responsive examples -->
<script src="{{ asset('assets/plugins/datatables/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables/responsive.bootstrap4.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables/dataTables.select.min.js') }}"></script>


<script>
	var table = $('#table').DataTable({
			"ordering": true, 
			"sort": true,
			"select": true,
			columnDefs: [ {
				orderable: false,
				className: 'select-checkbox',
				// targets: 0
			} ],
			select: {
				style:    'os',
				selector: 'td:first-child'
			},
			order: [[ 0, 'asc' ]]
		});
	

</script>
{{-- my custom script for bulk action --}}
<?php $url = route('delete.bulk.projects') ?>
{{-- {{ dd($url) }} --}}
<script>var url = "<?php echo $url; ?>";</script>
<script src="{{ asset('js/bulkAjax.js') }}"></script>

@endsection