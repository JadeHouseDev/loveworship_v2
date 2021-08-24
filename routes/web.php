<?php

use App\Http\Livewire\Branch\ViewBranch;
use App\Http\Livewire\Branches;
use App\Http\Livewire\Home;
use App\Http\Livewire\Viewmember;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', Home::class);
Route::get('/branches', Branches::class)->name('branches');
Route::get('/branches/{branch_slug}', ViewBranch::class)->name('view_branch');


Route::get('/members/{user}', Viewmember::class)->name('view_member');
