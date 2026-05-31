<?php

use Illuminate\Support\Facades\Route;
use App\Models\Exhibition;

Route::get('/exhibitions', function () {
    return Exhibition::query()
        ->where('is_published', true)
        ->orderBy('start_date')
        ->get();
});