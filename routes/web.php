<?php

use App\Http\Controllers\CafeController;
use App\Http\Controllers\SnsController;
use App\Http\Controllers\DonationController;
use App\Http\Controllers\ProfileController;
use App\Models\Cafe;
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

Route::get('/', function () {
    return view('top');
})->name('top');

Route::get('/privacy', function () {
    return view('privacy');
})->name('privacy');

// 保護猫カフェ一覧
Route::get('/cafes', [CafeController::class, 'list'])->name('cafes.list');
Route::get('/cafes/{id}', [CafeController::class, 'show'])->name('cafes.show');

// 寄付先一覧
Route::get('/donation', [DonationController::class, 'list'])->name('donation.list');
Route::get('/donation/{id}', [CafeController::class, 'show']);

// SNS検索
Route::get('/sns', [SnsController::class, 'list'])->name('sns.list');
Route::get('/sns/{id}', [CafeController::class, 'show']);

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

// require __DIR__.'/auth.php';
