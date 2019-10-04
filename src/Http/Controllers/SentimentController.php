<?php

namespace Sentiment\Http\Controllers;

use App\Http\Controllers\Controller;
use Sentiment\Vaman;

class SentimentController extends Controller{


    public function index(){

        return  Vaman::display();
    }

}