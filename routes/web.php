<?php

Route::get('/', function () {
    return view('welcome');
});



//apis
Route::apiResource('/api/filial', 'Api\FilialController');