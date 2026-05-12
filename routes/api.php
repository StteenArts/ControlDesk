<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Api\TechnicalController as ApiTechnicalController;

Route::get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/test', function () {
    return response()->json(['message' => 'API working']);
});

// Route to session start and add technical to database
Route::post('/register', [ApiTechnicalController::class, 'register']);
Route::post('/loginAuth', [ApiTechnicalController::class, 'loginAuth']);

// Route to tickets connected
Route::post('/tickets', [ApiTechnicalController::class, 'createTicket']);
Route::get('/tickets', [ApiTechnicalController::class, 'getTickets']);
Route::get('/ticket/{id}', [ApiTechnicalController::class, 'ticketById']);
Route::put('/ticket/{id}', [ApiTechnicalController::class, 'updateTicket']);

//Route to devices connected
Route::get('/devices', [ApiTechnicalController::class, 'index']);
Route::post('/devices/assign', [ApiTechnicalController::class, 'store']);
Route::get('/devices/{id}', [ApiTechnicalController::class, 'show']);