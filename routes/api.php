<?php

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceResponse;
use Illuminate\Support\Facades\Route;



Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

use App\Http\Controllers\PetitionController;
 
Route::resource('petition', PetitionController::class);

use App\Http\Controllers\AuthorController;
 
Route::resource('authors', AuthorController::class);

