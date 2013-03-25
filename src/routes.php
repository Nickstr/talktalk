<?php namespace Talktalk;

use Talktalk\controllers;
use Illuminate\Support\Facades\Route;

Route::group(array('prefix' => 'talktalk'), function()
{
    Route::get('/', 'ForumsController@index');
    Route::get('category/{catId}', 'Talktalk\CategoriesController@index');
    Route::get('category/{catId}/topic/{topicId}', 'Talktalk\TopicsController@index');

    Route::post('messages/new', 'Talktalk\MessagesController@store');
});