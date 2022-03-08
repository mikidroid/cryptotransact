<?php

use App\Http\Controllers\ActivityController;
use App\Http\Controllers\auth\AuthController;
use App\Http\Controllers\user\dashboard;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facade;

Route::middleware(['AdminAuth'])->group(function () {

});


   Route::get('/', function (){
     return view('livewire.pages.home');}
   );

   Route::get('/faq', function (){
    return view('livewire.pages.faq');}
  );

  Route::get('/terms', function (){
    return view('livewire.pages.terms');}
  );

  Route::get('/about', function (){
    return view('livewire.pages.about');}
  );

  Route::get('/contact', function (){
    return view('livewire.pages.contact');}
  );

   Route::post('/logout', [AuthController::class,'logout']);

   Route::prefix('/')->middleware('Guest')->group(function () {
   Route::get('/login', [AuthController::class,'loginView']);
  Route::post('/login', [AuthController::class,'login']);
  Route::get('/register', [AuthController::class,'registerView']);
  Route::post('/register', [AuthController::class,'register']);

   });


Route::prefix('user')->middleware('UserAuth')->group(function () {
    Route::get('/{username}/dashboard', [dashboard::class,'index']);
    Route::get('/{username}/profile', [dashboard::class,'profile']);
    Route::get('/{username}/deposit', [dashboard::class,'deposit']);
    Route::get('/{username}/withdrawal', [dashboard::class,'withdrawal']);
    Route::get('/{username}/downlines', [dashboard::class,'downlines']);
    Route::get('/{username}/transfer', [dashboard::class,'transfer']);
    Route::get('/{username}/contact', [dashboard::class,'contact']);
    Route::get('/{username}/investments', [dashboard::class,'investments']);
    Route::post('/{username}/update-profile', [AuthController::class,'updateProfile']);
    Route::post('/{username}/update-bank', [AuthController::class,'updateBank']);
    Route::post('/{username}/update-crypto', [AuthController::class,'updateCrypto']);

    Route::post('/activity', [ActivityController::class,'create']);
});

//
//
// Admin routes
Route::prefix('admin')->middleware('AdminAuth')->group(function () {
    Route::get('/{username}/dashboard', [dashboard::class,'index']);
    Route::get('/{username}/profile', [dashboard::class,'profile']);
    Route::get('/{username}/transfer', [dashboard::class,'transfer']);
    Route::get('/{username}/investments', [dashboard::class,'investments']);
    Route::post('/{username}/update-profile', [AuthController::class,'updateProfile']);
    Route::post('/{username}/update-bank', [AuthController::class,'updateBank']);
    Route::post('/{username}/update-crypto', [AuthController::class,'updateCrypto']);
    Route::get('/{username}/user', [dashboard::class,'user']);
    Route::get('/{username}/users', [dashboard::class,'users']);
    Route::post('/{id}/confirm-deposit', [ActivityController::class,'ConfirmDeposit']);
    Route::post('/{id}/confirm-withdrawal', [dashboard::class,'ConfirmWithdrawal']);
    Route::post('/activity', [ActivityController::class,'create']);
});
