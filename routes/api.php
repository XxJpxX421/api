<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SportController;
use App\Http\Controllers\TrainerModelController;
use App\Http\Controllers\CompetitorModelController;
use App\Http\Controllers\LocaleModelController;

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/meus-dados', function () {
    return response()->json([
        'nome_completo' => 'João Pedro Borda da Silva',
        'ra' => '2646'
    ]);
});

Route::apiResource('/sports', SportController::class);
Route::apiResource('/trainers', TrainerModelController::class);
Route::apiResource('/competitors', CompetitorModelController::class);
Route::apiResource('/locales', LocaleModelController::class);



