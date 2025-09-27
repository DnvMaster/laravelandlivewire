<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\HelloMessage;
use App\Livewire\Counter;
use App\Livewire\CreateSubscriber;

Route::get('/', function () {
    return view('welcome');
});

Route::get('hello', HelloMessage::class)->name('hello.message');
Route::get('counter', Counter::class)->name('counter');
Route::get('create_subscriber', CreateSubscriber::class)->name('create.subscriber');
