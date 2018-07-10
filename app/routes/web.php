<?php

Route::get('/results', 'Frontend\Pages@news');
Route::get('/about','\Smartbro\Controllers\CustomController@about');
Route::get('password/reset/{token}','\Smartbro\Controllers\CustomController@reset')->name('password.reset');