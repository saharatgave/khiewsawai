<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test Web page</title>
    <link rel="stylesheet" href="{{asset('css/test_basicweb_style.css')}}">
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
        }
    </style>
</head>
<body>

    <a href="{{ route('gave') }}" class="gave-main-btn"><i class="fa-solid fa-angle-left"></i> MAIN</a>

    <header>
        <div class="hamburger" onclick="hamburgerChange(this)">
            <div class="bar1"></div>
            <div class="bar2"></div>
            <div class="bar3"></div>
        </div>
        <nav>
            <div class="container">
                <div class="nav-grid">
                    <a href="{{ route('gave') }}" class="logo" style="text-decoration: none;">
                        <h1>Back to main</h1>
                        <span>Just test web structure page</span>
                    </a>
                    <ul class="menu">
                        <li><a href="#" id="home">Home</a></li>
                        <li><a href="#">Styledemo</a></li>
                        <li><a href="#">Fulltest</a></li>
                        <li><a href="#">Gallery</a></li>
                        <li><a href="#">Portfolio</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <section class="content">
        <div class="container">
            <!-- content-heading -->
            <div class="content-heading">
                <h1>A Test<br>
                    Title That Uses<br>
                    For Page Main.</h1>
            </div>
            <!-- content-heading -->
            <!-- content-services -->
            <div class="content-services">
                <div class="content-services-grid">

                    <div class="content-services-item">
                        <i class="fa-solid fa-circle-nodes"></i>
                        <h2>Service Title</h2>
                        <p>Vestassapede et donec ut est libe ros sus et eget sed eget quisq ueta habitur augue</p>
                    </div>

                    <div class="content-services-item">
                        <i class="fa-solid fa-cubes"></i>
                        <h2>Service Title</h2>
                        <p>Vestassapede et donec ut est libe ros sus et eget sed eget quisq ueta habitur augue</p>
                    </div>

                    <div class="content-services-item">
                        <i class="fa-solid fa-user-secret"></i>
                        <h2>Service Title</h2>
                        <p>Vestassapede et donec ut est libe ros sus et eget sed eget quisq ueta habitur augue</p>
                    </div>

                    <div class="content-services-item">
                        <i class="fa-solid fa-bug"></i>
                        <h2>Service Title</h2>
                        <p>Vestassapede et donec ut est libe ros sus et eget sed eget quisq ueta habitur augue</p>
                    </div>
                </div>
            </div>
            <!-- content-services -->
            <!-- content-meet -->
            <div class="content-meet">
                <h1>Meet Our Team</h1>
            </div>
            <!-- content-meet -->
            <!-- content-teams -->
            <div class="content-teams">
                <div class="content-teams-grid">

                    <div class="content-teams-item">
                        <img src="https://via.placeholder.com/225" alt="">
                        <h2>Your Name</h2>
                        <p>Vestassapede et donec ut est liberos sus et eget sed eget. Quisqueta habitur augue magnisl magna phasellus sagittitor ant curabiturpis.</p>
                        <a href="#">View Profile >></a>
                    </div>

                    <div class="content-teams-item">
                        <img src="https://via.placeholder.com/225" alt="">
                        <h2>Your Name</h2>
                        <p>Vestassapede et donec ut est liberos sus et eget sed eget. Quisqueta habitur augue magnisl magna phasellus sagittitor ant curabiturpis.</p>
                        <a href="#">View Profile >></a>
                    </div>

                    <div class="content-teams-item">
                        <img src="https://via.placeholder.com/225" alt="">
                        <h2>Your Name</h2>
                        <p>Vestassapede et donec ut est liberos sus et eget sed eget. Quisqueta habitur augue magnisl magna phasellus sagittitor ant curabiturpis.</p>
                        <a href="#">View Profile >></a>
                    </div>

                    <div class="content-teams-item">
                        <img src="https://via.placeholder.com/225" alt="">
                        <h2>Your Name</h2>
                        <p>Vestassapede et donec ut est liberos sus et eget sed eget. Quisqueta habitur augue magnisl magna phasellus sagittitor ant curabiturpis.</p>
                        <a href="#">View Profile >></a>
                    </div>
                </div>
            </div>
            <!-- content-teams -->
        </div>
    </section>
    <footer>
        <div class="container">
            <!-- footer-grid -->
            <div class="footer-grid">

                <div class="footer-item">
                    <h3>From The Blog</h3>
                    <h4>Post Title</h4>
                    <p class="admin"><a href="#">Admin</a><span>, domainname.com</span></p>
                    <p class="date">Friday</p>
                    <p>Vestibulumaccumsan egestibulum eu justo convallis augue estas aenean elit intesque sed. Facilispede estibulum nulla orna nisl velit elit ac aliquat non tincidunt. Namjusto cras urna urnaretra lor urna neque sed quis orci nulla.</p>
                    <a href="#">Read More >></a>
                </div>

                <div class="footer-item">
                    <h3>Quick Links</h3>
                    <ul>
                        <li><a href="#">>> Lorem Ipsum dolor sit</a></li>
                        <li><a href="#">>> Amet concestetur</a></li>
                        <li><a href="#">>> Praesent vel sem id</a></li>
                        <li><a href="#">>> Curabitur hendrerit</a></li>
                        <li><a href="#">>> Gave Saharat</a></li>
                        <li><a href="#">>> Test tester want to Dev.</a></li>
                        <li><a href="#">>> Pro Developer go go</a></li>
                    </ul>
                </div>

                <div class="footer-item">
                    <h3>Lastest Tweets</h3>
                    <p class="footer3"><a href="#">@namehere</a> Justoid nonummy laoreet phasellent penatoque in antesque pellus elis eget tincidunt. Nequatdui laorem justo a non tellus laoremut vitae doloreet 1 day ago</p>
                    <p class="footer3"><a href="#">@namehere</a> Justoid nonummy laoreet phasellent penatoque in antesque pellus elis eget tincidunt. Nequatdui laorem justo a non tellus laoremut vitae doloreet 1 day ago</p>
                </div>

                <div class="footer-item">
                    <h3>Contact Us</h3>
                    <form action="">
                        <input type="text" name="fullname" placeholder="Full Name">
                        <input type="email" name="email" placeholder="Email Address">
                        <input type="text" name="subject" placeholder="Subject">
                        <textarea name="message" id="message" placeholder="Message"></textarea>
                        <input type="submit" name="submit" id="submit" value="submit">
                    </form>
                </div>
            </div>
            <!-- footer-grid -->
        </div>
    </footer>
    <!-- copyright-grid -->
    <div class="copyright">
        <div class="container">
            <div class="copyright-grid">
                <div class="copytext">
                    <p>Copyright © <script>document.write(new Date().getFullYear())</script> Domain Name - All Rights Reserved</p>
                </div>  
                <div class="credit">
                    <p>Template by GG Templates</p>
                </div>  
            </div>
        </div>
    </div>

    <script src="{{asset('js/test_basicweb_script.js')}}"></script>

</body>
</html>