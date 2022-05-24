<header class="navbar">
    <nav>
        <div class="logo">
            <h1><a href="{{ route('home')}}">Khiewsawai</a></h1>
        </div>
        <ul class="menu-list">
            <div class="menu-icon cancel-menu-btn">
                <i class="fas fa-times"></i>
            </div>
            <li><a href="{{ route('home')}}">Home</a></li>
            <li><a href="#">Memories</a></li>
            <li><a href="#">Chat</a></li>
            <li><a href="{{route('gave')}}">Gave</a></li>
            <li><a href="#">Login</a></li> 
        </ul>
        <div class="menu-icon menu-btn">
            <i class="fas fa-bars"></i>
        </div>
    </nav>
</header>

<script>
    const menuList = document.querySelector(".menu-list");
    const menuBtn = document.querySelector(".menu-btn");
    const cancelBtn = document.querySelector(".cancel-menu-btn");

    const navbar = document.querySelector(".navbar");

    menuBtn.onclick = () => {
        menuList.classList.add("active-menu");
        menuBtn.classList.add("hide-menu");
    }
    cancelBtn.onclick = () => {
        menuList.classList.remove("active-menu");
        menuBtn.classList.remove("hide-menu");
    }

    window.onscroll = () => {
        this.scrollY > 60 ? navbar.classList.add("nav-sticky") : navbar.classList.remove("nav-sticky");
    }
</script>