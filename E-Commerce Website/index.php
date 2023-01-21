<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Style.Com</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Bhai+2:wght@500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    
</head>

<body>

    <!--------------------Navbar--------------------->

    <div class="header">

        <div class="container">
            <div class="navbar">
                <div class="logo">
                    <a href="index.php"><img src="images/logo.png" width="125px"></a>
                </div>
                <nav>
                    <ul id="MenuItems">
                        <li><a href="index.php"><b>Home</b></a></li>
                        <li><a href="products1.php"><b>Products</b></a></li>
                        <li><a href="about.php"><b>About Us</b></a></li>
                        <li><a href="account.php"><b>Account</b></a></li>
                        <li><a href="logout.php"><b>Logout</b></a></li>
                    </ul>
                </nav>
                <a href="cart.php"><img src="images/cart.png" width="30px" height="30px"></a>
                <img src="images/menu.png" class="menu-icon" onclick="menutoggle()">
            </div>
            <div class="row">
                <div class="col-2">
                    <h1>Welcome to Style.Com <br>for Shopping</h1>
                    <p>
                    <h3>Get up to 30% off New Arrivals and Bank Discount are available.</h3>
                    </p>
                    <a href="products1.php" class="btn">Explore Now &#10132;</a>
                </div>
                <div class="col-2">
                    <img src="images/image1.png">
                </div>
            </div>
        </div>
    </div>


    <!-- ----------Featured Categories--------- -->
    <div class="categories">
        <div class="small-container">
            <div class="row">
                <div class="col-3">
                    <a href=""><img src="images/category-1.jpg"></a>
                </div>
                <div class="col-3">
                    <a href=""><img src="images/category-2.jpg"></a>
                </div>
                <div class="col-3">
                    <a href=""><img src="images/category-3.jpg"></a>
                </div>
            </div>
        </div>
    </div>



    <!-- ----------Featured Products--------- -->
    <div class="small-container">
        <h2 class="title">Fetured Products</h2>
        <div class="row">
            <div class="col-4">
                <a href="product-details.php"><img src="images/product-1.jpg"></a>
                <a href="product-details.php">
                    <h4>Red printed T-Shirt</h4>
                </a>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>$50.00</p>
            </div>
            <div class="col-4">
                <a href="product-details1.php"><img src="images/product-2.jpg"></a>
                <a href="product-details1.php">
                    <h4>HRX Sport Shoes</h4>
                </a>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                </div>
                <p>$35.00</p>
            </div>
            <div class="col-4">
                <a href=""><img src="images/product-3.jpg"></a>
                <a href="">
                    <h4>Solid Men Track Suit</h4>
                </a>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                </div>
                <p>$20.00</p>
            </div>
            <div class="col-4">
                <a href=""><img src="images/product-4.jpg"></a>
                <a href="">
                    <h4>Blue printed T-Shirt</h4>
                </a>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>$50.00</p>
            </div>
        </div>



        <h2 class="title">Latest Products</h2>
        <div class="row">
            <div class="col-4">
                <a href=""><img src="images/product-5.jpg"></a>
                <a href="">
                    <h4>ZARMAN High Boots For Men</h4>
                </a>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>$40.00</p>
            </div>
            <div class="col-4">
                <a href=""><img src="images/product-6.jpg"></a>
                <a href="">
                    <h4>Black printed T-Shirt</h4>
                </a>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                </div>
                <p>$50.00</p>
            </div>
            <div class="col-4">
                <a href=""><img src="images/product-7.jpg"></a>
                <a href="">
                    <h4>HRX Shocks For Men</h4>
                </a>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                </div>
                <p>$15.00</p>
            </div>
            <div class="col-4">
                <a href=""><img src="images/product-8.jpg"></a>
                <a href="">
                    <h4>FOSSIL Black Watch</h4>
                </a>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>$25.00</p>
            </div>
        </div>
        <div class="row">
            <div class="col-4">
                <a href=""><img src="images/product-9.jpg"></a>
                <a href="">
                    <h4>Fastrack Watch For Men</h4>
                </a>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>$25.00</p>
            </div>
            <div class="col-4">
                <a href=""><img src="images/product-10.jpg"></a>
                <a href="">
                    <h4>HRX Sports Shoes</h4>
                </a>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                </div>
                <p>$35.00</p>
            </div>
            <div class="col-4">
                <a href=""><img src="images/product-11.jpg"></a>
                <a href="">
                    <h4>Paragon Boots For Men</h4>
                </a>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                </div>
                <p>$35.00</p>
            </div>
            <div class="col-4">
                <a href=""><img src="images/product-12.jpg"></a>
                <a href="">
                    <h4>Black Track Suit For Men</h4>
                </a>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>$20.00</p>
            </div>
        </div>
    </div>


    <!-- -------  Offer  -------- -->
    <div class="offer">
        <div class="small-container1">
            <div class="row">
                <div class="col-2">
                    <img src="images/exclusive.png" class="offer-img">
                </div>
                <div class="col-2">
                    <p>Exclusively Available on Style.Com</p>
                    <h1>smart Band 4</h1>
                    <b>
                        <h5>This watch is perfect for you. Watch is same as shown in images. Exclusive and beautiful
                            fancy watches from the fastest growing. Personally Quality check of each and every watch.
                            Crafted from a rich quality material, this watch for kids is light in weight and long
                            lasting too. Its edgy and affordable range of watches.
                    </b></h5></b><br>
                    <a href="offer.php" class="btn">Buy Now &#10132;</a>
                </div>
            </div>
        </div>
    </div>




    <!-- --------Testimonial Comments ---------- -->
    <div class="testimonial">
        <div class="small-container">
            <div class="row">
                <div class="col-3">
                    <i class="fa fa-quote-left"></i>
                    <p>
                    <h4>Manager of Style.Com</h4>
                    </p>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                    <img src="images/user-1.png">
                    <h3>Shane Parker</h3>
                </div>
                <div class="col-3">
                    <i class="fa fa-quote-left"></i>
                    <p>
                    <h4>Founder of Style.Com</h4>
                    </p>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                    <img src="images/tanmoy.jpg">
                    <h3>Tanmoy Goswami</h3>
                </div>
                <div class="col-3">
                    <i class="fa fa-quote-left"></i>
                    <p>
                    <h4>Accounting Officer of Style.Com</h4>
                    </p>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                    <img src="images/kk.jpg">
                    <h3>Stafini Mcman</h3>
                </div>
            </div>
        </div>
    </div>


    <!-- --------Brands -------- -->
    <div class="brands">
        <div class="small-container">
            <div class="row">
                <div class="col-5">
                    <img src="images/logo-godrej.png">
                </div>
                <div class="col-5">
                    <img src="images/logo-oppo.png">
                </div>
                <div class="col-5">
                    <img src="images/logo-philips.png">
                </div>
                <div class="col-5">
                    <img src="images/logo-coca-cola.png">
                </div>
                <div class="col-5">
                    <img src="images/logo-paypal.png">
                </div>
            </div>
        </div>
    </div>


    <!-- ---------Footer -------- -->
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="footer-col-1">
                    <h3>Downlode Our App</h3>
                    <p>Downlode App for Android and Ios Mobile Phone</p>
                    <div class="app-logo">
                        <a href=""><img src="images/play-store.png"></a>
                        <a href=""><img src="images/app-store.png"></a>
                    </div>
                </div>
                <div class="footer-col-2">
                    <img src="images/logo-white.png">
                    <p>Style.Com is a E-Commerce company headquartered in Bankura, West Bengal, India.</p>
                </div>
                <div class="footer-col-3">
                    <h3>Useful Links</h3>
                    <ul>
                        <li><a href="">Coupons</li></a>
                        <li><a href="">Blog Post</li></a>
                        <li><a href="">Return Policy</li></a>
                        <li><a href="">Join Affiliate</li></a>
                        <li><a href="">Contact Us</li></a>
                        <li><a href="">About</li></a>
                    </ul>
                </div>
                <div class="footer-col-4">
                    <h3>Follow Us</h3>
                    <ul>
                        <li><a href="">Facebook</li></a>
                        <li><a href="">Instagram</li></a>
                        <li><a href="">Twitter</li></a>
                        <li><a href="">YouTube</li></a>
                        <li>....</li>
                        <li>....</li>
                    </ul>
                </div>
            </div>
            <hr>
            <p class="copyright">Copyright 2020-2021 - Style.Com</p>
        </div>
    </div>


    <!-- -------JS for Toggle Menu --------- -->
    <script>
        var MenuItems = document.getElementById("MenuItems");
        MenuItems.style.maxHeight = "0px";
        function menutoggle() {
            if (MenuItems.style.maxHeight == "0px") {
                MenuItems.style.maxHeight = "200px"
            }
            else {
                MenuItems.style.maxHeight = "0px"
            }
        }
    </script>
</body>

</html>