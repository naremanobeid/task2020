  
<?php

use Illuminate\Support\Facades\Route;




Route::get('/','TaskController@index');

Route::get('task/{id}','TaskController@show');

Route::post('store','TaskController@store');

Route::delete('delete/{id}','Taskcontroller@destroy');

Route::post('edit/{id}','Taskcontroller@ShowUpdateTask');

Route::post('update/{id}','TaskController@Update');

