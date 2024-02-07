<?php

use App\Livewire\Frontend\Home;
use App\Livewire\Frontend\Ad\View;
use Illuminate\Support\Facades\App;
use App\Livewire\Frontend\Ads\PostAd;
use App\Livewire\Frontend\Auth\Login;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use App\Livewire\Frontend\Auth\Register;
use App\Livewire\Frontend\Account\Profile;
use App\Livewire\Frontend\Ads\LocationMap;
use App\Livewire\Frontend\Account\Dashboard;
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

Route::get('/location', LocationMap::class);

Route::get('/', Home::class)->name('home');
Route::get('/register', Register::class)->name('register');
Route::get('/login', Login::class)->name('login');
Route::get('/forgot-password', ForgotPassword::class)->name('forgot-password');


// only authenticated user can get into this route**
Route::middleware(['auth'])->group(function () {
    //user account route
    Route::get('/account/dashboard', Dashboard::class)->name('dashboard');
    Route::get('/post-ad', PostAd::class)->name('post.ad');

    //log out route
    Route::get('/logout', function () {
        Session::flush();
        return redirect(route('home'));
    })->name('logout');
});

//ads by category
Route::get('/category/{slug}', \App\Livewire\Frontend\Ads\CategoryAds::class)->name('ads.by.category');

//ads route
Route::get('/ad/{slug}', View::class)->name('ad.show');

//post ad
Route::get('/post-ad', PostAd::class)->name('post.ad');
