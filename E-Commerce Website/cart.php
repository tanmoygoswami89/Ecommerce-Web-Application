<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart Page</title>
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

    <!----------Cart Item Details---------->
    <div class="small-container cart-page">
        <table>
            <tr>
                <th>Product</th>
                <th>Quantity</th>
                <th>Subtotal</th>
            </tr>
            <tr>
                <td>
                    <div class="cart-info">
                        <img src="images/buy-1.jpg">
                        <div>
                            <p>Red Printed T-Shirt</p>
                            <small>Price: $50.00</small><br>
                            <a href="">Remove</a>
                        </div>
                    </div>
                </td>
                <td><input type="number" value="1"></td>
                <td>$50.00</td>
            </tr>
            <tr>
                <td>
                    <div class="cart-info">
                        <img src="images/buy-2.jpg">
                        <div>
                            <p>Red Printed T-Shirt</p>
                            <small>Price: $35.00</small><br>
                            <a href="">Remove</a>
                        </div>
                    </div>
                </td>
                <td><input type="number" value="1"></td>
                <td>$35.00</td>
            </tr>
            <tr>
                <td>
                    <div class="cart-info">
                        <img src="images/buy-3.jpg">
                        <div>
                            <p>Red Printed T-Shirt</p>
                            <small>Price: $20.00</small><br>
                            <a href="">Remove</a>
                        </div>
                    </div>
                </td>
                <td><input type="number" value="1"></td>
                <td>$20.00</td>
            </tr>
        </table>
        <div class="total-price">
            <table>
                <tr>
                    <td>Subtotal</td>
                    <td>$105.00</td>
                </tr>
                <tr>
                    <td>Tax</td>
                    <td>$35.00</td>
                </tr>
                <tr>
                    <td>Total</td>
                    <td>$140.00</td>
                </tr>
            </table>
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