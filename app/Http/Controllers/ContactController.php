<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Log;


class ContactController extends Controller
{
    //
        public function sendEmail(Request $request)
    {
        
        $validated = $request->validate([
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
    
        $recipientEmail = 'dev.david1300@gmail.com';
       // $senderEmail = $request->email;
    
        try {
            Mail::to($recipientEmail)
                ->send(new ContactMail($details, $request->email));
            
            return back()->with('success', 'Thank you for contacting us, your message has been received.');
        } catch (\Exception $e) {
            // Log the error for debugging
            Log::error('Failed to send email: ' . $e->getMessage());
 
            return back()->with('error', 'Failed to send message. Please try again later.');
        }

        
    }


}
