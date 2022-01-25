<?php

use App\Http\Livewire\Dashboard;
use App\Http\Livewire\Rakordata\ApprovalData;
use App\Http\Livewire\Rakordata\Listdata;
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


Route::middleware(['auth:sanctum', 'verified'])->group(function(){
    Route::get('/', Dashboard::class)->name('dashboard');
    Route::get('/list', Listdata::class)->name('dataList');
    Route::get('/approve', ApprovalData::class)->name('dataapprove');
});
