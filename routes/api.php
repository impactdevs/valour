<?php
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DeliveryController;
use App\Http\Controllers\DemoController;
use App\Http\Controllers\MaintenanceController;
use App\Http\Controllers\MeetingController;
use App\Http\Controllers\TenantController;
use App\Http\Controllers\VisitController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\Auth\LoginController;
use App\Http\Controllers\MappingController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RoutePlanController;
use App\Http\Controllers\SaleController;
use App\Http\Controllers\TargetMetricController;
use App\Http\Controllers\TargetController;
use App\Http\Controllers\UserController;

Route::controller(LoginController::class)->group(function () {
    Route::post('login', 'authenticate');
    Route::post('register', 'register');
    Route::post('login-by-google', 'loginByGoogle');
});


//tenant routes
Route::post('add-tenant', [TenantController::class, 'store']);

Route::post('profile/verify-email', [LoginController::class, 'verifyEmail']);
Route::post('profile/verify-password-reset-email', [LoginController::class, 'verifyPasswordResetEmail']);
Route::post('profile/resend-verification-code', [LoginController::class, 'resendVerificationCode']);
Route::post('profile/reset-password-code', [LoginController::class, 'resetPasswordCode']);
Route::post('profile/reset-password', [LoginController::class, 'resetPassword']);

Route::middleware('auth:sanctum')->group(function () {

    Route::post('logout', [LoginController::class, 'logout']);

    Route::get('profile', [LoginController::class, 'profile']);

    Route::delete('delete-profile', [LoginController::class, 'deleteUserAccount']);

    Route::get('/mappings', [MappingController::class, 'index']);
    Route::post('/mappings', [MappingController::class, 'store']);

    Route::get('/contacts', [MappingController::class, 'contacts']);

    //send email
    Route::post('/send-email', [ContactController::class, 'sendEmail']);

    Route::get('/route-plans', [RoutePlanController::class, 'index']);
    Route::post('/route-plans', [RoutePlanController::class, 'store']);

    Route::get('/sales', [SaleController::class, 'index']);
    Route::post('/sales', [SaleController::class, 'store']);

    Route::get('/products', [ProductController::class, 'index']);
    Route::post('/products', [ProductController::class, 'store']);
    Route::get('/get-coffee-machines', [ProductController::class, 'getCoffeeMachines']);
    Route::get('/get-coffee-products', [ProductController::class, 'getCoffeeProducts']);
    Route::put('/products/{product}', [ProductController::class, 'update']);
    Route::delete('/products/{product}', [ProductController::class, 'delete']);
    Route::put('/update-quantity/{product}', [ProductController::class, 'updateQuantity']);
    Route::get('/product-summary', [ProductController::class, 'statistics']);

    Route::get('/dashboard-counter', [DashboardController::class, 'index']);
    Route::get('/visits', [VisitController::class, 'index']);
    Route::post('/visits', [VisitController::class, 'store']);

    Route::get('/deliveries', [DeliveryController::class, 'index']);

    Route::get('/appointments', [AppointmentController::class, 'index']);

    Route::post('/add-appointment', [AppointmentController::class, 'store']);

    Route::put('/update-appointment/{appointment}', [AppointmentController::class, 'update']);

    Route::delete('/delete-appointment/{appointment}', [AppointmentController::class, 'destroy']);

    Route::get('/meetings', [MeetingController::class, 'index']);

    Route::get('/maintenances', [MaintenanceController::class, 'index']);

    Route::get('/demos', [DemoController::class, 'index']);

    Route::post('/add-target-metrics', [TargetMetricController::class, 'store']);
    Route::get('/target-metrics', [TargetMetricController::class, 'index']);

    Route::get('/targets', [TargetController::class, 'showAllTargets']);

    Route::get('/user-with-targets', [TargetController::class, 'getUsersWithTarget']);

    Route::post('/assign-targets', [TargetController::class, 'assignTargets']);

    Route::get('users', [UserController::class, 'index']);

    Route::post('add-user', [UserController::class, 'add_user']);

    Route::post('delete-user', [UserController::class, 'delete_user']);

    Route::post('reactivate-user', [UserController::class, 'reactivate_user']);
});
