<?php

Route::get('calculator', function(){
	echo 'Hello from the calculator package!';
});

Route::get('add/{a}/{b}', 'Amit\Calculator\CalculatorController@add');
Route::get('subtract/{a}/{b}', 'Amit\Calculator\CalculatorController@subtract');