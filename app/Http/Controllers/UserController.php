<?php

namespace App\Http\Controllers;

use App\Mail\Reactivated;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\Added;

class UserController extends Controller
{
    public function index()
    {
        //get the tenant_id of the logged in user
        $tenant_id = auth()->user()->tenant_id;
        //include deleted users
        $users = User::withTrashed()->where('tenant_id', $tenant_id)->get();

        return response()->json([
            'message' => 'users retrieved successfully',
            'data' => $users
        ], 200);
    }

    public function add_user(Request $request)
    {
        try {
            // email must be unque, use validation
            $request->validate([
                'name' => 'required',
                'email' => 'required|email|unique:users',
                'password' => 'required'
            ]);
            //get the tenant_id of the logged in user
            $tenant_id = auth()->user()->tenant_id;
            $user = new User();

            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = bcrypt($request->password);
            $user->tenant_id = $tenant_id;

            // Send email to user
            Mail::to($user->email)->send(new Added($user, $request->password));


            $user->save();

            return response()->json(['data' => $user, 'message' => 'User created successfully'], 201);
        } catch (Exception $e) {
            return response()->json(['message' => 'User creation failed:' . $e->getMessage()], 409);
        }
    }


    public function delete_user(Request $request)
    {
        // implement delete user
        $delete = User::where('email', $request->email)->delete();

        if ($delete) {
            return response()->json(['success' => true, 'message' => 'User deleted successfully'], 200);
        } else {
            // user not found
            return response()->json(['success' => false, 'message' => 'User not found'], 404);
        }
    }

    // reactivate user
    public function reactivate_user(Request $request)
    {
        // implement reactivate user
        $user = User::withTrashed() // Include soft deleted users
            ->where('email', $request->email)
            ->first();

        if ($user) {
            $user->restore(); // Restore the soft deleted user
            // send email to user
            Mail::to($user->email)->send(new Reactivated($user->name));
            return response()->json(['success' => true, 'message' => 'User reactivated successfully'], 200);
        } else {
            // user not found
            return response()->json(['success' => false, 'message' => 'User not found'], 404);
        }
    }


}
