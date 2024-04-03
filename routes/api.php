<?php

use App\Http\Controllers\Api\ApiController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::namespace('App\Http\Controllers\Api')->group(function(){
Route::get('/funcionarios', [ApiController::class,'getAll']);
Route::get('/funcionario/{id}', [ApiController::class, 'getOne']);
Route::post('/criar-funcionario/',[ApiController::class,'createRecord']);
Route::delete('/deletar-funcionario/{id}', [ApiController::class, 'deleteRecord']);
Route::patch('/update-funcionario/{id}', [ApiController::class, 'updateRecord']);
});
