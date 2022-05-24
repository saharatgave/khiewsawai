@extends('gave.portfolio.portfolio_template')
@section('content_portfolio')
    <div class='container'>
        <h1>My Education</h1>
        <div class='card'>
            <div>
                <img src="{{asset('images/gave_page/portfolio_page/rmutl.png')}}" alt="">
            </div>
            <div>
                <h2>Bachelor of Computer Engineering</h2>
                <h3>Rajamangala University of Technology Lanna Tak</h3>
                <h5>GPA : 3.93,   from 2018 to 2021</h5>
            </div>
        </div>
        <div class='card'>
            <div>
                <img src="{{asset('images/gave_page/portfolio_page/rmutl.png')}}" alt="">
            </div>
            <div>
                <h2>Diaploma of Computer Technology</h2>
                <h3>Rajamangala University of Technology Lanna Tak</h3>
                <h5>GPA : 3.81,   from 2016 to 2017</h5>
            </div>
        </div>
    </div>
@endsection