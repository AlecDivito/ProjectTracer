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
        // Get all projects
        $ids = $contact->getContactIds(Auth::id());
        $values = [];
        $values['count'] = count($ids) - 1; // 5
        $values['first'] = $ids[0]; // 1
        $values['last']  = $ids[$values['count']]; // 70
        if ($ids[0] === $contact->contactId) {
            $values['next'] = $ids[1];
            $values['pervious'] = $ids[0];
            $values['currentCount'] = 0;

        } elseif ($ids[$values['count']] === $contact->contactId) {
            $values['next'] = $ids[$values['count']];
            $values['pervious'] = $ids[$values['count'] - 1];
            $values['currentCount'] = $values['count'];
        } else {
            for ($i=1; $i < $values['count']; $i++) {
                if ($contact->contactId === $ids[$i]) {
                    $values['next'] = $ids[$i + 1];
                    $values['pervious'] = $ids[$i - 1];
                    $values['currentCount'] = $i;
                    break;
                }
            }
        }
        return view('projectTracker.contact',['contact'=>$contact, 'values'=>$values]);
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
