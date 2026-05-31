<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExhibitionController;

Route::get('/exhibitions', [ExhibitionController::class, 'index']);
Route::get('/exhibitions/{slug}', [ExhibitionController::class, 'show']);
Route::get('/admin/exhibitions', [ExhibitionController::class, 'admin']);
Route::get('/admin/exhibitions/{exhibition}/edit', [ExhibitionController::class, 'edit']);
Route::put('/admin/exhibitions/{exhibition}', [ExhibitionController::class, 'update']);
Route::get('/admin/exhibitions/create', [ExhibitionController::class, 'create']);
Route::post('/admin/exhibitions', [ExhibitionController::class, 'store']);