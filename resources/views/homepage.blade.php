@extends('layouts.app')

@section('content')


  <div class="container">

      <div class="showcase-content">
          <div class="p-1">
          <div class="center-items">
            <img src="{{ asset('img/logo.jpg') }}" alt="">
          </div>
          <div class="p-2 center-items">
              <a href="#" class="btn-primary">Contact Us</a>
              <a href="#" class="btn-secondary">Learn More</a>
          </div>
          </div>

      </div>


    <div class="overview showcase-content">
      <div class='row'>
          <div class='column-1 p-3'>
            <h1>WHAT WE DO</h1>
            <p>FreshStart Psychotherapy (FS) provides a unique service to clients and psychotherapists. For clients we ensure that low cost psychotherapy or counselling is provided for the time period required by the client and not the therapist. The therapist has an opportunity to gain valuable experience of working with clients who require long term or open ended psychotherapy but cannot access it because it is either not available from the NHS or other bodies or the client cannot afford it.</p>
            <p>Issues that can be addressed in therapy include:  depression, anxiety, anger and anger management, addictions, alcohol issues, sexual or sexual orientation issues,  bereavement and low self-esteem. </p>
            <p>If you feel that you need access to counselling or psychotherapy for any of the above issues or for any other reason please complete the contact form at the link below. </p>
            <a href="#" class="btn-primary">Contact Us</a>
            <p>Alternatively you email us at enquiries@freshstartpsychotherapy.co.uk or call us on 020 7691 7638. Please note this will direct you to an answerphone where you can leave a message with your contact telephone number and we will call back as soon as we possibly can ... But please bear in mind that FreshStart is run by Volunteers who have other commitments on their time. </p>  
          </div>
        </div>
    </div>
    
  </div>
      


@endsection
