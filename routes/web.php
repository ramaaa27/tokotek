<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HaiController;
 
// Route::get('/tokotek/{nik}/cek', [HaiController::class, 'index']);

Route::get('/tokotek/{club}/cek', [HaiController::class, 'player']);

Route::get('/', function () {
    return view('welcome');
});
