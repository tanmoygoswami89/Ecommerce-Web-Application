<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Products of RedStore.com</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Bhai+2:wght@500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>

    <!--------------------Navbar--------------------->
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

    <!-- ----------Single Product Details ----------- -->


    <div class="small-container single-product">
        <div class="row">
            <div class="col-2">
                <img src="images/gallery-1.jpg" width="100%" id="productImg">
                <div class="small-img-row">
                    <div class="small-img-col">
                        <img src="images/gallery-1.jpg" class="small-img">
                    </div>
                    <div class="small-img-col">
                        <img src="images/gallery-2.jpg" class="small-img">
                    </div>
                    <div class="small-img-col">
                        <img src="images/gallery-3.jpg" class="small-img">
                    </div>
                    <div class="small-img-col">
                        <img src="images/gallery-4.jpg" class="small-img">
                    </div>
                </div>
            </div>
            <div class="col-2">
                <p>Home / T-Shirt</p>
                <h1>Red Printed T-Shirt by PUMA</h1>
                <h4>$50.00</h4>
                <select>
                    <option>Select Size</option>
                    <option>XXL</option>
                    <option>XL</option>
                    <option>Large</option>
                    <option>Medium</option>
                    <option>Small</option>
                    <input type="number" value="1">
                    <a href="" class="btn">Add to Cart</a>
                    <h3>Product Details <i class="fa fa-indent"></i></h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto voluptatem dolore voluptas earum
                        voluptates, consectetur sequi, vero veniam obcaecati id omnis temporibus recusandae tempore
                        blanditiis qui.</p>
                </select>
            </div>
        </div>
    </div>

<!-----------Title ------------>
<div class="small-container">
    <div class="row row-2">
<h2>Related Products</h2>
<p><a href="">View More</a></p>
    </div>
</div>



<!-------------Products--------- -->

    <div class="small-container">

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

    <!-- ---------Footer -------- -->
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="footer-col-1">
                    <h3>Downlode Our App</h3>
                    <p>Downlode App for Android and Ios Mobile Phone</p>
                    <div class="app-logo">
                        <img src="images/play-store.png">
                        <img src="images/app-store.png">
                    </div>
                </div>
                <div class="footer-col-2">
                    <img src="images/logo-white.png">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                </div>
                <div class="footer-col-3">
                    <h3>Useful Links</h3>
                    <ul>
                        <li>Coupons</li>
                        <li>Blog Post</li>
                        <li>Return Policy</li>
                        <li>Join Affiliate</li>
                    </ul>
                </div>
                <div class="footer-col-4">
                    <h3>Follow Us</h3>
                    <ul>
                        <li>Facebook</li>
                        <li>Instagram</li>
                        <li>Twitter</li>
                        <li>YouTube</li>
                    </ul>
                </div>
            </div>
            <hr>
            <p class="copyright">Copyright 2020 - Computer Tech</p>
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


    <!-- ----------JS for product gallery -------------- -->

    <script>
        var productImg = document.getElementById("productImg");
        var SmallImg = document.getElementsByClassName("small-img");

        SmallImg[0].onclick = function () {
            productImg.src = SmallImg[0].src;
        }

        SmallImg[1].onclick = function () {
            productImg.src = SmallImg[1].src;
        }

        SmallImg[2].onclick = function () {
            productImg.src = SmallImg[2].src;
        }

        SmallImg[3].onclick = function () {
            productImg.src = SmallImg[3].src;
        }
    </script>
</body>

</html>