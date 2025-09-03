<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
<script>
    // Inicializaciones opcionales para Bootstrap
    document.addEventListener('DOMContentLoaded', function() {
        // Inicializa tooltips si hay elementos que los usan
        var tooltipTriggerList = Array.prototype.slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
        tooltipTriggerList.forEach(function(el) {
            new bootstrap.Tooltip(el);
        });

        // Inicializa popovers si hay elementos que los usan
        var popoverTriggerList = Array.prototype.slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'));
        popoverTriggerList.forEach(function(el) {
            new bootstrap.Popover(el);
        });
    });
</script>
<footer class="w3l-footer-29-main">
    <div class="footer-29 py-5">
        <div class="container py-lg-4">
            <div class="row align-items-center mb-3">
                <h2 class="sign-left col-lg-7"> Join our community by using our services and grow your business. </h2>
                <div class="footerw3-btn col-lg-5 ps-lg-5"><a href="#" class="btn btn-secondary btn-style"> Try it For Free <span class="fas fa-angle-double-right ms-2"></span></a></div>
            </div>

            <div class="row footer-top-29 mt-md-5 mt-4">
                <div class="col-lg-4 col-md-6 footer-list-29 footer-1 pe-lg-5">
                    <h6 class="footer-title-29">About</h6>
                    <div class="footer-listw3-grids">
                        <p class="pe-lg-4">Lorem ipsum dolor sit amet consectetur ipsum amet elit.Sit amet consectetur ipsum amet,Lorem ipsum dolor sit amet. </p>
                        <div class="w3pt-call-box mt-4">
                            <div class="w3pt-call-info">
                                <h5>Get Us Support</h5>

                                <h5><a href="tel:+1(21) 234 557 456"><i class="fas fa-phone-alt me-1"></i> +1(21) 234 557 456</a></h5>
                                <h5><a href="tel:+1(21) 234 4568"><i class="far fa-envelope me-1"></i> <a href="mailto:support@mail.com" class="mail"> support@mail.com</a></a></h5>

                            </div>

                        </div>
                    </div>

                </div>
                <div class="col-lg-2 col-md-6 footer-list-29 footer-3 mt-lg-0 mt-5">
                    <h6 class="footer-title-29">Links</h6>
                    <div class="footer-listw3-grids">
                        <ul class="footer-listw3">
                            <li><a href="#us">About Us</a></li>
                            <li><a href="#team">Our Team</a></li>
                            <li><a href="#pro">Projects</a></li>
                            <li><a href="#career">Careers</a></li>
                            <li><a href="#terms">Terms of Use</a></li>
                            <li><a href="#tips">Privacy Policy</a></li>

                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 footer-list-29 footer-3 mt-lg-0 mt-5">
                    <h6 class="footer-title-29">Services</h6>
                    <div class="footer-listw3-grids">
                        <ul class="footer-listw3">
                            <li><a href="#lift">Secure services</a></li>
                            <li><a href="#cardio">Digital arrange</a></li>
                            <li><a href="#fit">Content strategy</a></li>
                            <li><a href="#tips">Processing services</a></li>
                            <li><a href="#tips">Web hosting</a></li>
                            <li><a href="#tips">Page optimization</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 footer-list-29 footer-4 mt-lg-0 mt-5 ps-lg-5">
                    <h6 class="footer-title-29">Keep Connected</h6>
                    <p>Get Updates By Subscribe Our Weekly Newsletter</p>

                    <form action="#" class="subscribe" method="post">
                        <input type="email" name="email" placeholder="Your Email Address" required="">
                        <button><span class="fas fa-paper-plane"></span></button>
                    </form>
                    <div class="main-social-footer-29 mt-4">
                        <a href="#facebook" class="facebook"><span class="fab fa-facebook-f"></span></a>
                        <a href="#twitter" class="twitter"><span class="fab fa-twitter"></span></a>
                        <a href="#instagram" class="instagram"><span class="fab fa-instagram"></span></a>

                        <a href="#linkd" class="linkd"><span class="fab fa-linkedin-in"></span></a>
                    </div>
                </div>
            </div>
            <div class="bottom-copies text-center">
                <p class="copy-footer-29">© 2021 KoDeal. All rights reserved. Design by
                    <a href="https://w3layouts.com/" target="_blank"> W3Layouts</a>
                </p>
            </div>
        </div>
    </div>

    <!-- move top -->
    <button onclick="topFunction()" id="movetop" title="Go to top">
        <span class="fa fa-angle-up"></span>
    </button>
    <script>
        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function() {
            scrollFunction()
        };

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                document.getElementById("movetop").style.display = "block";
            } else {
                document.getElementById("movetop").style.display = "none";
            }
        }

        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }
    </script>
    <!-- //move top -->

</footer>
<!--//footer-9 -->
<!-- Js scripts -->
<!-- Template JavaScript -->
<script src="<?= base_url('assets/js/jquery-3.3.1.min.js') ?>"></script>
<script src="<?= base_url('assets/js/theme-change.js') ?>"></script>
<!-- MENU-JS -->
<script>
    $(window).on("scroll", function() {
        var scroll = $(window).scrollTop();

        if (scroll >= 80) {
            $("#site-header").addClass("nav-fixed");
        } else {
            $("#site-header").removeClass("nav-fixed");
        }
    });

    //Main navigation Active Class Add Remove
    $(".navbar-toggler").on("click", function() {
        $("header").toggleClass("active");
    });
    $(document).on("ready", function() {
        if ($(window).width() > 991) {
            $("header").removeClass("active");
        }
        $(window).on("resize", function() {
            if ($(window).width() > 991) {
                $("header").removeClass("active");
            }
        });
    });
</script>
<!-- //MENU-JS -->

<!-- disable body scroll which navbar is in active -->
<script>
    $(function() {
        $('.navbar-toggler').click(function() {
            $('body').toggleClass('noscroll');
        })
    });
</script>
<!-- //disable body scroll which navbar is in active -->

<!-- //bootstrap (local fallback) -->
<script src="<?= base_url('assets/js/bootstrap.min.js') ?>"></script>

</body>

</html>