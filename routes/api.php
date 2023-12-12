<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Resources\EventResource;
use \App\Models\Event;

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
    return EventResource::collection(Event::all());
});

Route::get("/events/{id}", function (string $id) {
    return new EventResource(Event::findOrFail($id));
});
