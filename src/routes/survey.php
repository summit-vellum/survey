<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the ArticleServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(['middleware' => 'web'], function() {
    // Route::resource('test/list', 'Quill\Survey\Http\Controllers\SurveyController');
    Route::resource('survey/survey/list', 'Vellum\Controllers\ShortcodeController');
	// Route::get($module['name'] . '/autosave/{id}/edit', 'Vellum\Controllers\AutosaveController@edit')->name($module['name'] . '.autosave.edit');
    // Route::resource('survey/list', 'Vellum\Controllers\AutosaveControllers');
});
