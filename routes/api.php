<?php

use App\Http\Controllers\Api\AttendeeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\EventController;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('events', EventController::class);
Route::apiResource('events.Attendees', AttendeeController::class)
    ->scoped([
        'Attendee' => 'event',
    ]);
