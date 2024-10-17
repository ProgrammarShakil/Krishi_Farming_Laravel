<?php

use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Admin\TeamController;
use App\Http\Controllers\Admin\InternController;
use App\Http\Controllers\Admin\JobCircularController;
use App\Http\Controllers\Admin\BrandFranchiseController;
use App\Http\Controllers\Admin\BusinessProposalsController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\InvestmentProposalController;
use App\Http\Controllers\Admin\PageController;
use App\Http\Controllers\JobApplicantController;
use App\Http\Controllers\InvestApplicantController;
use App\Http\Controllers\InternApplicationController;
use App\Http\Controllers\BusinessProposalController;
use App\Http\Controllers\BrandFranchiseProposalController;
use App\Http\Controllers\ContactFormController;
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

// ****************** FRONTEND ROUTES ******************* // 
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


// Manage Blog 
Route::get('/blogs', [PageController::class, 'blog_index'])->name('frontend.pages.blog.index');


// Pages Show
Route::get('pages/{slug}', [PageController::class, 'showFrontend'])->name('frontend.pages.show');


// Manage Contact Form
Route::get('/contact/form', [ContactFormController::class, 'form'])->name('frontend.contact.form');
Route::post('/contact', [ContactFormController::class, 'store'])->name('frontend.contact.store');



// ************** ADMIN DASHBOARD ***************** //
Route::get('admin/dashboard', [AdminDashboardController::class, 'index'])->middleware(['auth', 'verified'])->name('admin.dashboard');

