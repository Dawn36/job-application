<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\JobListingController;
use App\Http\Controllers\DynamicContentPageController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', [DynamicContentPageController::class, 'jobListing'])->name('view_job');
Route::get('job_list', [DynamicContentPageController::class, 'jobListSubmit'])->name('job_list');

Route::post('partner_form', [DynamicContentPageController::class, 'partnerFormSubmit'])->name('partner_form');
Route::post('job_confirmation', [DynamicContentPageController::class, 'jobConfirmation'])->name('job_confirmation');


Route::get('/thankyou_page', function () {
    return view('dynamic-pages/thankyou_page');
})->name('thankyou_page');




// Route::get('/', function () {
//     return redirect('login');
// });
Route::middleware(['auth'])->group(function () {

    Route::get('partner_listing', [DynamicContentPageController::class, 'partnerListing'])->name('partner_listing');
    Route::get('job_request', [DynamicContentPageController::class, 'jobRequest'])->name('job_request');
    Route::get('job_request_show/{id}', [DynamicContentPageController::class, 'jobRequestShow'])->name('job_request_show');
    Route::get('job_request_edit', [DynamicContentPageController::class, 'jobRequestEdit'])->name('job_request_edit');
    Route::get('job_request_status', [DynamicContentPageController::class, 'jobRequestStatus'])->name('job_request_status');
    Route::post('job_request_submit', [DynamicContentPageController::class, 'jobRequestSubmit'])->name('job_request_submit');
    Route::post('job_request_delete/{id}', [DynamicContentPageController::class, 'jobRequestDelete'])->name('job_request_delete');
    Route::post('partner_delete/{id}', [DynamicContentPageController::class, 'partnerDelete'])->name('partner_delete');
    Route::resource('job_listing', JobListingController::class);
    Route::get('dynamic_job_page', [DynamicContentPageController::class, 'dynamicJobPage'])->name('dynamic_job_page');
    Route::post('dynamic_job_page', [DynamicContentPageController::class, 'dynamicJobPageSubmit'])->name('dynamic_job_page');
    Route::post('dynamic_job_update/{id}', [DynamicContentPageController::class, 'dynamicJobPageUpdate'])->name('dynamic_job_update');
    Route::get('job_active', [JobListingController::class, 'jobActive'])->name('job_active');

    Route::resource('settings', SettingsController::class);
    Route::post('/settings/{id}/updateEmail', [SettingsController::class, 'updateEmail'])->name('updateEmail');
    Route::post('/settings/{id}/updatePassword', [SettingsController::class, 'updatePassword'])->name('updatePassword');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
