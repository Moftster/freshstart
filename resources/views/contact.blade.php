@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="brand page-header">Contact Us</h1>

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
            <form action="">
              <p class="full-on-mobile">
                <label for="">First Name</label>
                <input type="text" name="first-name">
              </p class="full-on-mobile">
              <p class="full-on-mobile">
                <label for="">Last Name</label>
                <input type="text" name="last-name">
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
                <select class="form-control" id="exampleFormControlSelect1">
                  <option>Client</option>
                  <option>Therpaist</option>
                </select>
              </p>
              <p class="full">
                <label for="message">Message</label>
                <textarea class="form-control" id="message" rows="5"></textarea>
              </p>
              <p class="full">
                <button class="btn-primary">Submit</button>
              </p>
            </form>
          </div>


                {{-- <form>
                  <div class="form-item">
                    <label for="">Name</label>
                    <input type="text" class="" id="">
                  </div>
                  <div class="form-item">
                    <label for="">Email address</label>
                    <input type="email" class="" id="" placeholder="name@example.com">
                  </div>
                  <div class="form-item">
                    <label for="exampleFormControlSelect1">Are you a client seeking psychotherapy/counselling or a therapist looking to work with clients?</label>
                    <select class="form-control" id="exampleFormControlSelect1">
                      <option>Client</option>
                      <option>Therpaist</option>
                    </select>
                  </div>
                  <div class="form-item">
                    <label for="exampleFormControlTextarea1">Example textarea</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                  </div>
                </form>                 --}}
        </div>

</div>


@endsection