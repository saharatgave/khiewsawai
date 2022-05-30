<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    function index() {
        return view('welcome');
    }

    function test() {
        return view('test');
    }

    function login() {
        return view('login_dec');
    }
}
