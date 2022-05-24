@extends('gave.portfolio.portfolio_template')
@section('content_portfolio')
    <div class='container'>
        <h1>My Experience</h1>
        <div class='card card-exp'>
            <div>
                <img src="{{asset('images/gave_page/portfolio_page/exp_logo1.jpg')}}" alt="Infinite">
                <img src="{{asset('images/gave_page/portfolio_page/exp_logo2.png')}}" alt="TRUE">
            </div>
            <div>
                <h2>Infinite Staffing Solutions Co., Ltd.</h2> 
                <h2>Outsource in True Corporation Co., Ltd.</h2>
                <h3>Position: Technical Consultant (Software Tester)</h3>
                <h5>(August 2021 - February 2022)</h5>
            </div>
        </div>
        <div class='card card-exp'>
            <div>
                <img src="{{asset('images/gave_page/portfolio_page/exp_logoAlpha8.png')}}" alt="Alpha8">
            </div>
            <div>
                <h2>Alpha 8 Co., Ltd. </h2>
                <h3>Position: Intern Web Development</h3>
                <h5>(November 2020 - March 2021)</h5>
            </div>
        </div>
    </div>
@endsection