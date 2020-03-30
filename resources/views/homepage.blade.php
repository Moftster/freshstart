@extends('layouts.app')

@section('content')
{{-- <div class="container">
    <div class="jumbotron banner-text">
        <h1 class="display-4"></h1>
        <p class="lead">Low cost and subsidised counselling and psychotherapy.</p>
        <hr class="my-4">
        <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
        <p class="lead">
          <a class="btn btn-primary btn-lg" href="#" role="button">Find out more</a>
        </p>
      </div>

</div> --}}


{{-- <header class="showcase"> --}}
  <div class="container">
      {{-- <nav>
          <h1 class="logo">FreshStart Psychotherapy</h1>
          <ul>
              <li><a href="#">Home</a></li>
              <li><a href="#">About</a></li>
              <li><a href="#">Services</a></li>
          </ul>
      </nav> --}}

      <div class="showcase-content">
          <div>
              <h1>FreshStart Psychotherapy</h1>
              <p class="my-1">
                Low cost and subsidised counselling and psychotherapy.
              </p>
              <a href="#" class="btn-primary">Learn More</a>
              <a href="#" class="btn-secondary">Sign Up</a>
          </div>
          <img
              src="https://themesbrand.com/zooki/layouts/images/home-2-img.png"
          />
      </div>
  </div>
{{-- </header> --}}



@endsection
