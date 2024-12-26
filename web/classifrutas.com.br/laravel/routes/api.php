<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserRegisterController;

Route::post('/register-user', [UserRegisterController::class, 'storeUser']);
Route::post('/register-login', [UserRegisterController::class, 'storeLogin']);
Route::post('/register-grupo', [UserRegisterController::class, 'storeGrupo']);

