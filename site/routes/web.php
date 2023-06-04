<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\DonnerController;
use App\Http\Controllers\ProfileController;

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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/login', [DonnerController::class, 'Index'])->name('login_from');
Route::post('/login/owner', [DonnerController::class, 'Login'])->name('donner.login');
Route::get('/logout', [DonnerController::class, 'LogoutDonner'])->name('donner.logout');
Route::get('/', [DonnerController::class, 'Index']);
Route::get('/signup', [DonnerController::class, 'SignUp']);
Route::post('/signup/create', [DonnerController::class, 'Create'])->name('donner.create');





Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/', [HomeController::class, 'HomeIndex']);
Route::get('/profile', [ProfileController::class, 'Index'])->middleware(['donner'])->name('donner');
Route::post('/profileUpdate', [ProfileController::class, 'IndexUpdate'])->middleware(['donner'])->name('donner');
Route::get('/profileD', [ProfileController::class, 'profileD'])->middleware(['donner'])->name('donner');
Route::get('/profileA', [ProfileController::class, 'profileA'])->middleware(['donner'])->name('donner');
Route::post('/contact', [HomeController::class, 'HomeContact']);
Route::get('/readBlog/{id}', [BlogController::class, 'blogRead']);
Route::get('/allBlog', [BlogController::class, 'blogIndex']);
Route::get('/donner', [DonnerController::class, 'DonnerIndex'])->middleware(['donner'])->name('donner');
require __DIR__ . '/auth.php';