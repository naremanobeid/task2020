<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});
Route::get('tasks', function () {
  
  //  $tasks = ['task 1','task 2','task 3'];
    $task=DB ::table('tasks')->get();
   // return $tasks;
    return view('index',compact('tasks'));
});

