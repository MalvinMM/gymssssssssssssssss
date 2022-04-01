<?php

use App\Models\about_us;
use App\Http\Controllers\serviceController;
use Illuminate\Support\Facades\Route;
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

Route::get('/', function () {
    return view('landing');
});

Route::get('/about', [serviceController::class, 'about']);

Route::get('about/{slug}', [serviceController::class, 'post']);




