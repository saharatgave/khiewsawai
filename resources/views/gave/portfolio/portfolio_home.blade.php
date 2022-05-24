@extends('gave.portfolio.portfolio_template')
@section('content_portfolio')
    <div class="home">
        <img src="{{ asset('images/gave_page/portfolio_page/profile.jpg') }}" alt='Profile' class='profilePic' />
        <h2><span class="typeText"></span></h2>

        <div class='social'>
            <div>
                <a href='https://www.facebook.com/SaharatKhiewsawai/' target='_blank' rel='noopender noreferrer'><i class="fa-brands fa-facebook"></i> <span>Saharat Khiewsawai</span></a>
            </div>
            <div>
                <span><i class="fa-solid fa-phone"></i> 091-148-2612</span>
            </div>
            <div>
                <span><i class="fa-solid fa-location-crosshairs"></i> 200 M.4 Tak Aok, Ban Tak, Tak</span>
            </div>
        </div>
    </div>

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