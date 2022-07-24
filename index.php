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

            <a href="../ShipinArt">Shipin<span>Art</span></a>

        </div>
        <!-- MENU -->
        <div class="menu">
            <li><a href="../ShipinArt" class="animate-catagories">HOME</a></li>
            <li><a href="html/about.php" class="animate-catagories">ABOUT</a></li>
            <li><a href="html/catagories.php" class="animate-catagories">CATAGORIES</a></li>
            <li><a href="../ShipinArt" class="animate-catagories">SERVICES</a></li>
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
            <a href="#acrylic">
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
                <a href="#sketches">
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
                <a href="#modern">
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
                <a href="#acrylic">
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
            <a href="#oil">
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
    <div class="acrylic" id="acrylic">
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
                    <p>THE BEAUTY</p>
                    <div class="size-price">
                        <span>3 x 4 </span>
                        <span>Rs. 68,720</span>
                    </div>
                    <p>HARMINDER SINGH</p>
                </div>
                <div class="cart">
                    <a href="/"><button><img src="https://i.ibb.co/DgQRmPZ/opencart-brands.png" alt="cart"
                                style="height: 15px; color: aliceblue; filter: invert(100%);"> ADD TO CART</button></a>
                </div>

            </div>


            <div class="catagories-box">
                <div class="picture">
                    <img src="https://cdn.shopify.com/s/files/1/2631/7576/products/asa9foKAAb_550x750.jpg?v=1654599345"
                        alt="">

                </div>
                <div class="details">
                    <p>DANCING WOMAN</p>
                    <div class="size-price">
                        <span>3 x 4 </span>
                        <span>Rs.22,913</span>
                    </div>
                    <p>VANDANA RAWAT</p>
                </div>
                <div class="cart">
                    <a href="/"><button><img src="https://i.ibb.co/DgQRmPZ/opencart-brands.png" alt="cart"
                                style="height: 15px; color: aliceblue; filter: invert(100%);"> ADD TO CART</button></a>
                </div>
            </div>


            <div class="catagories-box">
                <div class="picture">
                    <img src="https://images.saatchiart.com/saatchi/1748395/art/8472002/7536141-TYVLYSSK-7.jpg"
                        alt="">
                </div>
                <div class="details">
                    <p>STELLA</p>
                    <div class="size-price">
                        <span>2 x 3 </span>
                        <span>Rs. 22,000</span>
                    </div>
                    <p>ELINA RIGHT</p>
                </div>
                <div class="cart">
                    <a href="/"><button><img src="https://i.ibb.co/DgQRmPZ/opencart-brands.png" alt="cart"
                                style="height: 15px; color: aliceblue; filter: invert(100%);"> ADD TO CART</button></a>
                </div>
            </div>


            <div class="catagories-box">
                <div class="picture">
                    <img src="https://lr.mint.lgbt/img/i69egmvci7491.jpg"
                        alt="">
                </div>
                <div class="details">
                    <p>WILDFLOWERS</p>
                    <div class="size-price">
                        <span>2 x 3 </span>
                        <span>Rs. 12,312</span>
                    </div>
                    <p>KRITESH SHAKYA</p>
                </div>
                <div class="cart">
                    <a href="/"><button><img src="https://i.ibb.co/DgQRmPZ/opencart-brands.png" alt="cart"
                                style="height: 15px; color: aliceblue; filter: invert(100%);"> ADD TO CART</button></a>
                </div>
            </div>

            <div class="catagories-box">
                <div class="picture">
                    <img src="https://beautifuldawndesigns.net/wp-content/uploads/2021/08/acrylic-paintings-beautiful-4.jpg"
                        alt="">

                </div>
                <div class="details">
                    <p>PEACE</p>
                    <div class="size-price">
                        <span>2 x 2 </span>
                        <span>Rs. 8,012</span>
                    </div>
                    <p>SHANTI MAHATO</p>
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
    <div class="acrylic" id="oil">
        <div class="name">
            <span class="animate-title">OIL PAINTINGS</span>
        </div>
        <div class="temporary">
            <a href=""><i class="fas fa-arrow-left"></i></a>


            <div class="catagories-box">
                <div class="picture">
                    <img src="https://i2.wp.com/zet.gallery/blog/wp-content/uploads/2016/02/Vicent-Van-Gogh-Starry-Night-Famous-Oil-Paintings-www.shairart.com_.jpg"
                        alt="">

                </div>
                <div class="details">
                    <p>STARRY NIGHT</p>
                    <div class="size-price">
                        <span>3 X 4</span>
                        <span>Rs. 1,90,12,12,120</span>
                    </div>
                    <p>Vincent van Gogh</p>
                </div>
                <div class="cart">
                    <a href="/"><button><img src="https://i.ibb.co/DgQRmPZ/opencart-brands.png" alt="cart"
                                style="height: 15px; color: aliceblue; filter: invert(100%);"> ADD TO CART</button></a>
                </div>

            </div>


            <div class="catagories-box">
                <div class="picture">
                    <img src="https://mymodernmet.com/wp/wp-content/uploads/2022/04/will-yu-pandemic-oil-painting-2.jpg"
                        alt="">

                </div>
                <div class="details">
                    <p>WILL YOU PANDEMIC</p>
                    <div class="size-price">
                        <span>2 x 3 </span>
                        <span>Rs. 12,000</span>
                    </div>
                    <p>SUMAN KUMAR NEPAL</p>
                </div>
                <div class="cart">
                    <a href="/"><button><img src="https://i.ibb.co/DgQRmPZ/opencart-brands.png" alt="cart"
                                style="height: 15px; color: aliceblue; filter: invert(100%);"> ADD TO CART</button></a>
                </div>
            </div>


            <div class="catagories-box">
                <div class="picture">
                    <img src="https://ii1.pepperfry.com/media/catalog/product/c/o/800x880/contemporary-art-handmade-oil-painting-on-canvas-framed-by-chaque-decor-contemporary-art-handmade-oi-id3ext.jpg"
                        alt="">

                </div>
                <div class="details">
                    <p>MITHILA ART</p>
                    <div class="size-price">
                        <span>2 x 2 </span>
                        <span>Rs. 8,000</span>
                    </div>
                    <p>NANDAGOPAL SYAMI</p>
                </div>
                <div class="cart">
                    <a href="/"><button><img src="https://i.ibb.co/DgQRmPZ/opencart-brands.png" alt="cart"
                                style="height: 15px; color: aliceblue; filter: invert(100%);"> ADD TO CART</button></a>
                </div>
            </div>


            <div class="catagories-box">
                <div class="picture">
                    <img src="https://webneel.com/sites/default/files/images/project/Paintings%20of%20rural%20indian%20women%20-%20Oil%20painting%20(1).jpg"
                        alt="">

                </div>
                <div class="details">
                    <p>RURAL WOMAN</p>
                    <div class="size-price">
                        <span>2 x 3 </span>
                        <span>Rs. 15,850</span>
                    </div>
                    <p>ANONYMOUS</p>
                </div>
                <div class="cart">
                    <a href="/"><button><img src="https://i.ibb.co/DgQRmPZ/opencart-brands.png" alt="cart"
                                style="height: 15px; color: aliceblue; filter: invert(100%);"> ADD TO CART</button></a>
                </div>
            </div>

            <div class="catagories-box">
                <div class="picture">
                    <img src="https://fineartconnoisseur.com/wp-content/uploads/sites/2/2020/11/Zhang-OPAM-Christopher-Smile-Boy-12-x-9-3900-scaled.jpg"
                        alt="">

                </div>
                <div class="details">
                    <p>SMILE BOY</p>
                    <div class="size-price">
                        <span>2 x 3 </span>
                        <span>Rs. 17,268</span>
                    </div>
                    <p>ZHANG CHRISTOPHER</p>
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

    <div class="acrylic" id="modern">
        <div class="name">
            <span class="animate-title">MODERN ARTS</span>
        </div>
        <div class="temporary">
            <a href=""><i class="fas fa-arrow-left"></i></a>


            <div class="catagories-box">
                <div class="picture">
                    <img src="https://images.unsplash.com/photo-1581352102070-b7d62164e147?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxjb2xsZWN0aW9uLXBhZ2V8MXw5ODE0NTk5fHxlbnwwfHx8fA%3D%3D&w=1000&q=80"
                        alt="">

                </div>
                <div class="details">
                    <p>COLOR</p>
                    <div class="size-price">
                        <span>2 x 3 </span>
                        <span>Rs. 8,500</span>
                    </div>
                    <p>MADHAV SUBEDI</p>
                </div>
                <div class="cart">
                    <a href="/"><button><img src="https://i.ibb.co/DgQRmPZ/opencart-brands.png" alt="cart"
                                style="height: 15px; color: aliceblue; filter: invert(100%);"> ADD TO CART</button></a>
                </div>

            </div>


            <div class="catagories-box">
                <div class="picture">
                    <img src="https://images.saatchiart.com/saatchi/1340813/art/7484169/6553121-EEGCGRND-7.jpg"
                        alt="">

                </div>
                <div class="details">
                    <p>SHIV PARBATI</p>
                    <div class="size-price">
                        <span>2 x 3 </span>
                        <span>Rs. 17,700</span>
                    </div>
                    <p>AKASH PANTHI</p>
                </div>
                <div class="cart">
                    <a href="/"><button><img src="https://i.ibb.co/DgQRmPZ/opencart-brands.png" alt="cart"
                                style="height: 15px; color: aliceblue; filter: invert(100%);"> ADD TO CART</button></a>
                </div>
            </div>


            <div class="catagories-box">
                <div class="picture">
                    <img src="https://cdn11.bigcommerce.com/s-x49po/images/stencil/500x659/products/5684/14277/52Figure40__50289.1506574078.JPG?c=2"
                        alt="">

                </div>
                <div class="details">
                    <p>NO NAME</p>
                    <div class="size-price">
                        <span>2 x 2 </span>
                        <span>Rs. 6,900</span>
                    </div>
                    <p>RUKMATI DEVI</p>
                </div>
                <div class="cart">
                    <a href="/"><button><img src="https://i.ibb.co/DgQRmPZ/opencart-brands.png" alt="cart"
                                style="height: 15px; color: aliceblue; filter: invert(100%);"> ADD TO CART</button></a>
                </div>
            </div>


            <div class="catagories-box">
                <div class="picture">
                    <img src="https://media.istockphoto.com/photos/advance-of-inner-paint-picture-id521577939?k=20&m=521577939&s=612x612&w=0&h=0aqhf-XKLdANTQQFg2rbUNCQrKEBFSL4RYG-tm2r7Fw="
                        alt="">

                </div>
                <div class="details">
                    <p>SELF LOVE</p>
                    <div class="size-price">
                        <span>3 X 5 </span>
                        <span>Rs. 20,000</span>
                    </div>
                    <p>ANONYMOUS</p>
                </div>
                <div class="cart">
                    <a href="/"><button><img src="https://i.ibb.co/DgQRmPZ/opencart-brands.png" alt="cart"
                                style="height: 15px; color: aliceblue; filter: invert(100%);"> ADD TO CART</button></a>
                </div>
            </div>

            <div class="catagories-box">
                <div class="picture">
                    <img src="https://www.virtosuart.com/images/2019/blog-new/modernart/Salvador-Dali-4640.png"
                        alt="">

                </div>
                <div class="details">
                    <p>SALVADOR</p>
                    <div class="size-price">
                        <span>2 x 3 </span>
                        <span>Rs. 12,000</span>
                    </div>
                    <p>SALVADOR DALI</p>
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

    <div class="acrylic" id="sketches">
        <div class="name">
            <span class="animate-title">SKETCHES</span>
        </div>
        <div class="temporary">
            <a href=""><i class="fas fa-arrow-left"></i></a>


            <div class="catagories-box">
                <div class="picture">
                    <img src="https://images.saatchiart.com/saatchi/420015/art/2588908/1658804-HSC00001-32.jpg"
                        alt="">

                </div>
                <div class="details">
                    <p>A GIRL</p>
                    <div class="size-price">
                        <span>2 x 1 </span>
                        <span>Rs. 200</span>
                    </div>
                    <p>SUMAN KHATRI</p>
                </div>
                <div class="cart">
                    <a href="/"><button><img src="https://i.ibb.co/DgQRmPZ/opencart-brands.png" alt="cart"
                                style="height: 15px; color: aliceblue; filter: invert(100%);"> ADD TO CART</button></a>
                </div>

            </div>


            <div class="catagories-box">
                <div class="picture">
                    <img src="https://now.tufts.edu/sites/default/files/uploaded-assets/images/migrated/201026_smfa_art_sale_2020_lg.jpg"
                        alt="">

                </div>
                <div class="details">
                    <p>NO NAME</p>
                    <div class="size-price">
                        <span>2 x 1 </span>
                        <span>Rs. 2,500</span>
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
                    <img src="https://i0.wp.com/www.graphicart-news.com/wp-content/uploads/2015/09/bern-the-alps2.jpg?resize=800%2C1204&ssl=1"
                        alt="">

                </div>
                <div class="details">
                    <p>A CITY</p>
                    <div class="size-price">
                        <span>2 X 3</span>
                        <span>Rs. 17,500</span>
                    </div>
                    <p>ANONYMOUS</p>
                </div>
                <div class="cart">
                    <a href="/"><button><img src="https://i.ibb.co/DgQRmPZ/opencart-brands.png" alt="cart"
                                style="height: 15px; color: aliceblue; filter: invert(100%);"> ADD TO CART</button></a>
                </div>
            </div>


            <div class="catagories-box">
                <div class="picture">
                    <img src="https://s3.amazonaws.com/showflipper/product/0091557305711.jpg"
                        alt="">

                </div>
                <div class="details">
                    <p>WO-LION</p>
                    <div class="size-price">
                        <span>1 X 2 </span>
                        <span>Rs. 200</span>
                    </div>
                    <p>KRISHNA SYAMI</p>
                </div>
                <div class="cart">
                    <a href="/"><button><img src="https://i.ibb.co/DgQRmPZ/opencart-brands.png" alt="cart"
                                style="height: 15px; color: aliceblue; filter: invert(100%);"> ADD TO CART</button></a>
                </div>
            </div>

            <div class="catagories-box">
                <div class="picture">
                    <img src="https://d3rf6j5nx5r04a.cloudfront.net/W-NKG18HXbxadBnjoVLM_jlB5CE=/760x1078/product/e/d/e272bab6d1974f8a8d18eb449ec37cd3_opt.jpg"
                        alt="">

                </div>
                <div class="details">
                    <p>DANCING GIRL</p>
                    <div class="size-price">
                        <span>2 x 1 </span>
                        <span>Rs. 5000</span>
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