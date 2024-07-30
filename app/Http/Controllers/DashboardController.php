<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Maintenance;
use App\Models\Sale;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class DashboardController extends Controller
{
    public function index()
    {
        //count the number of appointments with appointment_date_time that has not passed that belong to the current logged in user, if its an admin, count all appointments
        $appointments = auth()->user()->role == 'admin' ? Appointment::where('appointment_date_time', '>=', Carbon::now())->count() : Appointment::where('appointment_date_time', '>=', Carbon::now())->where('user_id', auth()->id())->count();
        //count the number of sales that belong to the current logged in user, if its an admin, count all sales
        $sales = auth()->user()->role == 'admin' ? Sale::count() : Sale::where('user_id', auth()->id())->count();

        //count the number of maintenances that belong to the current logged in user, if its an admin, count all maintenances
        $maintenances = auth()->user()->role == 'admin' ? Maintenance::count() : Maintenance::where('user_id', auth()->id())->count();

        return response()->json([
            'upcoming_appointments' => $appointments,
            'total_sales' => $sales,
            'total_maintenances' => $maintenances
        ]);
    }
}
