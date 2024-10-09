<?php

use App\Http\Controllers\Admin\TeamController;
use App\Http\Controllers\Admin\InternController;
use App\Http\Controllers\Admin\JobCircularController;
use App\Http\Controllers\Admin\InvestmentProposalController;
use App\Http\Controllers\JobApplicantController;
use App\Http\Controllers\InvestApplicantController;
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
Route::get('/intern-applications/apply', [InternApplicationController::class, 'create'])->name('frontend.pages.intern-applications.create');
Route::post('/intern-applications', [InternApplicationController::class, 'store'])->name('frontend.pages.intern-applications.store');

// Business Proposal
Route::get('/business-proposal/apply', [BusinessProposalController::class, 'create'])->name('frontend.pages.business-proposal.create');
Route::post('/business-proposal', [BusinessProposalController::class, 'store'])->name('frontend.pages.business-proposal.store');

// Brand Franchise Proposal 
Route::get('/brand-franchise-proposal/apply', [BrandFranchiseProposalController::class, 'create'])->name('frontend.pages.brand-franchise-proposal.create');
Route::post('/brand-franchise-proposal', [BrandFranchiseProposalController::class, 'store'])->name('frontend.pages.brand-franchise-proposal.store');

// Job Applicants
Route::get('/job-application', [JobApplicantController::class, 'index'])->name('frontend.pages.job.circular.index');
Route::get('job-application/form/{id}', [JobApplicantController::class, 'create'])->name('frontend.pages.job.applicants.create');
Route::post('job-application/apply', [JobApplicantController::class, 'store'])->name('frontend.pages.job.applicants.store');

// Investment Applicants
Route::get('/investment-application', [InvestApplicantController::class, 'index'])->name('frontend.pages.investment.proposal.index');
Route::get('investment-application/form/{id}', [InvestApplicantController::class, 'create'])->name('frontend.pages.investment.applicants.create');
Route::post('investment-application/apply', [InvestApplicantController::class, 'store'])->name('frontend.pages.investment.applicants.store');



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

    Route::get('/admin/intern/application-list', [InternController::class, 'index'])->name('admin.intern.index');
    Route::delete('/admin/intern/application-list/{id}', [InternController::class, 'destroy'])->name('admin.intern.destroy');

    // Job Circular
    Route::get('/admin/job-circular-create', [JobCircularController::class, 'create'])->name('admin.job.circular.create');
    Route::post('/admin/job-circular-store', [JobCircularController::class, 'store'])->name('admin.job.circular.store');
    Route::get('/admin/job-circular-list', [JobCircularController::class, 'index'])->name('admin.job.circular.index');
    Route::get('/admin/job-circular-edit/{id}', [JobCircularController::class, 'edit'])->name('admin.job.circular.edit');
    Route::put('/admin/job-circular-update/{id}', [JobCircularController::class, 'update'])->name('admin.job.circular.update');
    Route::delete('/admin/job-circular-delete/{id}', [JobCircularController::class, 'destroy'])->name('admin.job.circular.destroy');

    // Job Applicants 
    Route::get('/admin/job-applicants', [JobCircularController::class, 'applicants'])->name('admin.job.applicants.index');
    Route::delete('admin/job-applicants/{id}', [JobCircularController::class, 'applicant_destroy'])->name('admin.job-applicants.destroy');

    // Invesment Proposal
    Route::get('/admin/investment-proposal-create', [InvestmentProposalController::class, 'create'])->name('admin.investment.proposal.create');
    Route::post('/admin/investment-proposal-store', [InvestmentProposalController::class, 'store'])->name('admin.investment.proposal.store');
    Route::get('/admin/investment-proposal-list', [InvestmentProposalController::class, 'index'])->name('admin.investment.proposal.index');
    Route::get('/admin/investment-proposal-edit/{id}', [InvestmentProposalController::class, 'edit'])->name('admin.investment.proposal.edit');
    Route::put('/admin/investment-proposal-update/{id}', [InvestmentProposalController::class, 'update'])->name('admin.investment.proposal.update');
    Route::delete('/admin/investment-proposal-delete/{id}', [InvestmentProposalController::class, 'destroy'])->name('admin.investment.proposal.destroy');

    // Investment Applicants 
    Route::get('/admin/investment-applicants', [InvestmentProposalController::class, 'investments'])->name('admin.investment.applicants.index');
    Route::delete('admin/investment-applicants/{id}', [InvestmentProposalController::class, 'investment_destroy'])->name('admin.investment-applicants.destroy');

});



require __DIR__ . '/auth.php';
