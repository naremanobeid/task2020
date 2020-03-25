  
<?php

use Illuminate\Support\Facades\Route;




Route::get('/','TaskController@index');

Route::get('task/{id}','TaskController@show');

Route::post('store','TaskController@store');
