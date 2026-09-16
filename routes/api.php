<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PenjualanController;


// Route::post('/penjualan', [PenjualanController::class, 'store']);
// Route::put('/penjualan/{$id}', [PenjualanController::class, 'update']);
// Route::delete('/penjualan/{$id}', [PenjualanController::class, 'destroy']);


Route::resource('/penjualan', PenjualanController::class);