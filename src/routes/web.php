<?php

$namespace = 'Sentiment\Http\Controllers';

Route::group([
    'namespace' => $namespace,
    'prefix' => 'sentiment'
], function(){

    Route::get('/','SentimentController@index');
});