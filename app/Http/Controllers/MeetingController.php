<?php

namespace App\Http\Controllers;

use App\Models\Meeting;
use Illuminate\Support\Facades\Auth;

class MeetingController extends Controller
{
    public function index()
    {
        // Get the logged-in user
        $user = Auth::user();

        //check if the user is an admin
        if ($user->role == 'admin') {
            //get every Meeting and process it
            $meetings = Meeting::with([
                'visit' => function ($query) {
                    $query->select('id', 'business_id'); // Assuming 'business_id' is the foreign key in the 'visits' table
                }
            ])
                ->with([
                    'visit.visit' => function ($query) {
                        $query->select('id', 'business_name'); // Assuming 'business_name' is the column in the 'mappings' table
                    }
                ])
                ->get();
        } else {
            // Retrieve maintenances with user, visit, and business information
            $meetings = $user->meetings()
                ->with([
                    'visit' => function ($query) {
                        $query->select('id', 'business_id'); // Assuming 'business_id' is the foreign key in the 'visits' table
                    }
                ])
                ->with([
                    'visit.visit' => function ($query) {
                        $query->select('id', 'business_name'); // Assuming 'business_name' is the column in the 'mappings' table
                    }
                ])
                ->get();


        }
        return response()->json(
            [
                'message' => 'successfully fetched all meetings',
                'data' => $meetings
            ]
            ,
            200
        );
    }
}
