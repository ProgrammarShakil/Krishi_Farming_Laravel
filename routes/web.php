<?php

use App\Http\Controllers\JobApplicationController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('frontend.pages.index');
})->name('frontend.pages.index');

// ADMIN DASHBOARD
Route::get('/dashboard', function () {
    return view('backend.admin-dashboard.pages.index');
})->middleware(['auth', 'verified'])->name('admin.dashboard');

Route::middleware('auth')->group(function () {
    // PROFILE 
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // JOB APPLICATION 
    Route::get('/job-applications/apply', [JobApplicationController::class, 'create'])->name('job-applications.create');
    Route::post('/job-applications', [JobApplicationController::class, 'store'])->name('job-applications.store');
});



require __DIR__ . '/auth.php';
