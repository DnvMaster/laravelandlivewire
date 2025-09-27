<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\HelloMessage;
use App\Livewire\Counter;
use App\Livewire\CreateSubscriber;
use App\Livewire\ReadSubscriber;

Route::get('/', function () {
    return view('welcome');
});

Route::get('hello', HelloMessage::class)->name('hello.message');
Route::get('counter', Counter::class)->name('counter');
Route::get('create_subscriber', CreateSubscriber::class)->name('create.subscriber');
Route::get('read_subscriber', ReadSubscriber::class)->name('read.subscriber');
// Route::get('edit_subscriber', EditSubscriber::class)->name('edit.subscriber');
// Route::get('delete_subscriber', DeleteSubscriber::class)->name('delete.subscriber');
