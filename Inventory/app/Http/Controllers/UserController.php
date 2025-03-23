<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    function loginPage(){
        return view('pages.auth.login-page');
    }

    function regPage(){
        return view('pages.auth.reg-page');
    }
    function resetPage(){
        return view('pages.auth.reset-pass-page');
    }
    function verifyPage(){
        return view('pages.auth.verify-page');
    }
    function sendPage(){
        return view('pages.auth.send-otp-page');
    }

    function profilePage(){
        return view('pages.dashboard.profile-page');
    }

    function reportPage(){
        return view("pages.dashboard.report-page");
    }

    function salePage(){
        return view("pages.dashboard.sale-page");
    }
}
