<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class BasicContactController extends Controller
{
    public function newContact(Request $request)
    {
        $contact = new Contact();
        $contact->userId = Auth::id();
        $contact->save();
        return redirect("/contact/{$contact->contactId}");
    }

    public function contact(Request $request, Contact $contact)
    {
        return view('projectTracker.contact')->with('contact', $contact);
    }

    public function saveContact(Request $request, Contact $contact)
    {
        $contact->lastName   = isset($request['lastName'])   ? $request['lastName'] : null;
        $contact->firstName  = isset($request['firstName'])  ? $request['firstName'] : null;
        $contact->middleName = isset($request['middleName']) ? $request['middleName'] : null;
        $contact->company    = isset($request['company'])    ? $request['company'] : null;
        $contact->address1   = isset($request['address1'])   ? $request['address1'] : null;
        $contact->address2   = isset($request['address2'])   ? $request['address2'] : null;
        $contact->city       = isset($request['city'])       ? $request['city'] : null;
        $contact->region     = isset($request['region'])     ? $request['region'] : null;
        $contact->postalCode = isset($request['postalCode']) ? $request['postalCode'] : null;
        $contact->workPhone  = isset($request['workPhone'])  ? $request['workPhone'] : null;
        $contact->homePhone  = isset($request['homePhone'])  ? $request['homePhone'] : null;
        $contact->cellPhone  = isset($request['cellPhone'])  ? $request['cellPhone'] : null;
        $contact->email      = isset($request['email'])      ? $request['email'] : null;
        $contact->save();
        return redirect("/contact/{$contact->contactId}");
    }

    public function deleteContact(Request $request, Contact $contact)
    {
        $contact->delete();
        return redirect('/home');
    }
}
