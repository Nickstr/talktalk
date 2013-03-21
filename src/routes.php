<?php 
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/


Route::group(array('prefix' => 'talktalk'), function()
{
    Route::get('/', 'Talktalk\ForumsController@index');
    Route::get('category/{catId}', 'Talktalk\CategoriesController@index');
    Route::get('category/{catId}/topic/{topicId}', 'Talktalk\TopicsController@index');

    Route::post('messages/new', 'Talktalk\MessagesController@store');
});