@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="brand page-header">CONTACT US</h1>

        <div class="wrapper">

          <div class="company-info">
            <h3>FreshStartPsychotherapy</h3>
            <ul>
              <li><i class="fa fa-home"></i>2 Warwick Crescent, Little Venice, London W2 6NE</li>
              <li><i class="fa fa-phone"></i>020 7691 7638</li>
              <li class="hidden-micro"><i class="fa fa-envelope"></i><a href="mailto:enquiries@freshstartpsychotherapy.co.uk">enquiries@freshstartpsychotherapy.co.uk</a></li>
            </ul>
          </div>

          <div class="contact">
            <form action="contactsubmission" enctype="multipart/form-data" method="POST" name="contactForm">
              @csrf
              <p class="full-on-mobile">
                <label for="">First Name</label>
                <input type="text" name="first_name">
              </p class="full-on-mobile">
              <p class="full-on-mobile">
                <label for="">Last Name</label>
                <input type="text" name="last_name">
              </p>
              <p class="full-on-mobile">
                <label for="">Email</label>
                <input type="text" name="email">
              </p>
              <p class="full-on-mobile">
                <label for="">Telephone</label>
                <input type="text" name="phone">
              </p>
              <p class="full">
                <label for="">Are you a client seeking psychotherapy/counselling or a therapist looking to work with clients?</label>
                <select class="form-control" id="clientortherapist" name="clientortherapist">
                  <option>Client</option>
                  <option>Therpaist</option>
                </select>
              </p>
              <p class="full">
                <label for="message">Message</label>
                <textarea class="form-control" id="message" name="message" rows="5"></textarea>
              </p>
              <p class="full">
                <button class="btn-primary" type="submit">Submit</button>
              </p>
            </form>
          </div>

        </div>

</div>


@endsection