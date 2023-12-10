<?php

use App\Http\Controllers\Admin\QuestionController;
use App\Http\Controllers\Admin\UserController;
use App\Models\Topic;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth', 'can:admin'])
    ->prefix('admin')
    ->name('admin.')
    ->group(function () {
        
    Route::redirect('/', '/admin/topics')->name('dashboard');

    Route::get('topics', function(){

        $topics = Topic::withCount('questions')->get();
        return view('admin.topics.index', compact('topics'));

    })->name('topics.index');

    Route::resource('questions', QuestionController::class)->except('show');

    Route::resource('users', UserController::class);

});