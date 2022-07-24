<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">
    <link rel="stylesheet" href="../css/homepage-style.css">
    <link rel="stylesheet" href="../css/team.css">
    <title>Our Team</title>
</head>

<body>
    <!-- NAVBAR -->
    <nav class="navbar">
        <!-- LOGO -->
        <div class="logo">

            <a href="/">Shipin<span>Art</span></a>

        </div>
        <!-- MENU -->
        <div class="menu">
            <li><a href="../" class="animate-catagories">HOME</a></li>
            <li><a href="about.php" class="animate-catagories">ABOUT</a></li>
            <li><a href="catagories.php" class="animate-catagories">CATAGORIES</a></li>
            <li><a href="../" class="animate-catagories">SERVICES</a></li>
            <li><a href="team.php" class="animate-catagories">CONTACT</a></li>
        </div>
        <!-- LOGIN & SEARCH -->
        <div class="login-search">
            <form action="">
                <input type="text" name="search-catagories" id="search-catagories" placeholder="Search">
                <a href="/"><button type="submit" class="search"><img
                            src="https://i.ibb.co/K00b8MF/magnifying-glass-solid.png" alt=""
                            style="height: 15px; color: aliceblue; filter: invert(100%);"></button></a>
            </form>
            <button class="cart-nav" id="cart-nav"><img src="https://i.ibb.co/DgQRmPZ/opencart-brands.png" alt="cart"
                    style=" height:15px; background-color:none; filter: invert(100%);"></button>
            <button class="login" id="login" onclick="chooseportal(event)" ;> <img
                    src="https://i.ibb.co/Vq8vRBM/user-solid.png" alt=""
                    style="height: 15px; color: aliceblue; filter: invert(100%);"> LOGIN </button>

            <button class="logout login" id="logout"><img src="https://i.ibb.co/Vq8vRBM/user-solid.png" alt=""
                    style="height: 15px; color: aliceblue; filter: invert(100%);">LOGOUT</button>
        </div>
    </nav>
    <!-- Login Block -->
    <div class="login-block-wrapper" id="login-block-wrapper" onclick="exitlogin(event)">
        <div class="login-block" id="login-block">
            <span>LOGIN</span>
            <div class="login-block-elements">
                <a href="../html/signin-artist.php"><button>Artist Portal</button></a>
                <a href="../html/signin-customer.php"><button>Customer Portal</button></a>
            </div>
        </div>
    </div>
    <!-- Our Team -->
    <div class="title">
        <h1 class="team-title">Contact Us</h1>
    </div>

    <!-- Persons in the team -->

    <div class="team-members">
        <!-- NISCHAL DHAKAL -->
        <div class="person">
            <div class="image">
                <img src="https://i1.rgstatic.net/ii/profile.image/1011764162465794-1618234782252_Q512/Nischal-Dhakal.jpg"
                    alt="nischal">
            </div>
            <div class="description">
                <div class="name">
                    <h2>Nischal Dhakal</h2>
                    <div class="links">
                        <a href="https://www.linkedin.com/in/nischaldhakal/"><i class="fab fa-linkedin-in"></i></a>
                        <a href="https://www.github.com/dcodenischal"><i class="fab fa-github"></i></a>
                        <a href="https://www.instagram.com/_nischal_dhakal_"><i class="fab fa-instagram"></i></a>
                    </div>
                    <div class="contact">
                        <a href="mailto:dnischal11@gmail.com"><i class="fas fa-envelope"></i></a>
                        <a href="tel:+9779862405060"><i class="fas fa-phone"></i></a>
                    </div>

                </div>
            </div>
        </div>
        <!-- UJJWAL DHAKAL -->
        <div class="person">
            <div class="image">
                <img src="data:image/jpeg;base64,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"
                    alt="ujjwal">
            </div>
            <div class="description">
                <div class="name">
                    <h2>Ujjwal Dhakal</h2>
                    <div class="links">
                        <a href="https://www.linkedin.com/in/ujjwal-dhakal-567b13211/"><i class="fab fa-linkedin-in"></i></a>
                        <a href="https://github.com/Ujjwal-D"><i class="fab fa-github"></i></a>
                        <a href="https://www.instagram.com/qudgo/"><i class="fab fa-instagram"></i></a>
                    </div>
                    <div class="contact">
                        <a href="mailto:abishekdues@gmail.com"><i class="fas fa-envelope"></i></a>
                        <a href="tel:+9779843645309"><i class="fas fa-phone"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- MADHAV KHANAL -->
        <div class="person">
            <div class="image">
                <img src="https://thumbs.dreamstime.com/z/vector-illustration-avatar-dummy-sign-collection-avatar-image-stock-symbol-web-vector-design-avatar-dummy-137160097.jpg"
                    alt="madhav">
            </div>
            <div class="description">
                <div class="name">
                    <h2>Madhav Khanal</h2>
                    <div class="links">
                        <a href="https://www.linkedin.com/in/nischaldhakal/"><i class="fab fa-linkedin-in"></i></a>
                        <a href="https://www.github.com/dcodenischal"><i class="fab fa-github"></i></a>
                        <a href="https://www.instagram.com/_nischal_dhakal_"><i class="fab fa-instagram"></i></a>
                    </div>
                    <div class="contact">
                        <a href="mailto:dnischal11@gmail.com"><i class="fas fa-envelope"></i></a>
                        <a href="tel:+9779862405060"><i class="fas fa-phone"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

     <!-- SEPERATOR -->
     <div class="seperator">
        <div class="seperatoro">
            <hr>
        </div>
    </div>

    <!-- JOIN MAILING LIST -->
    <div class="join-mail">
        <span>JOIN OUR MAILING LIST</span>
        <form action="/">
            <input type="text" name="mail-join" id="mail-join" placeholder="your-email@email.com" required>
            <button type="submit">SUBMIT EMAIL</button>
        </form>
    </div>


    <!-- HELP/FAQ and SERVICES -->

    <div class="help-services">
        <div class="help">
            <span class="help-title">HELP / FAQ</span>
            <a href="/"><span>Return & refund</span></a>
            <a href="/"><span>Shipping rates and information</span></a>
            <a href="/"><span>Cancel items and orders</span></a>
            <a href="/"><span>FAQs</span></a>
        </div>
        <div class="services">
            <span class="services-title">OUR ART SERVICES</span>
            <a href="/"><span>Popular Arts</span></a>
            <a href="/"><span>Wall Paintings</span></a>
            <a href="/"><span>Customized orders</span></a>
        </div>
    </div>

    <!-- SEPERATOR -->
    <div class="seperator">
        <div class="seperatoro">
            <hr>
        </div>
    </div>

    <!-- Featured brand and artists -->

    <div class="featured">

        <div class="brands">
            <p>FEATURED BRANDS</p>
            <div class="IMAGES">
                <div class="one">
                    <a href="/"><img class="featured-image"
                            src="https://images.unsplash.com/photo-1635805737707-575885ab0820?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8c3BpZGVybWFufGVufDB8fDB8fA%3D%3D&w=1000&q=80"
                            alt=""></a>
                    <a href="/"><img class="featured-image"
                            src="https://images.unsplash.com/photo-1635805737707-575885ab0820?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8c3BpZGVybWFufGVufDB8fDB8fA%3D%3D&w=1000&q=80"
                            alt=""></a>
                    <a href="/"><img class="featured-image"
                            src="https://images.unsplash.com/photo-1635805737707-575885ab0820?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8c3BpZGVybWFufGVufDB8fDB8fA%3D%3D&w=1000&q=80"
                            alt=""></a>
                    <a href="/"><img class="featured-image"
                            src="https://images.unsplash.com/photo-1635805737707-575885ab0820?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8c3BpZGVybWFufGVufDB8fDB8fA%3D%3D&w=1000&q=80"
                            alt=""></a>
                    <a href="/"><img class="featured-image"
                            src="https://images.unsplash.com/photo-1635805737707-575885ab0820?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8c3BpZGVybWFufGVufDB8fDB8fA%3D%3D&w=1000&q=80"
                            alt=""></a>

                </div>
            </div>
        </div>
    </div>

    <!-- SEPERATOR -->
    <div class="seperator">
        <div class="seperatoro">
            <hr>
        </div>
    </div>

    <!-- FOOTER -->
    <div class="footer-major">
        <div class="footer">
            <a href=""><span>Privacy Policy</span></a>
            <span>|</span>
            <a href=""><span>Terms and conditions</span></a>
            <span>|</span>
            <a href=""><span>Copyright</span></a>
        </div>
    </div>
    <!-- SEPERATOR -->
    <div class="seperator">
        <div class="seperatoro">
            <hr>
        </div>
    </div>

    <!-- LAST FOOTER -->

    <div class="last-footer">
        <span>Copyright 2022, <a href="/">ShipinArt Inc.</a></span>
    </div>

    <!-- END HTML -->

    <script src="../js/signin-signup-artist.js"></script>
</body>

</html>