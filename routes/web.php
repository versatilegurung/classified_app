<?php

use Illuminate\Http\Request;
use App\Livewire\Frontend\Home;
use App\Livewire\Frontend\Ad\View;
use App\Http\Middleware\Localization;
use Illuminate\Support\Facades\Route;
use App\Livewire\Frontend\Ads\LocationMap;
use App\Livewire\Frontend\Auth\VerifyEmail;

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


// make a route if production user /comingsoon and in dev /

if (app()->environment('production')) {
    Route::get('/', function () {
        return view('livewire.frontend.coming-soon');
    });
} else {
    Route::get('/', Home::class)->name('home');
}


//logviewer
Route::get('logs', [\Rap2hpoutre\LaravelLogViewer\LogViewerController::class, 'index']);

Route::get('/location', LocationMap::class);

// Route::get('/', Home::class)->name('home');

// Route::get('/coming-soon', function () {
//     return view('livewire.frontend.coming-soon');
// })->name('coming.soon');

//this route gets user redirect to last page
Route::get('/goback', function () {
    return redirect()->back();
})->name('goback');

Route::get('/register', \App\Livewire\Frontend\Auth\Register::class)->name('register');

// if user is authenicated then redirect to dashboard from register route


Route::get('/login', App\Livewire\Frontend\Auth\Login::class)->name('login');

Route::get('/forgot-password', ForgotPassword::class)->name('forgot-password');

Route::get('/reset-password/{token}', \App\Livewire\Frontend\Auth\ResetPassword::class)->name('reset.password');

//laravel verify email

// The Email Verification Notice
Route::get('/email/verify', VerifyEmail::class)->middleware('auth')->name('verification.notice');


// The Email Verification Handler
Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();

    return redirect('/account/dashboard');
})->middleware(['auth', 'signed'])->name('verification.verify');

// Resending the Verification Email

Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();

    return back()->with('message', 'Verification link sent!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');





//laravel verify email

// only authenticated user can get into this route**
Route::middleware(['auth', 'verified'])->group(function () {
    //user account route
    Route::get('/account/dashboard', \App\Livewire\Frontend\Account\Dashboard::class)->name('dashboard');
    Route::get('/account/my-ads', \App\Livewire\Frontend\Account\MyAds::class)->name('my.ads');
    Route::get('/post-ad', \App\Livewire\Frontend\Ads\PostAd::class)->name('post.ad');
    Route::get('/account/messages', \App\Livewire\Frontend\Account\Message::class)->name('account.message');
    Route::get('/account/profile', \App\Livewire\Frontend\Account\Profile::class)->name('account.profile');
    Route::get('/account/sent-message', \App\Livewire\Frontend\Account\SentMessage::class)->name('account.sent-message');
    Route::get('/account/view/{id}', \App\Livewire\Frontend\Account\ViewMessage::class)->name('account.view-message');

    //log out route
    Route::get('/logout', function () {
        auth()->logout();
        session()->flush();
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