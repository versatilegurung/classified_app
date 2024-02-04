<?php

use App\Livewire\Frontend\Home;
use App\Livewire\Frontend\Ad\View;
use App\Livewire\Frontend\Auth\Login;
use Illuminate\Support\Facades\Route;
use App\Livewire\Frontend\Auth\Register;
use App\Livewire\Frontend\Account\Profile;
use App\Livewire\Frontend\Ads\PostAd;
use App\Livewire\Frontend\Auth\ForgotPassword;

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
//     return view('welcome');
// });


Route::get('/', Home::class)->name('home');
Route::get('/register', Register::class)->name('register');
Route::get('/login', Login::class)->name('login');
Route::get('/forgot-password', ForgotPassword::class)->name('forgot-password');

Route::get('/account/profile', Profile::class)->name('account.profile');

//ads route
Route::get('/ad/{slug}', View::class)->name('ad.show');

//post ad
Route::get('/post-ad', PostAd::class)->name('post.ad');
