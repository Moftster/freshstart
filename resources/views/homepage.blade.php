@extends('layouts.app')

@section('content')
<div class="container">
    
        <div class="alert alert-success text-center" role="alert">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
            You are logged in!
        </div>

        <div class="row justify-content-center">
            <div class="col-md-12">
                <h1>This is the homepage</h1>
            </div>
        </div>

</div>


@endsection
