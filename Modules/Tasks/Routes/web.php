<?php
use \Illuminate\Support\Facades\Route;
use NOGMS\Tasks\Http\Controllers\TasksController;

Route::group([
    'prefix'    =>  'tasks',
], function(){

    Route::get('/', [TasksController::class, 'index'])->name('tasks');

});
