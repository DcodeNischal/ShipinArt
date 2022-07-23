<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">
    <link rel="stylesheet" href="../css/homepage-style.css">
    <link rel="stylesheet" href="../css/about.css">
    <link rel="shortcut icon" href="/">
    <title>About</title>
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
            <li><a href="/" class="animate-catagories">HOME</a></li>
            <li><a href="about.php" class="animate-catagories">ABOUT</a></li>
            <li><a href="catagories.php" class="animate-catagories">CATAGORIES</a></li>
            <li><a href="/" class="animate-catagories">SERVICES</a></li>
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

    <!-- About START -->
    <div class="about">
        <div class="about-title">
            <h1>About Us</h1>
        </div>
        <div class="description">
            <p><span>Shipin</span>Art is a college project done by <b>Nischal Dhakal</b>, <b>Ujjwal Dhakal</b> and <b>Madhav Khanal</b>. This project is an e-commerce website designed especially for Paintings and Arts.</p>
        </div>
    </div>

    <!-- About END -->

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