<?php

use App\Livewire\Home;
use App\Livewire\Contact;
use App\Livewire\Profile;
use App\Livewire\Articles;
use App\Livewire\Products;
use App\Livewire\Galleries;
use Illuminate\Support\Facades\Route;

Route::get('/', Home::class)->name('home');
Route::get('/Profile', Profile::class)->name('profile');
Route::get('/Product', Products::class)->name('product');
Route::get('/Article', Articles::class)->name('article');
Route::get('/Gallery', Galleries::class)->name('gallery');
Route::get('/Contact', Contact::class)->name('contact');
