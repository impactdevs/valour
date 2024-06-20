<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

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
        $user = new User();

        $user->name = "";
        $user->email = $request->email;
        $user->password = "";

        $user->save();

        return response()->json(['data' => $user, 'message' => 'User created successfully'], 201);
    }
}
