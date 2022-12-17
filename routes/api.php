<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\PeopleController;

Route::get('szkatula/305409/people', [PeopleController::class, 'index']);
Route::post('szkatula/305409/people', [PeopleController::class, 'create']);
Route::get('szkatula/305409/people/{people}', [PeopleController::class, 'show']);
Route::put('szkatula/305409/people/{people}', [PeopleController::class, 'update']);
Route::delete('szkatula/305409/people/{people}', [PeopleController::class, 'destroy']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
