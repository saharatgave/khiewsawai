<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio Gave</title>
    <link rel="stylesheet" href="{{ asset('css/portfolio_style.css') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('images/favicon-32x32.png') }}">
    <script src="https://kit.fontawesome.com/94f00ba9b2.js" crossorigin="anonymous"></script>

    <style>
        .gave-main-btn {
            font-size: 1rem;
            position: fixed;
            bottom: 10px;
            left: 10px;
            text-decoration: none;
            color: white;
            background-color: #1d2129;
            border-radius: 10px;
            padding: 2px 6px;
            z-index: 999;
        }
    </style>
    
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="{{ route('portfolio') }}">Home</a></li>
                <li><a href="{{ route('portfolio-page', 'about') }}">About</a></li>
                <li><a href="{{ route('portfolio-page', 'education') }}">Education</a></li>
                <li><a href="{{ route('portfolio-page', 'skills') }}">Skills</a></li>
                <li><a href="{{ route('portfolio-page', 'experience') }}">Experience</a></li>
                <div class="menu-icon cancel-menu-btn">
                    <i class="fas fa-times"></i>
                </div>
            </ul>
        </nav>
    </header>

    
    <a href="{{ route('gave') }}" class="gave-main-btn"><i class="fa-solid fa-angle-left"></i> MAIN</a>
    
    <div class="menu-icon menu-btn">
        <i class="fas fa-bars"></i>
    </div>
    <script>
        const menuBtn = document.querySelector(".menu-btn");
        const cancelBtn = document.querySelector(".cancel-menu-btn");

        const header = document.querySelector("header");

        menuBtn.onclick = () => {
            header.classList.add("active-menu");
        }
        cancelBtn.onclick = () => {
            header.classList.remove("active-menu");
        }

    </script>
    
    @yield('content_portfolio')


</body>
</html>