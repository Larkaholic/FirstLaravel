<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GreetController;


Route::get('/greet', [GreetController::class, 'showGreeting']);