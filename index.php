<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">
    <link rel="stylesheet" href="css/homepage-style.css">
    <link rel="shortcut icon" href="/">
    <title>ShipinArt</title>
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
            <li><a href="/html/about.php" class="animate-catagories">ABOUT</a></li>
            <li><a href="/html/catagories.php" class="animate-catagories">CATAGORIES</a></li>
            <li><a href="/" class="animate-catagories">SERVICES</a></li>
            <li><a href="html/team.php" class="animate-catagories">CONTACT</a></li>
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
                <a href="html/signin-artist.php"><button>Artist Portal</button></a>
                <a href="html/signin-customer.php"><button>Customer Portal</button></a>
            </div>
        </div>
    </div>

    <!-- SLIDESHOW -->
    <div class="background-image">
        <div class="acrylic-title top-image">

           <div class="holder">
            <a href="/">
                <span>A</span>
                <span>C</span>
                <span>R</span>
                <span>Y</span>
                <span>L</span>
                <span>I</span>
                <span>C</span>
            </a>
           </div>

        </div>
        
        <div class="sketch-title top-image">

            <div class="holder">
                <a href="/">
                    <span>S</span>
                    <span>K</span>
                    <span>E</span>
                    <span>T</span>
                    <span>C</span>
                    <span>H</span>
                </a>
            </div>

        </div>

        <div class="modern-title top-image">

            <div class="holder">
                <a href="/">
                    <span>M</span>
                    <span>O</span>
                    <span>D</span>
                    <span>E</span>
                    <span>R</span>
                    <span>N</span>
                </a>
            </div>

        </div>

        <div class="abstract-title top-image">

            <div class="holder">
                <a href="/">
                    <span>A</span>
                    <span>B</span>
                    <span>S</span>
                    <span>T</span>
                    <span>R</span>
                    <span>A</span>
                    <span>C</span>
                    <span>T</span>
                </a>
            </div>

        </div>

        <div class="oil-title top-image">

           <div class="holder">
            <a href="/">
                <span>O</span>
                <span>I</span>
                <span>L</span>
            </a>
           </div>

        </div>
        
        .
    </div>

    <!-- CATAGORIES -->
    <!-- SEPERATOR -->
    <div class="seperator">
        <div class="seperatoro">
            <hr>
        </div>
    </div>
    <!-- 1st catagories -->
    <div class="acrylic">
        <div class="name">
            <span class="animate-title">ACRYLIC PAINTINGS</span>
        </div>
        <div class="temporary">
            <a href=""><i class="fas fa-arrow-left"></i></a>


            <div class="catagories-box">
                <div class="picture">
                    <img src="https://s3.amazonaws.com/gallerist-live/products/28836/large/beautiful-acrylic-painting.jpg?1571493057"
                        alt="">
                </div>
                <div class="details">
                    <p>PAINTING NAME</p>
                    <div class="size-price">
                        <span>2 x 2 </span>
                        <span>Rs. 4000</span>
                    </div>
                    <p>ARTIST NAME</p>
                </div>
                <div class="cart">
                    <a href="/"><button><img src="https://i.ibb.co/DgQRmPZ/opencart-brands.png" alt="cart"
                                style="height: 15px; color: aliceblue; filter: invert(100%);"> ADD TO CART</button></a>
                </div>

            </div>


            <div class="catagories-box">
                <div class="picture">
                    <img src="https://s3.amazonaws.com/gallerist-live/products/28836/large/beautiful-acrylic-painting.jpg?1571493057"
                        alt="">

                </div>
                <div class="details">
                    <p>PAINTING NAME</p>
                    <div class="size-price">
                        <span>2 x 2 </span>
                        <span>Rs. 4000</span>
                    </div>
                    <p>ARTIST NAME</p>
                </div>
                <div class="cart">
                    <a href="/"><button><img src="https://i.ibb.co/DgQRmPZ/opencart-brands.png" alt="cart"
                                style="height: 15px; color: aliceblue; filter: invert(100%);"> ADD TO CART</button></a>
                </div>
            </div>


            <div class="catagories-box">
                <div class="picture">
                    <img src="https://s3.amazonaws.com/gallerist-live/products/28836/large/beautiful-acrylic-painting.jpg?1571493057"
                        alt="">
                </div>
                <div class="details">
                    <p>PAINTING NAME</p>
                    <div class="size-price">
                        <span>2 x 2 </span>
                        <span>Rs. 4000</span>
                    </div>
                    <p>ARTIST NAME</p>
                </div>
                <div class="cart">
                    <a href="/"><button><img src="https://i.ibb.co/DgQRmPZ/opencart-brands.png" alt="cart"
                                style="height: 15px; color: aliceblue; filter: invert(100%);"> ADD TO CART</button></a>
                </div>
            </div>


            <div class="catagories-box">
                <div class="picture">
                    <img src="https://s3.amazonaws.com/gallerist-live/products/28836/large/beautiful-acrylic-painting.jpg?1571493057"
                        alt="">
                </div>
                <div class="details">
                    <p>PAINTING NAME</p>
                    <div class="size-price">
                        <span>2 x 2 </span>
                        <span>Rs. 4000</span>
                    </div>
                    <p>ARTIST NAME</p>
                </div>
                <div class="cart">
                    <a href="/"><button><img src="https://i.ibb.co/DgQRmPZ/opencart-brands.png" alt="cart"
                                style="height: 15px; color: aliceblue; filter: invert(100%);"> ADD TO CART</button></a>
                </div>
            </div>

            <div class="catagories-box">
                <div class="picture">
                    <img src="https://s3.amazonaws.com/gallerist-live/products/28836/large/beautiful-acrylic-painting.jpg?1571493057"
                        alt="">

                </div>
                <div class="details">
                    <p>PAINTING NAME</p>
                    <div class="size-price">
                        <span>2 x 2 </span>
                        <span>Rs. 4000</span>
                    </div>
                    <p>ARTIST NAME</p>
                </div>
                <div class="cart">
                    <a href="/"><button><img src="https://i.ibb.co/DgQRmPZ/opencart-brands.png" alt="cart"
                                style="height: 15px; color: aliceblue; filter: invert(100%);"> ADD TO CART</button></a>
                </div>
            </div>


            <a href=""><i class="fas fa-arrow-right"></i></a>
        </div>
    </div>

    <!-- SEPERATOR -->
    <div class="seperator">
        <div class="seperatoro">
            <hr>
        </div>
    </div>


    <!-- 2nd catagories -->
    <div class="acrylic">
        <div class="name">
            <span class="animate-title">OIL PAINTINGS</span>
        </div>
        <div class="temporary">
            <a href=""><i class="fas fa-arrow-left"></i></a>


            <div class="catagories-box">
                <div class="picture">
                    <img src="https://s3.amazonaws.com/gallerist-live/products/28836/large/beautiful-acrylic-painting.jpg?1571493057"
                        alt="">

                </div>
                <div class="details">
                    <p>PAINTING NAME</p>
                    <div class="size-price">
                        <span>2 x 2 </span>
                        <span>Rs. 4000</span>
                    </div>
                    <p>ARTIST NAME</p>
                </div>
                <div class="cart">
                    <a href="/"><button><img src="https://i.ibb.co/DgQRmPZ/opencart-brands.png" alt="cart"
                                style="height: 15px; color: aliceblue; filter: invert(100%);"> ADD TO CART</button></a>
                </div>

            </div>


            <div class="catagories-box">
                <div class="picture">
                    <img src="https://s3.amazonaws.com/gallerist-live/products/28836/large/beautiful-acrylic-painting.jpg?1571493057"
                        alt="">

                </div>
                <div class="details">
                    <p>PAINTING NAME</p>
                    <div class="size-price">
                        <span>2 x 2 </span>
                        <span>Rs. 4000</span>
                    </div>
                    <p>ARTIST NAME</p>
                </div>
                <div class="cart">
                    <a href="/"><button><img src="https://i.ibb.co/DgQRmPZ/opencart-brands.png" alt="cart"
                                style="height: 15px; color: aliceblue; filter: invert(100%);"> ADD TO CART</button></a>
                </div>
            </div>


            <div class="catagories-box">
                <div class="picture">
                    <img src="https://s3.amazonaws.com/gallerist-live/products/28836/large/beautiful-acrylic-painting.jpg?1571493057"
                        alt="">

                </div>
                <div class="details">
                    <p>PAINTING NAME</p>
                    <div class="size-price">
                        <span>2 x 2 </span>
                        <span>Rs. 4000</span>
                    </div>
                    <p>ARTIST NAME</p>
                </div>
                <div class="cart">
                    <a href="/"><button><img src="https://i.ibb.co/DgQRmPZ/opencart-brands.png" alt="cart"
                                style="height: 15px; color: aliceblue; filter: invert(100%);"> ADD TO CART</button></a>
                </div>
            </div>


            <div class="catagories-box">
                <div class="picture">
                    <img src="https://s3.amazonaws.com/gallerist-live/products/28836/large/beautiful-acrylic-painting.jpg?1571493057"
                        alt="">

                </div>
                <div class="details">
                    <p>PAINTING NAME</p>
                    <div class="size-price">
                        <span>2 x 2 </span>
                        <span>Rs. 4000</span>
                    </div>
                    <p>ARTIST NAME</p>
                </div>
                <div class="cart">
                    <a href="/"><button><img src="https://i.ibb.co/DgQRmPZ/opencart-brands.png" alt="cart"
                                style="height: 15px; color: aliceblue; filter: invert(100%);"> ADD TO CART</button></a>
                </div>
            </div>

            <div class="catagories-box">
                <div class="picture">
                    <img src="https://s3.amazonaws.com/gallerist-live/products/28836/large/beautiful-acrylic-painting.jpg?1571493057"
                        alt="">

                </div>
                <div class="details">
                    <p>PAINTING NAME</p>
                    <div class="size-price">
                        <span>2 x 2 </span>
                        <span>Rs. 4000</span>
                    </div>
                    <p>ARTIST NAME</p>
                </div>
                <div class="cart">
                    <a href="/"><button><img src="https://i.ibb.co/DgQRmPZ/opencart-brands.png" alt="cart"
                                style="height: 15px; color: aliceblue; filter: invert(100%);"> ADD TO CART</button></a>
                </div>
            </div>


            <a href=""><i class="fas fa-arrow-right"></i></a>
        </div>
    </div>

    <!-- SEPERATOR -->
    <div class="seperator">
        <div class="seperatoro">
            <hr>
        </div>
    </div>

    <!-- 3rd catagories -->

    <div class="acrylic">
        <div class="name">
            <span class="animate-title">MODERN ARTS</span>
        </div>
        <div class="temporary">
            <a href=""><i class="fas fa-arrow-left"></i></a>


            <div class="catagories-box">
                <div class="picture">
                    <img src="https://s3.amazonaws.com/gallerist-live/products/28836/large/beautiful-acrylic-painting.jpg?1571493057"
                        alt="">

                </div>
                <div class="details">
                    <p>PAINTING NAME</p>
                    <div class="size-price">
                        <span>2 x 2 </span>
                        <span>Rs. 4000</span>
                    </div>
                    <p>ARTIST NAME</p>
                </div>
                <div class="cart">
                    <a href="/"><button><img src="https://i.ibb.co/DgQRmPZ/opencart-brands.png" alt="cart"
                                style="height: 15px; color: aliceblue; filter: invert(100%);"> ADD TO CART</button></a>
                </div>

            </div>


            <div class="catagories-box">
                <div class="picture">
                    <img src="https://s3.amazonaws.com/gallerist-live/products/28836/large/beautiful-acrylic-painting.jpg?1571493057"
                        alt="">

                </div>
                <div class="details">
                    <p>PAINTING NAME</p>
                    <div class="size-price">
                        <span>2 x 2 </span>
                        <span>Rs. 4000</span>
                    </div>
                    <p>ARTIST NAME</p>
                </div>
                <div class="cart">
                    <a href="/"><button><img src="https://i.ibb.co/DgQRmPZ/opencart-brands.png" alt="cart"
                                style="height: 15px; color: aliceblue; filter: invert(100%);"> ADD TO CART</button></a>
                </div>
            </div>


            <div class="catagories-box">
                <div class="picture">
                    <img src="https://s3.amazonaws.com/gallerist-live/products/28836/large/beautiful-acrylic-painting.jpg?1571493057"
                        alt="">

                </div>
                <div class="details">
                    <p>PAINTING NAME</p>
                    <div class="size-price">
                        <span>2 x 2 </span>
                        <span>Rs. 4000</span>
                    </div>
                    <p>ARTIST NAME</p>
                </div>
                <div class="cart">
                    <a href="/"><button><img src="https://i.ibb.co/DgQRmPZ/opencart-brands.png" alt="cart"
                                style="height: 15px; color: aliceblue; filter: invert(100%);"> ADD TO CART</button></a>
                </div>
            </div>


            <div class="catagories-box">
                <div class="picture">
                    <img src="https://s3.amazonaws.com/gallerist-live/products/28836/large/beautiful-acrylic-painting.jpg?1571493057"
                        alt="">

                </div>
                <div class="details">
                    <p>PAINTING NAME</p>
                    <div class="size-price">
                        <span>2 x 2 </span>
                        <span>Rs. 4000</span>
                    </div>
                    <p>ARTIST NAME</p>
                </div>
                <div class="cart">
                    <a href="/"><button><img src="https://i.ibb.co/DgQRmPZ/opencart-brands.png" alt="cart"
                                style="height: 15px; color: aliceblue; filter: invert(100%);"> ADD TO CART</button></a>
                </div>
            </div>

            <div class="catagories-box">
                <div class="picture">
                    <img src="https://s3.amazonaws.com/gallerist-live/products/28836/large/beautiful-acrylic-painting.jpg?1571493057"
                        alt="">

                </div>
                <div class="details">
                    <p>PAINTING NAME</p>
                    <div class="size-price">
                        <span>2 x 2 </span>
                        <span>Rs. 4000</span>
                    </div>
                    <p>ARTIST NAME</p>
                </div>
                <div class="cart">
                    <a href="/"><button><img src="https://i.ibb.co/DgQRmPZ/opencart-brands.png" alt="cart"
                                style="height: 15px; color: aliceblue; filter: invert(100%);"> ADD TO CART</button></a>
                </div>
            </div>


            <a href=""><i class="fas fa-arrow-right"></i></a>
        </div>
    </div>

    <!-- SEPERATOR -->
    <div class="seperator">
        <div class="seperatoro">
            <hr>
        </div>
    </div>

    <!-- 4th catagories -->

    <div class="acrylic">
        <div class="name">
            <span class="animate-title">SKETCHES</span>
        </div>
        <div class="temporary">
            <a href=""><i class="fas fa-arrow-left"></i></a>


            <div class="catagories-box">
                <div class="picture">
                    <img src="https://s3.amazonaws.com/gallerist-live/products/28836/large/beautiful-acrylic-painting.jpg?1571493057"
                        alt="">

                </div>
                <div class="details">
                    <p>PAINTING NAME</p>
                    <div class="size-price">
                        <span>2 x 2 </span>
                        <span>Rs. 4000</span>
                    </div>
                    <p>ARTIST NAME</p>
                </div>
                <div class="cart">
                    <a href="/"><button><img src="https://i.ibb.co/DgQRmPZ/opencart-brands.png" alt="cart"
                                style="height: 15px; color: aliceblue; filter: invert(100%);"> ADD TO CART</button></a>
                </div>

            </div>


            <div class="catagories-box">
                <div class="picture">
                    <img src="https://s3.amazonaws.com/gallerist-live/products/28836/large/beautiful-acrylic-painting.jpg?1571493057"
                        alt="">

                </div>
                <div class="details">
                    <p>PAINTING NAME</p>
                    <div class="size-price">
                        <span>2 x 2 </span>
                        <span>Rs. 4000</span>
                    </div>
                    <p>ARTIST NAME</p>
                </div>
                <div class="cart">
                    <a href="/"><button><img src="https://i.ibb.co/DgQRmPZ/opencart-brands.png" alt="cart"
                                style="height: 15px; color: aliceblue; filter: invert(100%);"> ADD TO CART</button></a>
                </div>
            </div>


            <div class="catagories-box">
                <div class="picture">
                    <img src="https://s3.amazonaws.com/gallerist-live/products/28836/large/beautiful-acrylic-painting.jpg?1571493057"
                        alt="">

                </div>
                <div class="details">
                    <p>PAINTING NAME</p>
                    <div class="size-price">
                        <span>2 x 2 </span>
                        <span>Rs. 4000</span>
                    </div>
                    <p>ARTIST NAME</p>
                </div>
                <div class="cart">
                    <a href="/"><button><img src="https://i.ibb.co/DgQRmPZ/opencart-brands.png" alt="cart"
                                style="height: 15px; color: aliceblue; filter: invert(100%);"> ADD TO CART</button></a>
                </div>
            </div>


            <div class="catagories-box">
                <div class="picture">
                    <img src="https://s3.amazonaws.com/gallerist-live/products/28836/large/beautiful-acrylic-painting.jpg?1571493057"
                        alt="">

                </div>
                <div class="details">
                    <p>PAINTING NAME</p>
                    <div class="size-price">
                        <span>2 x 2 </span>
                        <span>Rs. 4000</span>
                    </div>
                    <p>ARTIST NAME</p>
                </div>
                <div class="cart">
                    <a href="/"><button><img src="https://i.ibb.co/DgQRmPZ/opencart-brands.png" alt="cart"
                                style="height: 15px; color: aliceblue; filter: invert(100%);"> ADD TO CART</button></a>
                </div>
            </div>

            <div class="catagories-box">
                <div class="picture">
                    <img src="https://s3.amazonaws.com/gallerist-live/products/28836/large/beautiful-acrylic-painting.jpg?1571493057"
                        alt="">

                </div>
                <div class="details">
                    <p>PAINTING NAME</p>
                    <div class="size-price">
                        <span>2 x 2 </span>
                        <span>Rs. 4000</span>
                    </div>
                    <p>ARTIST NAME</p>
                </div>
                <div class="cart">
                    <a href="/"><button><img src="https://i.ibb.co/DgQRmPZ/opencart-brands.png" alt="cart"
                                style="height: 15px; color: aliceblue; filter: invert(100%);"> ADD TO CART</button></a>
                </div>
            </div>


            <a href=""><i class="fas fa-arrow-right"></i></a>
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

    <!-- Scripts -->
    <script src="js/home-script.js"></script>


</body>

</html>