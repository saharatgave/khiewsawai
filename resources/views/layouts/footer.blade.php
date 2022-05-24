<footer>
    <p>Copyright &copy; <script>document.write(new Date().getFullYear());</script>, Coding by Gave ♥</p>
</footer>



<button id="back-to-top-btn"><i class="fa-solid fa-angles-up"></i></button>
<script>  //script back to top
    const backToTopBtn = document.querySelector('#back-to-top-btn');
    window.addEventListener("scroll", scrollFunction);
    
    // backToTopBtn.addEventListener("click", () => {
    //     window.scrollTo(0, 0);
    // });
    backToTopBtn.addEventListener("click", smoothScrollBackToTop);

    function scrollFunction() {
        if (window.pageYOffset > 300) {  //Show
            if (!backToTopBtn.classList.contains("btnEntrance")) {
                backToTopBtn.classList.add("btnEntrance");
                backToTopBtn.classList.remove("btnExit");
                backToTopBtn.style.display = "block";
            }
        } else {  //Hide
            if (backToTopBtn.classList.contains("btnEntrance")) {
                backToTopBtn.classList.add("btnExit");
                backToTopBtn.classList.remove("btnEntrance");
                // setTimeout(() => {
                //     backToTopBtn.style.display = "none";
                // }, 2500);
            }
        }
    }

    function smoothScrollBackToTop() {
        const targetPosition = 0;
        const startPosition = window.pageYOffset;
        const distance = targetPosition - startPosition;
        const duration = 750;
        let start = null;
        
        window.requestAnimationFrame(step);

        function step(timestamp) {
            if (!start) start = timestamp;
            const progress = timestamp - start;
            window.scrollTo(0, easeInOutCubic(progress, startPosition, distance, duration));
            if (progress < duration) window.requestAnimationFrame(step);
        }
    }

    // Easing Functions

    function linear(t, b, c, d) {
        return c*t/d + b;
    };

    function easeInOutQuad(t, b, c, d) {
        t /= d/2;
        if (t < 1) return c/2*t*t + b;
        t--;
        return -c/2 * (t*(t-2) - 1) + b;
    };

    function easeInOutCubic(t, b, c, d) {
        t /= d/2;
        if (t < 1) return c/2*t*t*t + b;
        t -= 2;
        return c/2*(t*t*t + 2) + b;
    };

</script>