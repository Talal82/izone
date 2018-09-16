@extends('layouts.master')

@section('title', 'Admin Dashboard')

@section('page-title', 'Dashboard')



@section('content')
<div class="row">
    <div class="container">

        <h1 class="align-middle" style="margin-top: 50%; color: grey;">Admin Dashboard</h1>
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
</div>
@endsection



