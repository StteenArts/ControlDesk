<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Api\UserController as ApiUserController;
use App\Http\Api\ticketController as ApiTicketController;
use App\Http\Api\desktopController as ApiDesktopController;

Route::get('/user', function (Request $request) {
    return $request->user();
});
// Test route to check if API is working
Route::get('/test', function () {
    return response()->json(['message' => 'API tickets working']);
});

// Route to session start and add user technicals to database
Route::post('/login', [ApiUserController::class, 'login']);
Route::post('/register', [ApiUserController::class, 'register']);


Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified', ])
->group(function(){
// Route to users list connected
Route::get('/users', [ApiUserController::class, 'index']);

// Route to report issues connected
Route::post('/tickets', [ApiTicketController::class, 'store']); // Create a new ticket
Route::get('/tickets', [ApiTicketController::class, 'index']); // Get a list of all tickets
Route::get('/ticket/{id}', [ApiTicketController::class, 'show']); // Get a specific ticket by ID
Route::put('/ticket/{id}', [ApiTicketController::class, 'update']); // Update a specific ticket by ID
Route::delete('/ticket/destroy/{id}', [ApiTicketController::class, 'destroy']); // Delete a specific ticket by ID

//Route to desktops connected
Route::get('/devices', [ApiDesktopController::class, 'index']); // Get a list of all desktops
Route::post('/devices/assign', [ApiDesktopController::class, 'store']); // Create a new desktop
Route::get('/devices/{id}', [ApiDesktopController::class, 'show']); // Get a specific desktop by ID

// Routes to assign and unassign tickets to technicals users
Route::post('/ticket/{id}/assign', [ApiTicketController::class, 'assignToTechnical']); // Assign a ticket to a technical user
Route::post('/ticket/{id}/unassign', [ApiTicketController::class, 'unassignFromTechnical']); // Unassign a ticket from a technical user
});

