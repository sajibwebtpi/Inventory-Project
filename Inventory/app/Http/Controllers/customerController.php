<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class customerController extends Controller
{
    function  customer(){
        return view('pages.dashboard.customer-page');
    }
}
