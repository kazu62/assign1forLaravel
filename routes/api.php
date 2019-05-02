<?php

use Illuminate\Http\Request;

Route::get('/mst_prefecres', 'MstPrefectureController@index');
Route::match(['options','post'],'/mst_prefecres', 'MstPrefectureController@store');
