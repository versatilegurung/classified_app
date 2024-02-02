<?php

<<<<<<< HEAD
use App\Livewire\Frontpage\HomePage;
=======
use App\Livewire\Frontend\Home;
>>>>>>> 3f589972068e82ec33911d7b1e0609d91f82408c
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

<<<<<<< HEAD
Route::get('/', HomePage::class)->name('home');
=======
// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', Home::class);

>>>>>>> 3f589972068e82ec33911d7b1e0609d91f82408c
