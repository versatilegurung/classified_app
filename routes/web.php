<?php

use Illuminate\Http\Request;
use App\Livewire\Frontend\Home;
use App\Livewire\Frontend\Ad\View;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use App\Http\Middleware\Localization;
use App\Livewire\Frontend\Ads\PostAd;
use App\Livewire\Frontend\Auth\Login;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use App\Livewire\Frontend\Auth\Register;
use App\Livewire\Frontend\Account\Profile;
use App\Livewire\Frontend\Ads\LocationMap;
use App\Livewire\Frontend\Account\Dashboard;
use App\Livewire\Frontend\Auth\ForgotPassword;
use Illuminate\Foundation\Auth\EmailVerificationRequest;

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

//localization
// Route::prefix('{locale}')
//     ->middleware(Localization::class)
//     ->group(function () {

//     });
//logviewer
Route::get('logs', [\Rap2hpoutre\LaravelLogViewer\LogViewerController::class, 'index']);

Route::get('/location', LocationMap::class);

Route::get('/', Home::class)->name('home');
Route::get('/register', Register::class)->name('register');
Route::get('/login', Login::class)->name('login');
Route::get('/forgot-password', ForgotPassword::class)->name('forgot-password');

//laravel verify email

Route::get('/email/verify', function () {
    return view('auth.verify-email');
})
    ->middleware('auth')
    ->name('verification.notice');

Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();
    return redirect('/home');
})
    ->middleware(['auth', 'signed'])
    ->name('verification.verify');

Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();

    return back()->with('message', 'Verification link sent!');
})
    ->middleware(['auth', 'throttle:6,1'])
    ->name('verification.send');

//laravel verify email

// only authenticated user can get into this route**
Route::middleware(['auth'])->group(function () {
    //user account route
    Route::get('/account/dashboard', Dashboard::class)->name('dashboard');
    Route::get('/account/my-ads', \App\Livewire\Frontend\Account\MyAds::class)->name('my.ads');
    Route::get('/post-ad', PostAd::class)->name('post.ad');

    //log out route
    Route::get('/logout', function () {
        Session::flush();
        return redirect(route('home'));
    })->name('logout');
});

//ads by category
Route::get('/category/{slug}', \App\Livewire\Frontend\Ads\CategoryAds::class)->name('ads.category');

//ads by location
Route::get('/location/{slug}', \App\Livewire\Frontend\Ads\LocationAds::class)->name('ads.location');

//ads by user
Route::get('/user/{userId}', \App\Livewire\Frontend\Ads\UserAds::class)->name('ads.user');

//ads route
Route::get('/ad/{slug}', View::class)->name('ad.show');

//post ad
Route::get('/post-ad', PostAd::class)->name('post.ad');
