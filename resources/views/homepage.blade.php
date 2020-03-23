@extends('layouts.app')

@section('content')
<div class="container">

        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="jumbotron">
                    <h1 class="display-5">FreshStart Psychotherapy</h1>
                    <p class="lead">Low cost and subsidised counselling and psychotherapy.</p>
                    {{-- <hr class="my-4">
                    <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
                    <p class="lead">
                      <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
                    </p> --}}
                  </div>
                <img src="{{ asset('img/field.jpg') }}" class="img-fluid" alt="Responsive image">

            </div>
        </div>

</div>


@endsection
