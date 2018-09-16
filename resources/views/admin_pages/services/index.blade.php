@extends('layouts.master')

@section('title', 'Services')

@section('page-title', 'Services')


@section('stylesheets')

<link rel="stylesheet" type="text/css" href="{{ asset('css/custom.master.css') }}">
{{-- datatables  --}}
<link rel="stylesheet" type="text/css" href="{{ asset('assets/plugins/datatables/dataTables.bootstrap4.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/plugins/datatables/buttons.bootstrap4.min.css') }}">
{{-- reponsive datatables --}}
<link rel="stylesheet" type="text/css" href="{{ asset('assets/plugins/datatables/responsive.bootstrap4.min.css') }}">
{{-- <link rel="stylesheet" type="text/css" href="{{ asset('assets/plugins/datatables/jquery.dataTables.min.css') }}"> --}}
<link rel="stylesheet" type="text/css" href="{{ asset('assets/plugins/datatables/select.bootstrap4.min.css') }}">

@endsection

@section('content')
<div class="card p-2">
	<div class="card-header">
		<h4 style="display: inline; margin-top: 5px;">All Services</h4>
		<a href="{{ route('service.create') }}" class="btn btn-primary pull-right m-0"><span class="fa fa-plus m-0"></span> Create</a>
	</div>

	<div class="card-body">
		<div class="row">
			<div class="col-md-12">

				<table id="table" class="table table-responsive">
					<thead>
						<tr>
							{{-- <th></th> --}}
							<th>ID</th>
							<th>Name</th>
							<th>Detail</th>
							<th>Image</th>
							<th>Transparent Icon</th>
							<th>Visible Icon</th>
							<th>Actions</th>
						</tr>
					</thead>
					<tbody class="text-md-left card-text">
						@foreach($services as $service)
						<tr>
							{{-- <td></td> --}}
							<td>{{ $service -> id }}</td>
							<td>{{ $service -> name }}</td>
							<td>{{ $service -> detail }}</td>
							<td>
								<img src="{{ asset('images/'.$service -> image) }}" width="200" height="150">
							</td>
							<td>{{ $service -> transparent_icon }}</td>
							<td>{{ $service -> visible_icon }}</td>
							<td style="width: 100px;">
								<a href="{{ route('service.show', [$service -> id]) }}" class="btn btn-default btn-xs float-left">View</a>
								{{ Form::open(['route' => ['service.destroy', $service -> id], 'method' => 'DELETE']) }}

								{{Form::submit('Delete', ['class' => 'btn btn-danger btn-xs float-left'])}}

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
	$(document).ready(function() {
		$('#table').DataTable({
			"ordering": true, 
			"sort": true,
			"select": true,
			columnDefs: [ {
				orderable: false,
				className: 'select-checkbox',
				// targets:   0
			} ],
			select: {
				style:    'os',
				selector: 'td:first-child'
			},
			order: [[ 1, 'asc' ]]
		});
	});
</script>

@endsection