Route::middleware('auth')->group(function () {

    // Profile 
    Route::get('/admin/profile', [ProfileController::class, 'edit'])->name('admin.profile.edit');
    Route::patch('/admin/profile', [ProfileController::class, 'update'])->name('admin.profile.update');
    // Route::delete('/admin/profile', [ProfileController::class, 'destroy'])->name('admin.profile.destroy');


    // Team 
    Route::get('/admin/teams', [TeamController::class, 'index'])->name('admin.teams.list');
    Route::get('/admin/teams/create', [TeamController::class, 'create'])->name('admin.teams.create');
    Route::post('/admin/teams', [TeamController::class, 'store'])->name('admin.teams.store');
    Route::get('/admin/teams/{id}/edit', [TeamController::class, 'edit'])->name('admin.teams.edit');
    Route::put('/admin/teams/{id}', [TeamController::class, 'update'])->name('admin.teams.update');
    Route::delete('/admin/teams/{id}', [TeamController::class, 'destroy'])->name('admin.teams.destroy');


    //Intern Application
    Route::get('/admin/intern/application-list', [InternController::class, 'index'])->name('admin.intern.index');
    Route::get('/admin/intern/{id}', [InternController::class, 'show'])->name('admin.intern.show');
    Route::delete('/admin/intern/application-list/{id}', [InternController::class, 'destroy'])->name('admin.intern.destroy');
    // Intern Application Export 
    Route::get('/admin/intern/application/export', [InternController::class, 'intern_application_export'])->name('admin.intern.export');
    // Intern Application Single Download 
    Route::get('admin/intern-application/{id}/download', [InternController::class, 'intern_application_download'])->name('admin.intern.download');


    // Job Circular
    Route::get('/admin/job-circular-create', [JobCircularController::class, 'create'])->name('admin.job.circular.create');
    Route::post('/admin/job-circular-store', [JobCircularController::class, 'store'])->name('admin.job.circular.store');
    Route::get('/admin/job-circular-list', [JobCircularController::class, 'index'])->name('admin.job.circular.index');
    Route::get('/admin/job-circular-show/{id}', [JobCircularController::class, 'show'])->name('admin.job.circular.show');
    Route::get('/admin/job-circular-edit/{id}', [JobCircularController::class, 'edit'])->name('admin.job.circular.edit');
    Route::put('/admin/job-circular-update/{id}', [JobCircularController::class, 'update'])->name('admin.job.circular.update');
    Route::delete('/admin/job-circular-delete/{id}', [JobCircularController::class, 'destroy'])->name('admin.job.circular.destroy');
    // Job Circular Export 
    Route::get('/admin/job-circular/export', [JobCircularController::class, 'job_circular_export'])->name('admin.job.circular.export');


    // Job Applicants 
    Route::get('/admin/job-applicants', [JobCircularController::class, 'applicants'])->name('admin.job.applicants.index');
    Route::get('/admin/job-applicants-show/{id}', [JobCircularController::class, 'applicants_show'])->name('admin.job-applicants.show');
    Route::delete('admin/job-applicants/{id}', [JobCircularController::class, 'applicant_destroy'])->name('admin.job-applicants.destroy');
    // Job Applicants Export 
    Route::get('/admin/job-applicants/export', [JobCircularController::class, 'job_applicants_export'])->name('admin.job.applicants.export');
    // Job Applicants Single Download 
    Route::get('admin/job-circular/{id}/download', [JobCircularController::class, 'job_applicant_download'])->name('admin.job.applicants.download');


    // Invesment Proposal
    Route::get('/admin/investment-proposal-create', [InvestmentProposalController::class, 'create'])->name('admin.investment.proposal.create');
    Route::post('/admin/investment-proposal-store', [InvestmentProposalController::class, 'store'])->name('admin.investment.proposal.store');
    Route::get('/admin/investment-proposal-list', [InvestmentProposalController::class, 'index'])->name('admin.investment.proposal.index');
    Route::get('/admin/investment-proposal-edit/{id}', [InvestmentProposalController::class, 'edit'])->name('admin.investment.proposal.edit');
    Route::put('/admin/investment-proposal-update/{id}', [InvestmentProposalController::class, 'update'])->name('admin.investment.proposal.update');
    Route::delete('/admin/investment-proposal-delete/{id}', [InvestmentProposalController::class, 'destroy'])->name('admin.investment.proposal.destroy');
    // Investemnt Proposal Export 
    Route::get('/admin/investment-proposal/export', [InvestmentProposalController::class, 'investment_proposal_export'])->name('admin.investment.proposal.export');


    // Investment Applicants 
    Route::get('/admin/investment-applicants', [InvestmentProposalController::class, 'investment_applicants'])->name('admin.investment.applicants.index');
    Route::get('/admin/investment-applicants-show/{id}', [InvestmentProposalController::class, 'investment_applicants_show'])->name('admin.investment.applicants.show');
    Route::delete('admin/investment-applicants/{id}', [InvestmentProposalController::class, 'investment_applicants_destroy'])->name('admin.investment-applicants.destroy');
    // Investment Applicants Export 
    Route::get('/admin/investment-applicants/export', [InvestmentProposalController::class, 'investment_applicants_export'])->name('admin.investment.applicants.export');
    // Investment Applicants Single Download 
    Route::get('admin/investment-applicants/{id}/download', [InvestmentProposalController::class, 'investment_applicants_download'])->name('admin.investment.applicants.download');


    // Brand Franchise Proposal
    Route::get('/admin/brand-franchise-list', [BrandFranchiseController::class, 'index'])->name('admin.brand.franchise.index');
    Route::get('/admin/brand-franchise-show/{id}', [BrandFranchiseController::class, 'show'])->name('admin.brand.franchise.show');
    Route::delete('/admin/brand-franchise-delete/{id}', [BrandFranchiseController::class, 'destroy'])->name('admin.brand.franchise.destroy');
    // Brand Franchise Export 
    Route::get('/admin/brand-franchise/export', [BrandFranchiseController::class, 'brand_franchise_export'])->name('admin.brand.franchise.export');


    // Business Proposal
    Route::get('/admin/business-proposal-list', [BusinessProposalsController::class, 'index'])->name('admin.busines.proposal.index');
    Route::get('/admin/business-proposal-show/{id}', [BusinessProposalsController::class, 'show'])->name('admin.busines.proposal.show');
    Route::delete('/admin/business-proposal-delete/{id}', [BusinessProposalsController::class, 'destroy'])->name('admin.busines.proposal.destroy');
    // Business Proposal Export 
    Route::get('/admin/business-proposals/export', [BusinessProposalsController::class, 'business_proposal_export'])->name('admin.business-proposals.export');


    // Manage Page 
    Route::get('admin/pages', [PageController::class, 'index'])->name('admin.pages.index');
    Route::get('admin/pages/create', [PageController::class, 'create'])->name('admin.pages.create');
    Route::post('admin/pages', [PageController::class, 'store'])->name('admin.pages.store');
    Route::get('admin/pages/{slug}', [PageController::class, 'show'])->name('admin.pages.show');
    Route::get('admin/pages/{slug}/edit', [PageController::class, 'edit'])->name('admin.pages.edit');
    Route::put('admin/pages/{slug}', [PageController::class, 'update'])->name('admin.pages.update');
    Route::delete('admin/pages/{slug}', [PageController::class, 'destroy'])->name('admin.pages.destroy');


    // Manage Contact
    Route::get('/contacts', [ContactController::class, 'index'])->name('admin.contact.index');
    Route::get('/contacts/{id}', [ContactController::class, 'show'])->name('admin.contact.show');
    Route::delete('/contacts/{id}', [ContactController::class, 'destroy'])->name('admin.contact.destroy');
});



require __DIR__ . '/auth.php';
