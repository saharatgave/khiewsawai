<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GaveController extends Controller
{
    function index() {
        return view('gave.gave');
    }

    function gridResponsive() {
        return view('gave.Grid Responsive.index');
    }

    function portfolio() {
        return view('gave.gave');
    }
}
