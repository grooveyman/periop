<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CandidateController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\VoteController;

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
    return view('layouts.main');
});

Route::get('/verify', function(){
    return view('pages.verify');
});

Route::post('/v', [CandidateController::class, 'store'])->name('verify');

// Route::get('/president', [PortfolioController::class, 'president_index'])->name('president');
Route::post('/cast/{cid}/{pid}/{vid}', [PortfolioController::class, 'president']);

Route::get('/secretary', [PortfolioController::class, 'secretary_index'])->name('secretary');
Route::post('/castSecre/{cid}/{pid}/{vid}', [PortfolioController::class, 'secretary']);

Route::get('/treasurer', [PortfolioController::class, 'treasurer_index'])->name('treasurer');
Route::post('/castTreas/{cid}/{pid}/{vid}', [PortfolioController::class, 'treasurer']);

Route::get('/pro', [PortfolioController::class, 'pro_index'])->name('pro');
Route::post('/castPro/{cid}/{pid}/{vid}', [PortfolioController::class, 'pro']);
Route::get('/castNoPro/{cid}/{pid}/{vid}',[VoteController::class, 'noPro']);

Route::get('/library', [PortfolioController::class, 'library_index'])->name('library');
Route::post('/castLib/{cid}/{pid}/{vid}', [PortfolioController::class, 'library']);

Route::get('/sports', [PortfolioController::class, 'sports_index'])->name('sports');
Route::post('/castSport/{cid}/{pid}/{vid}', [PortfolioController::class, 'sports']);
Route::get('/castNoSport/{cid}/{pid}/{vid}',[VoteController::class, 'noSport']);

Route::get('/entertainment', [PortfolioController::class, 'entertainment_index'])->name('entertainment');
Route::post('/castEnter/{cid}/{pid}/{vid}', [PortfolioController::class, 'entertainment']);
Route::get('/castNoEnter/{cid}/{pid}/{vid}',[VoteController::class, 'noEnter']);

Route::get('/thankU', [PortfolioController::class, 'thankU'])->name('thanks');


Route::get('/dashboard', [VoteController::class, 'index'])->name('dashboard');

Route::get('/results', [VoteController::class, 'results'])->name('results');