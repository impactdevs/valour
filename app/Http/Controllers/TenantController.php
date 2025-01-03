<?php

namespace App\Http\Controllers;

use App\Models\Tenant;
use App\Models\User;
use App\Models\VerificationCode;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use App\Mail\VerifyEmail;

class TenantController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'tenant_name' => ['required', 'string', 'max:255'],
            'admin_email' => 'required|email',
            'admin_password' => 'required'
        ]);

        DB::beginTransaction();

        try {
            // Create tenant
            $tenant = Tenant::create(['name' => $request->tenant_name]);

            // Create admin user for the tenant
            $user = User::create([
                'name' => $request->admin_name,
                'email' => $request->admin_email,
                'password' => Hash::make($request->admin_password),
                'tenant_id' => $tenant->id,
                'role' => 'admin', // Set the role explicitly to 'admin'
            ]);

            // Generate and save verification code
            $code = rand(100000, 999999);
            VerificationCode::create([
                'email' => $user->email,
                'code' => $code,
            ]);


            //send email to the user
            Mail::to($user->email)->send(new VerifyEmail($code, $user->name));

            DB::commit();

            return response()->json([
                'message' => 'Tenant and admin user created successfully',
                'tenant' => $tenant,
                'admin_user' => $user,
            ], 201);
        } catch (\Exception $e) {
            DB::rollBack();

            return response()->json([
                'message' => 'Failed to create tenant and admin user',
                'error' => $e->getMessage(),
            ], 500);
        }
    }
}
