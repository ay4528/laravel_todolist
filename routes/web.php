<?php

use Illuminate\Support\Facades\Route;

Route::get('/folders/{id}/tasks', 'App\Http\Controllers\TaskController@index')->name('tasks.index');
