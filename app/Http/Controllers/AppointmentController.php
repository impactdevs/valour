<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Support\Facades\Auth;

class AppointmentController extends Controller
{
    public function index()
    {
        // Get the logged-in user
        $user = Auth::user();

        //check if the user is an admin
        if ($user->role == 'admin') {
            //get every appointment and process it
            $appointments = Appointment::with([
                'mapping' => function ($query) {
                    $query->select('id', 'business_name', 'business_email_contact', 'business_telephone_contact'); // Assuming 'business_id' is the foreign key in the 'visits' table
                }
            ])->get();
        } else {
            // Retrieve maintenances with user, visit, and business information
            $appointments = $user->appointments()
                ->with([
                    'mapping' => function ($query) {
                        $query->select('id', 'business_name', 'business_email_contact', 'business_telephone_contact'); // Assuming 'business_id' is the foreign key in the 'visits' table
                    }
                ])->get();
        }
        return response()->json(
            [
                'message' => 'successfully fetched all appointments',
                'data' => $appointments
            ]
            ,
            200
        );
    }

    public function store()
    {
        $user = Auth::user();
        $data = request()->all();
        //validate the request
        request()->validate([
            'mapping_id' => 'required|exists:mappings,id',
            'appointment_date_time' => 'required',
            'appointment_purpose' => 'required'
        ]);
        $appointment = new Appointment();
        $appointment->user_id = $user->id;
        $appointment->mapping_id = $data['mapping_id'];
        $appointment->appointment_date_time = $data['appointment_date_time'];
        $appointment->appointment_purpose = $data['appointment_purpose'];
        $appointment->save();
        return response()->json(
            [
                'message' => 'successfully created an appointment',
                'data' => $appointment
            ]
            ,
            201
        );
    }
}
