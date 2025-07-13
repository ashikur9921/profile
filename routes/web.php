<?php

use App\Http\Controllers\home;
use App\Http\Controllers\resume;
use App\Http\Controllers\contact;
use App\Http\Controllers\projects;
use Illuminate\Support\Facades\Route;

Route::get('/', [home::class, 'home'])->name('home');
Route::get('contact', [contact::class, 'home'])->name('contact');
Route::post('contact/store', [contact::class, 'store'])->name('contact.store');
Route::get('contact/confirmation', [contact::class, 'confirmation'])->name('contact.confirmation');

Route::get('projects', [projects::class, 'projects'])->name('projects'); 
Route::get('resume', [resume::class, 'resume'])->name('resume');