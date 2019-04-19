@extends('adminlte::page')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                @section('content_header')
                    <h1>Dashboard</h1>
                @stop

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @section('content')
                        <p>You are logged in!</p>
                    @stop
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
