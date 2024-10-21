<?php

use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Admin\AlliesController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\TeamController;
use App\Http\Controllers\Admin\InternController;
use App\Http\Controllers\Admin\JobCircularController;
use App\Http\Controllers\Admin\BrandFranchiseController;
use App\Http\Controllers\Admin\BusinessProposalsController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\FooterController;
use App\Http\Controllers\Admin\InvestmentProposalController;
use App\Http\Controllers\Admin\PageController;
use App\Http\Controllers\Admin\PhotoGalleryController;
use App\Http\Controllers\Admin\PortfolioController;
use App\Http\Controllers\Admin\SegmentController;
use App\Http\Controllers\Admin\VideoStoryController;
use App\Http\Controllers\JobApplicantController;
use App\Http\Controllers\InvestApplicantController;
use App\Http\Controllers\InternApplicationController;
use App\Http\Controllers\BusinessProposalController;
use App\Http\Controllers\BrandFranchiseProposalController;
use App\Http\Controllers\ContactFormController;
use App\Http\Controllers\FrontendBlogController;
use App\Http\Controllers\FrontendPageController;
use App\Http\Controllers\FrontendPhotoGalleryController;
use App\Http\Controllers\FrontendTeamController;
use App\Http\Controllers\FrontendVideoStoryController;
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

// Frontend Page
Route::get('/', [FrontendPageController::class, 'index'])->name('frontend.pages.index');

// Team Page
Route::get('/team', [FrontendTeamController::class, 'index'])->name('frontend.pages.team');

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


// Blog Page
Route::get('/blogs', [FrontendBlogController::class, 'index'])->name('frontend.blog.index');
Route::get('/blogs/{id}', [FrontendBlogController::class, 'details'])->name('frontend.blog.details');

// Video Story
Route::get('/video_story', [FrontendVideoStoryController::class, 'index'])->name('frontend.video_story.index');

// Photo Gallery 
Route::get('/photo_gallery', [FrontendPhotoGalleryController::class, 'index'])->name('frontend.photo_gallery.index');


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
    Route::get('admin/contacts', [ContactController::class, 'index'])->name('admin.contact.index');
    Route::get('admin/contacts/{id}', [ContactController::class, 'show'])->name('admin.contact.show');
    Route::delete('admin/contacts/{id}', [ContactController::class, 'destroy'])->name('admin.contact.destroy');


    // Manage Portfolio
    Route::get('admin/portfolios', [PortfolioController::class, 'index'])->name('admin.portfolios.index');
    Route::get('admin/portfolios/create', [PortfolioController::class, 'create'])->name('admin.portfolios.create');
    Route::post('admin/portfolios', [PortfolioController::class, 'store'])->name('admin.portfolios.store');
    Route::get('admin/portfolios/{id}/edit', [PortfolioController::class, 'edit'])->name('admin.portfolios.edit');
    Route::put('admin/portfolios/{id}', [PortfolioController::class, 'update'])->name('admin.portfolios.update');
    Route::delete('admin/portfolios/{id}', [PortfolioController::class, 'destroy'])->name('admin.portfolios.destroy');


    // Allies Management
    Route::get('admin/allies', [AlliesController::class, 'index'])->name('admin.allies.index');
    Route::get('admin/allies/create', [AlliesController::class, 'create'])->name('admin.allies.create');
    Route::post('admin/allies', [AlliesController::class, 'store'])->name('admin.allies.store');
    Route::get('admin/allies/{id}/edit', [AlliesController::class, 'edit'])->name('admin.allies.edit');
    Route::put('admin/allies/{id}', [AlliesController::class, 'update'])->name('admin.allies.update');
    Route::delete('admin/allies/{id}', [AlliesController::class, 'destroy'])->name('admin.allies.destroy');

    
    // Manage Blog 
    Route::get('admin/blogs', [BlogController::class, 'index'])->name('admin.blogs.index');
    Route::get('admin/blogs/create', [BlogController::class, 'create'])->name('admin.blogs.create');
    Route::post('admin/blogs', [BlogController::class, 'store'])->name('admin.blogs.store');
    Route::get('admin/blogs/{slug}', [BlogController::class, 'show'])->name('admin.blogs.show');
    Route::get('admin/blogs/{slug}/edit', [BlogController::class, 'edit'])->name('admin.blogs.edit');
    Route::put('admin/blogs/{slug}', [BlogController::class, 'update'])->name('admin.blogs.update');
    Route::delete('admin/blogs/{slug}', [BlogController::class, 'destroy'])->name('admin.blogs.destroy');

    
    // Manage Photo Gallery
    Route::get('admin/photo_gallery', [PhotoGalleryController::class, 'index'])->name('admin.photo_gallery.index');
    Route::get('admin/photo_gallery/create', [PhotoGalleryController::class, 'create'])->name('admin.photo_gallery.create');
    Route::post('admin/photo_gallery', [PhotoGalleryController::class, 'store'])->name('admin.photo_gallery.store');
    Route::get('admin/photo_gallery/{slug}', [PhotoGalleryController::class, 'show'])->name('admin.photo_gallery.show');
    Route::get('admin/photo_gallery/{slug}/edit', [PhotoGalleryController::class, 'edit'])->name('admin.photo_gallery.edit');
    Route::put('admin/photo_gallery/{slug}', [PhotoGalleryController::class, 'update'])->name('admin.photo_gallery.update');
    Route::delete('admin/photo_gallery/{slug}', [PhotoGalleryController::class, 'destroy'])->name('admin.photo_gallery.destroy');

    
    // Manage Video Story 
    Route::get('admin/video_story', [VideoStoryController::class, 'index'])->name('admin.video_story.index');
    Route::get('admin/video_story/create', [VideoStoryController::class, 'create'])->name('admin.video_story.create');
    Route::post('admin/video_story', [VideoStoryController::class, 'store'])->name('admin.video_story.store');
    Route::get('admin/video_story/{slug}', [VideoStoryController::class, 'show'])->name('admin.video_story.show');
    Route::get('admin/video_story/{slug}/edit', [VideoStoryController::class, 'edit'])->name('admin.video_story.edit');
    Route::put('admin/video_story/{slug}', [VideoStoryController::class, 'update'])->name('admin.video_story.update');
    Route::delete('admin/video_story/{slug}', [VideoStoryController::class, 'destroy'])->name('admin.video_story.destroy');


    // Change Segment
    Route::get('admin/segments', [SegmentController::class, 'index'])->name('admin.segments.index');
    Route::get('admin/segments/{id}/edit', [SegmentController::class, 'edit'])->name('admin.segments.edit');
    Route::put('admin/segments/{id}', [SegmentController::class, 'update'])->name('admin.segments.update');


    // Change Footer 
    Route::get('footers', [FooterController::class, 'index'])->name('admin.footers.index');
    Route::get('footers/{id}/edit', [FooterController::class, 'edit'])->name('admin.footers.edit');
    Route::put('footers/{id}', [FooterController::class, 'update'])->name('admin.footers.update');
});



require __DIR__ . '/auth.php';
