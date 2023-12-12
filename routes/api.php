<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::get("/events", function () {
    return \App\Http\Resources\EventResource::collection(\App\Models\Event::all());
});

Route::get("/events/{id}", function (string $id) {
    return new \App\Http\Resources\EventResource(\App\Models\Event::findOrFail($id));
});
