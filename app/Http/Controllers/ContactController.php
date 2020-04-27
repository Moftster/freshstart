<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// Import Contact model
Use App\Contact;

class ContactController extends Controller
{
    public function submitContactForm(Request $req)
    {
        $req->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'clientortherapist' => 'required',
            'message' => 'required'
        ]);

        $contact = new Contact;

        $contact->firstname = $req->first_name;
        $contact->lastname = $req->last_name;
        $contact->email = $req->email;
        $contact->telephone = $req->phone;
        $contact->clientortherapist = $req->clientortherapist;
        $contact->message = $req->message;

        $contact->save();
            return redirect()
            ->back()
            ->withInput()
            ->with('success', 'You message has been succesfully sent. We will be in touch shortly.');
    }
}
