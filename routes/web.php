<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TelefonesController;

Route::get('/', [TelefonesController::class, 'index']);

Route::resource('usuarios', TelefonesController::class)->names('user')->parameters(['usuarios' => 'user']);
