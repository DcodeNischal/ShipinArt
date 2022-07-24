<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/homepage-style.css">
    <link rel="stylesheet" href="../css/signin-signup.css">
    <title>ShipinArt</title>
</head>

<body>
    <!-- NAVBAR -->
    <nav class="navbar">
        <!-- LOGO -->
        <div class="logo">

            <a href="../index.php">Shipin<span>Art</span></a>

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


    <!-- Title and headers -->
    <h1 class="title">For Customers</h1>
    <!-- SIGNIN SIGNUP FOR ARTISTS -->

    <div class="box">
        <div class="inside-box">
            <div class="toggle-buttons">
                <button class="toggle-button signupbutton">Signup</button>
                <button class="toggle-button loginbutton">Login</button>
                <button class="toggleMove">Signup</button>
            </div>
            <div class="signup-form">
                <form action="customer_process_signup.php" class="form signupp signupform" method="post">
                    <div class="input">
                        <input type="text" name="FullName" id="customer-full-name" placeholder="Full Name"
                            autocomplete="off" required><span id="name-error-area"
                            style="color:red; font-size: medium;"></span>
                    </div>
                    <div class="input">
                        <input type="email" name="customeremail" id="customer-email" placeholder="Email" required><span
                            id="email-error-area" style="color:red; font-size: medium;"></span>
                    </div>
                    <div class="input">
                        <input type="text" name="customerphone" id="customer-phone" placeholder="Phone Number"
                            autocomplete="off" required><span id="phone-error-area"
                            style="color:red; font-size: medium;"></span>
                    </div>
                    <div class="input">
                        <input type="text" name="customeraddress" id="customer-address" placeholder="Full address"
                            autocomplete="off" required><span id="address-error-area"
                            style="color:red; font-size: medium;"></span>
                    </div>
                    <div class="input">
                        <input type="password" name="customerpass" id="customer-pass" placeholder="New password"
                            autocomplete="off" required><span id="password-error-area"
                            style="color:red; font-size: medium;"></span>
                    </div>
                    <div class="input">
                        <input type="password" name="confirm-customer-pass" id="confirm-customer-pass"
                            placeholder="Confirm password" autocomplete="off" required><span
                            id="confirm_password-error-area" style="color:red; font-size: medium;"></span>
                    </div>
                    <div class="terms-conditions">
                        <p><input type="checkbox" name="terms-conditions" id="terms-conditions">I agree to the <a
                                href="/">Terms & Conditions</a>.</p>
                    </div>
                    <div class="submit-button-wrap">
                        <button class="submit-button" type="submit">Signup</button>
                    </div>

                </form>


                <!-- SIGNIN PAGE -->

            <?php
                session_start();

                //if logged in go to home page 
                //else show signin page

                if(isset($_SESSION['customer_id']))
                {
                    //session exists redirect to customers home
                    header('Location: customer_home.php');
                }
                else
                {
            ?>
                <form action="../index.php" class="form loginn">
                    <div class="input">
                        <input type="email" name="customeremail" id="login-customer-email" placeholder="Email"
                            autocomplete="off" required>
                    </div>
                    <div class="input">
                        <input type="password" name="customerpass" id="login-customer-pass" placeholder="Password"
                            autocomplete="off" required>
                    </div>
                    <div class="forgot-password">
                        <a href="/">Forgot Password ?</a>
                    </div>
                    <div class="submit-button-wrap">
                        <button class="submit-button" type="submit">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <?php
        }
    ?>

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
    <script src="../js/signin-signup-customer.js"></script>
    <script src="../js/signin-signup-artist.js"></script>
</body>

</html>