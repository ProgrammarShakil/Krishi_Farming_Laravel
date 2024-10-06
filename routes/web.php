<?php

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

    // INTERN APPLICATION 
    Route::get('/intern-applications/apply', [InternApplicationController::class, 'create'])->name('intern-applications.create');
    Route::post('/intern-applications', [InternApplicationController::class, 'store'])->name('intern-applications.store');

    // BUSINESS PROPOSAL 
    Route::get('/business-proposal/apply', [BusinessProposalController::class, 'create'])->name('business-proposal.create');
    Route::post('/business-proposal', [BusinessProposalController::class, 'store'])->name('business-proposal.store');

    // BRAND FRANCHISE PROPOSAL 
    Route::get('/brand-franchise-proposal/apply', [BrandFranchiseProposalController::class, 'create'])->name('brand-franchise-proposal.create');
    Route::post('/brand-franchise-proposal', [BrandFranchiseProposalController::class, 'store'])->name('brand-franchise-proposal.store');
});



require __DIR__ . '/auth.php';
