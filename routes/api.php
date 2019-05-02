<?php

use Illuminate\Http\Request;


Route::resource('/mst_prefecres', 'MstPrefectureController', ['except' => ['edit','update','delete']]);
