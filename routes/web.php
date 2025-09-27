<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\HelloMessage;
use App\Livewire\Counter;

Route::get('/', function () {
    return view('welcome');
});

Route::get('hello', HelloMessage::class)->name('hello.message');
Route::get('counter', Counter::class)->name('counter');
