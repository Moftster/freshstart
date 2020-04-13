@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="brand page-header">Contact</h1>

        <div class="wrapper">

          <div class="company-info">
            <h3>FreshStartPsychotherapy</h3>
            <ul>
              <li>2 Warwick Cres, Little Venice, London W2 6NE</li>
              <li>020 7691 7638</li>
              <li>enquiries@freshstartpsychotherapy.co.uk</li>
            </ul>
          </div>

          <div class="contact">
            <h3>Contact Us</h3>
            <form action="">
              <p>
                <label for="">First Name</label>
                <input type="text" name="first-name">
              </p>
              <p>
                <label for="">Last Name</label>
                <input type="text" name="last-name">
              </p>
              <p>
                <label for="">Email</label>
                <input type="text" name="email">
              </p>
              <p>
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
                <button>Submit</button>
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