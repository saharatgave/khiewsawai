<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Khiewsawai - Login</title>
    <link rel="stylesheet" href="{{ asset('css/login_style.css') }}">
    
    <script src="https://kit.fontawesome.com/94f00ba9b2.js" crossorigin="anonymous"></script>

    <style>
        .gave-main-btn {
            font-size: 1rem;
            position: fixed;
            top: 10px;
            left: 10px;
            text-decoration: none;
            color: white;
            background-color: #1d2129;
            border-radius: 10px;
            padding: 2px 6px;
        }
    </style>
</head>
<body>
    <section>
        <div class="color"></div>
        <div class="color"></div>
        <div class="color"></div>
        <div class="color"></div>
        <div>
            <a href="{{ route('gave') }}" class="gave-main-btn"><i class="fa-solid fa-angle-left"></i> MAIN</a>
        </div>
        <div class="box">
            <div class="square" style="--i:0;"></div>
            <div class="square" style="--i:1;"></div>
            <div class="square" style="--i:2;"></div>
            <div class="square" style="--i:3;"></div>
            <div class="square" style="--i:4;"></div>
            <div class="container">
                <div class="form">
                    <h2>Khiewsawai - Login</h2>
                    <form action="">
                        <div class="inputBox">
                            <input type="text" name="" id="" placeholder="Username">
                        </div>
                        <div class="inputBox">
                            <input type="password" name="" id="" placeholder="Password">
                        </div>
                        <div class="inputBox">
                            <input type="submit" value="Login">
                        </div>
                        <p class="forget">Forgot Password ? <a href="#">Click Here</a></p>
                        <p class="forget">Don't have an account ? <a href="#">Sign up</a></p>
                    </form>
                </div>
            </div>
        </div>
    </section>
</body>
</html>