<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::prefix('v1') -> middleware(['ApiKey']) -> group(function () {
    Route::get('/', function() {
        return response()->json([
            'status' => 'success',
            'version' => 'v1',
            'baseUrl' => 'http://localhost:8000/api/v1'
        ], status: 200);
    });
});
