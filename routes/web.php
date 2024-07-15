<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';

Route::get('/etiquetas', \App\Livewire\Etiquetas\Index::class)->name('etiquetas.index');
Route::get('/etiquetas/create', \App\Livewire\Etiquetas\Create::class)->name('etiquetas.create');
Route::get('/etiquetas/show/{etiqueta}', \App\Livewire\Etiquetas\Show::class)->name('etiquetas.show');
Route::get('/etiquetas/update/{etiqueta}', \App\Livewire\Etiquetas\Edit::class)->name('etiquetas.edit');



Route::get('/tareas', \App\Livewire\Tareas\Index::class)->name('tareas.index');
Route::get('/tareas/create', \App\Livewire\Tareas\Create::class)->name('tareas.create');
Route::get('/tareas/show/{tarea}', \App\Livewire\Tareas\Show::class)->name('tareas.show');
Route::get('/tareas/update/{tarea}', \App\Livewire\Tareas\Edit::class)->name('tareas.edit');