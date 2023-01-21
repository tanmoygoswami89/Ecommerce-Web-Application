<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Bhai+2:wght@500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>

<!-----------------Navbar----------------->

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
    </div>

<!-----------------Products2----------------->

    <div class="small-container">
        <div class="row row-2">
            <h1>More Products</h1>
            <select name="" id="">
                <option>Default Shorting</option>
                <option>Short by Price</option>
                <option>Short by Popularity</option>
                <option>Short by Rating</option>
                <option>Short by Sale</option>
            </select>
        </div>
        <div class="row">
            <div class="col-4">
                <a href=""><img src="images/product-1.jpg"></a>
                <a href="">
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
                <a href=""><img src="images/product-2.jpg"></a>
                <a href="">
                <h4>HRX Sport Shoes</h4></a>
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
                        <h4>Solid Men Track Suit</h4></a>
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
                <a href=""><h4>Blue printed T-Shirt</h4></a>
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
        <div class="row">
            <div class="col-4">
                <a href=""><img src="images/product-5.jpg"></a>
                <a href=""><h4>ZARMAN High Boots For Men</h4></a>
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
                <a href=""><h4>Black printed T-Shirt</h4></a>
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
                <a href=""><h4>HRX Shocks For Men</h4></a>
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
                <a href=""><h4>FOSSIL Black Watch</h4></a>
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
                <a href=""><h4>Fastrack Watch For Men</h4></a>
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
                <a href=""><h4>HRX Sports Shoes</h4></a>
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
                <a href=""><h4>Paragon Boots For Men</h4></a>
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
                <a href=""><h4>Black Track Suit For Men</h4></a>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>$20.00</p>
            </div>
            <div class="col-4">
                <a href=""><img src="images/product 19.jpg"></a>
                <a href=""><h4>Cenizas Men's Full Sleeves Solid Stripes Round Neck Tshirt</h4></a>
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
                <a href=""><img src="images/product 18.jpg"></a>
                <a href=""><h4>Men Navy Solid Polo Collar T-shirt</h4></a>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>$45.00</p>
            </div>
            <div class="col-4">
                <a href=""><img src="images/product 17.jpg"></a>
                <a href=""><h4>Men Beige Colourblocked Raw Edge Round Neck T-shirt</h4></a>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>$45.00</p>
            </div>
            <div class="col-4">
                <a href=""><img src="images/product 16.jpg"></a>
                <a href=""><h4>Pause Men Black Slim fit Cotton Blend Round neck T-Shirt</h4></a>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>$55.00</p>
            </div>
        </div>
        <div class="page-btn">
            <a href="products1.php"><span>1</span></a>
            <a href="products2.php"><span>2</span></a>
            <span>3</span>
            <span>4</span>
            <span>&#10132;</span>
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
                        <li><a href="">Coupons</a></li>
                        <li><a href="">Blog Post</a></li>
                        <li><a href="">Return Policy</a></li>
                        <li><a href="">Join Affiliate</a></li>
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
                        <li>...</li>
                        <li>...</li>
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