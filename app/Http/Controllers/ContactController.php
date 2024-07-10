<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Mail\ContactMail;


class ContactController extends Controller
{
    //
        public function sendEmail (Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        $details = [
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message,
        ];

        $recipientEmail = 'info@impactoutsourcing.co.ug'; 

        Mail::to($recipientEmail)
            ->send(new ContactMail($details, $request->email));

        return back()->with('success', 'Thank you for contacting us, your message has been received.');
    }


}
