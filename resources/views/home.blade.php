@extends('layouts.master')

@section('title', 'Admin Dashboard')

@section('breadcrumb-header', 'Dashboard')

@section('breadcrumb-detail', 'Control Panel')


@section('content')
<div class="container">
    {{-- <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="box">
                <div class="box-header">Dashboard</div>

                <div class="box-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div> --}}
</div>
@endsection



