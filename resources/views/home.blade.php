@extends('layout')
@section('judul')
SPIFAKULASIK
@endsection
@section('navbar1')
                    <li>
                        <a class="page-scroll" href="{{URL::to('/')}}">Home</a>
                    </li>
@endsection
@section('navbar2')

@endsection
<div class="container" style="padding-top: 100px">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
