<?php

use App\Http\Controllers\auth\AuthController;
use App\Http\Controllers\user\dashboard;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facade;

Route::middleware(['adminAccess'])->group(function () {


});


   Route::get('/', function (){

     return view('livewire.pages.home');}
   );
   Route::get('/login', [AuthController::class,'loginView']
  );

  Route::post('/login', [AuthController::class,'login']);

  Route::get('/register', [AuthController::class,'registerView']);

  Route::post('/register', [AuthController::class,'register']);
  Route::post('logout', [AuthController::class,'logout']);



Route::prefix('user')->group(function () {
    Route::get('/{username}/dashboard', [dashboard::class,'index']);
    Route::get('/{username}/profile', [dashboard::class,'profile']);
    Route::get('/{username}/deposit', [dashboard::class,'deposit']);
    Route::get('/{username}/withdrawal', [dashboard::class,'withdrawal']);
    Route::get('/{username}/downlines', [dashboard::class,'downlines']);
    Route::get('/{username}/transfer', [dashboard::class,'transfer']);
    Route::get('/{username}/contact', [dashboard::class,'contact']);
    Route::get('/{username}/investments', [dashboard::class,'withdrawal']);
});
