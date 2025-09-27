<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\HelloMessage;

Route::get('/', function () {
    return view('welcome');
});

Route::get('hello', HelloMessage::class)->name('hello.message');
