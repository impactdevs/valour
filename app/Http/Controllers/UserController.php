<?php

namespace App\Http\Controllers;

use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\Added;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();

        return response()->json([
            'message' => 'users retrieved successfully',
            'data' => $users
        ], 200);
    }

    public function add_user(Request $request)
    {
        try {
            $user = new User();

            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = bcrypt($request->password);

            // Send email to user
            Mail::to($user->email)->send(new Added($user, $request->password));


            $user->save();

            return response()->json(['data' => $user, 'message' => 'User created successfully'], 201);
        } catch (Exception $e) {
            return response()->json(['message' => 'User creation failed'.$e->getMessage()], 409);
        }
    }
}
