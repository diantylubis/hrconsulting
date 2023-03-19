<?php
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\LoginController;



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

// Route::get('/', function () {
//     return view('service');
// });



Route::get('/',[ServiceController::class,'index']);
Route::get('/login', [LoginController::class, 'login']);
Route::get('/about-us', [AboutUsController::class, 'aboutus']);
Route::get('/landing-page',[LandingPageController::class, 'landingpage']);
Route::get('/our-client',[OurClientController::class, 'ourclient']);


