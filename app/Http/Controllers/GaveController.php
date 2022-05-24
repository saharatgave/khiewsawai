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
        return view('gave.portfolio.portfolio_home');
    }

    function portfolioPage($page) {
        // dd('gave.portfolio.portfolio_' . $page);
        return view('gave.portfolio.portfolio_' . $page);
    }
}
