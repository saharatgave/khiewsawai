@extends('layouts.app')
@section('banner')
    <section class="banner-gave">
        <div class="container">
            <div class="content-profile grid-2 grid-center">
                <img src="{{ asset('images/gave_page/portfolio_page/profile.jpg') }}" alt='Profile' class='profilePic' />
                <h2><span class="typeText"></span></h2>
            </div>
        </div>
    </section>
@endsection
@section('content')
    <section class="main-content">
        <div class="container">
            <div class="content-link grid-2 grid-center">
                <a href="{{route('portfolio')}}">
                <div class="gave-item">
                    <img src="{{ asset('images/gave_page/portfolio_page.png') }}" alt="img-item">
                    <h3>Portfolio</h3>
                    <p>Portfolio about me.</p>
                </div>
                </a>
                <a href="{{route('grid-responsive')}}">
                <div class="gave-item">
                    <img src="{{ asset('images/gave_page/grid_page.png') }}" alt="img-item">
                    <h3>Grid Responsive</h3>
                    <p>Grid Responsive Testing in normal web.</p>
                </div>
                </a>
                <a href="{{route('test')}}">
                <div class="gave-item">
                    <img src="https://via.placeholder.com/500" alt="img-item">
                    <h3>Test</h3>
                    <p>Lorem ipsum dolor sit amet.</p>
                </div>
                </a>
                <a href="#">
                <div class="gave-item">
                    <img src="https://via.placeholder.com/500" alt="img-item">
                    <h3>name</h3>
                    <p>lorem</p>
                </div>
                </a>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
    <script>
        const typed = new Typed('.typeText', {
            strings: ["I'm Saharat Khiewsawai, ", 'You can call me Gave.', 'I want to be a Web Developer.'],
            typeSpeed: 86,
            backSpeed: 52,
            loop: true,
            showCursor: true,
            cursorChar: '|',
            autoInsertCss: true,
            backDelay: 2000
        })
    </script>
@endsection