<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminProfileController;
use App\Http\Controllers\Admin\AdminProfileInformationController;
use App\Http\Controllers\Admin\AdminAuthenticatedSessionController;


Route::group(['prefix'=> 'admin','middleware' => config('fortify.middleware', ['web'])], function () {
    $enableViews = config('fortify.views', true);

    // Authentication...
    if ($enableViews) {
        Route::get('/login', [AdminAuthenticatedSessionController::class, 'loginForm'])
            ->middleware(['guest:'.config('fortify.guard')])
            ->name('admin.login');
    }

    $limiter = config('fortify.limiters.login');
    $twoFactorLimiter = config('fortify.limiters.two-factor');
    $verificationLimiter = config('fortify.limiters.verification', '6,1');

    Route::post('/login', [AdminAuthenticatedSessionController::class, 'store'])
        ->middleware(array_filter([
            'guest:'.config('fortify.guard'),
            $limiter ? 'throttle:'.$limiter : null,
        ]));

    Route::post('/logout', [AdminAuthenticatedSessionController::class, 'destroy'])
        ->name('admin.logout');




});


Route::middleware(['auth:sanctum,back', 'verified'])->get('/admin/dashboard', function () {
    return view('admin_dashboard');
})->name('admin.dashboard');
