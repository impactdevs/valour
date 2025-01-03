<?php

namespace App\Http\Controllers;

use App\Models\Mapping;
use Illuminate\Http\Request;
use Mail;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Log;


class ContactController extends Controller
{
    //send a single email
    public function sendEmail(Request $request)
    {

        $validated = $request->validate([
            'recipient_id' => 'required|exists:mappings,id',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        //get recipient email and name
        $recipient = Mapping::find($validated['recipient_id']);
        $recipientEmail = $recipient->email;
        $recipientName = $recipient->name;

        $details = [
            'name' => $recipientName,
            'email' => $recipientEmail,
            'subject' => $request->subject,
            'message' => $request->message,
        ];

        $recipientEmail = $request->email;
        // $senderEmail = $request->email;

        try {
            Mail::to($recipientEmail)
                ->send(new ContactMail($details, $recipientEmail));

            return response()->json(['message' => 'Email sent successfully'], 200);
        } catch (\Exception $e) {
            // Log the error for debugging
            Log::error('Failed to send email: ' . $e->getMessage());

            return response()->json(['message' => 'Failed to send email'], 500);
        }
    }

    //send a single email

    //email status i.e clicked, opened, delivered

    //send a single whatsapp message


}
