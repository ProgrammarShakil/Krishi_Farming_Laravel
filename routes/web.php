<?php

use App\Http\Controllers\Admin\TeamController;
use App\Http\Controllers\Admin\InternController;
use App\Http\Controllers\Admin\JobCircularController;
use App\Http\Controllers\JobApplicantController;
use App\Http\Controllers\InternApplicationController;
use App\Http\Controllers\BusinessProposalController;
use App\Http\Controllers\BrandFranchiseProposalController;
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

// FRONTEND ROUTES 
Route::get('/', function () {
    return view('frontend.pages.index');
})->name('frontend.pages.index');

Route::get('/team', function () {
    return view('frontend.pages.team.list');
})->name('frontend.pages.team');


// Intern Application 
Route::get('/intern-applications/apply', [InternApplicationController::class, 'create'])->name('intern-applications.create');
Route::post('/intern-applications', [InternApplicationController::class, 'store'])->name('intern-applications.store');

// Business Proposal
Route::get('/business-proposal/apply', [BusinessProposalController::class, 'create'])->name('business-proposal.create');
Route::post('/business-proposal', [BusinessProposalController::class, 'store'])->name('business-proposal.store');

// Brand Franchise Proposal 
Route::get('/brand-franchise-proposal/apply', [BrandFranchiseProposalController::class, 'create'])->name('brand-franchise-proposal.create');
Route::post('/brand-franchise-proposal', [BrandFranchiseProposalController::class, 'store'])->name('brand-franchise-proposal.store');

// Job Application
Route::get('/job-application/{id}', [JobApplicantController::class, 'index'])->name('job.circular.index');
Route::post('/job-application/apply', [JobApplicantController::class, 'store'])->name('job.applicants.store');

// ADMIN DASHBOARD
Route::get('/dashboard', function () {
    return view('backend.admin-dashboard.pages.index');
})->middleware(['auth', 'verified'])->name('admin.dashboard');

Route::middleware('auth')->group(function () {
    // Profile 
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Team 
    Route::get('/admin/teams', [TeamController::class, 'index'])->name('admin.teams.list');

    Route::get('/admin/teams/create', [TeamController::class, 'create'])->name('admin.teams.create');
    Route::post('/admin/teams', [TeamController::class, 'store'])->name('admin.teams.store');

    Route::get('/admin/teams/{id}/edit', [TeamController::class, 'edit'])->name('admin.teams.edit');
    Route::put('/admin/teams/{id}', [TeamController::class, 'update'])->name('admin.teams.update');

    Route::delete('/admin/teams/{id}', [TeamController::class, 'destroy'])->name('admin.teams.destroy');


    //Intern Application

    Route::get('/intern/application-list', [InternController::class, 'index'])->name('admin.intern.index');
    Route::delete('/intern/application-list/{id}', [InternController::class, 'destroy'])->name('admin.intern.destroy');

    // Job Circular
    Route::get('/job-circular-create', [JobCircularController::class, 'create'])->name('admin.job.circular.create');
    Route::post('/job-circular-store', [JobCircularController::class, 'store'])->name('admin.job.circular.store');
    Route::get('/job-circular-list', [JobCircularController::class, 'index'])->name('admin.job.circular.index');
    Route::get('/job-circular-edit/{id}', [JobCircularController::class, 'edit'])->name('admin.job.circular.edit');
    Route::put('/job-circular-update/{id}', [JobCircularController::class, 'update'])->name('admin.job.circular.update');
    Route::delete('/job-circular-delete/{id}', [JobCircularController::class, 'destroy'])->name('admin.job.circular.destroy');
});



require __DIR__ . '/auth.php';
