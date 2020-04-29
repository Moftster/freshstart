@extends('layouts.app')

@section('title', 'About')

@section('content')
<div class="container">
    <h1 class="page-header">About FreshStart Psychotherapy</h1>

    <div class="about-page">
        <div class="about-banner">
            <img class="img-itself" src="{{ asset('img/sunrise-cut2.jpg') }}" alt="">
        </div>
    
    <div class="about-text-1">
        <p>FreshStart Psychotherapy is a Community Interest Company (C.I.C.) and our purpose is two-fold:</p>
            
        <ul> 
            <li>For clients we provide psychotherapy and counselling services on an open ended basis. This means that therapy is not time limited and can continue for as long as you, the client, want.  It ensures that issues can be addressed in your own time and not within a set formula.
            For example it may be that you simply feel you need the emotional support of a therapist to help you over a difficult period in your life but do not know how long you will need that emotional support. Alternatively, you may have a specific issue that you want to address such panic attacks, depression, addiction issues etc.  
            FS meets all those needs by matching you with one of our volunteer therapists.</li>
            <li>
                For therapists it is a requirement of the various professional bodies  (e.g BACP and UKCP)  that every therapist undertakes a minimum number of client contact hours prior to registration or accreditation. 
By working with clients through FS, therapists are able to work towards registration and accreditation. All our volunteer therapists have either completed or are in the final stages of their academic training and need to complete their “client hours”. 
The FS structure ensures that the therapist receives expert supervision so that their work with each client is in the very best interests of the client.
            </li>
        <ul>
    </div>
    <div class="about-image-1">
        <img class="img-itself" src="{{ asset('img/field2.jpg') }}" alt="">
    </div>
    <div class="quote-text">
        <h2 class=""><i>"Our wounds are often the openings to the best and most beautiful part of us" - David Richo</i></h2>
    </div>
    <div class="about-text-2">
        <p>When a client makes contact with the service they are invited to come for an assessment session with a UKCP registered psychotherapist.  Based on an individual's needs and availability, they will then be carefully matched and referred to a therapist who seems the most suitable for working with that particular client.</p>
        <p><strong>Unwaged clients and students pay £12.00 per session</strong> and <strong>earning clients pay £12.00-£25.00 per session</strong> depending on what they can afford.</p>
        <p><strong>For a limited number of clients in exceptional need we may be able to offer fees of £5 per session</strong>. We may have a waiting list for low fee paying clients. <strong>When clients are earning incomes above £25,000, we refer them on to ex-FreshStart volunteers who have completed their training and who are willing/able to take comparatively low-cost private referrals.  In such cases, clients generally pay fees of between £30-£60</strong>.</p>
    </div>

    <div class="quote-text">
        <h2 class=""><i>"Think of your head as an unsafe neighbourhood, don't go there alone." - David Richo</i></h2>
    </div>

    <div class="about-image-2">
        <img class="img-itself" src="{{ asset('img/field2.jpg') }}" alt="">
    </div>

    <div class="about-text-2">
        <p>When a client makes contact with the service they are invited to come for an assessment session with a UKCP registered psychotherapist.  Based on an individual's needs and availability, they will then be carefully matched and referred to a therapist who seems the most suitable for working with that particular client.</p>
        <p><strong>Unwaged clients and students pay £12.00 per session</strong> and <strong>earning clients pay £12.00-£25.00 per session</strong> depending on what they can afford.</p>
        <p><strong>For a limited number of clients in exceptional need we may be able to offer fees of £5 per session</strong>. We may have a waiting list for low fee paying clients. <strong>When clients are earning incomes above £25,000, we refer them on to ex-FreshStart volunteers who have completed their training and who are willing/able to take comparatively low-cost private referrals.  In such cases, clients generally pay fees of between £30-£60</strong>.</p>
    </div>


</div>
</div>


@endsection