<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatabile" content="IE-edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>GETME</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        referrerpolicy="no-referrer" />
</head>

<body>
    <section id="preloader">  
        <div id="loader">
            <div class="circle"></div>
            <div class="circle"></div>
            <div class="circle"></div>
            <div class="shadow"></div>
            <div class="shadow"></div>
            <div class="shadow"></div>
        </div>
        </section>
    <section id="header">
        <a href="#"><img src="img/navbar/pngwing.com.png" class="logo" alt=""></a>
        <div>
        <ul id="navbar">
                <li><a  href="index.php">HOME</a></li>
                <li><a  class="active" href="shop.php">SHOP</a></li>
                <li><a href="blog.php">BLOG</a></li>
                <li><a href="about.php">ABOUT</a></li>
                <li><a href="contact.php">CONTACT</a></li>
                <li><a href="login.php">LOGIN</a></li>
                <li><a href="cart.php" id="bag"><i class="fa-solid fa-bag-shopping line"></i></a></li>
                <a href="#" id="close"><i class="far fa-x"></i></a>
            </ul>
            <div id="mobile">
                <a href="#"><i class="fa-solid fa-bag-shopping line"></i></a>
                <i id="bar" class="fas fa-outdent"></i>
            </div>
        </div>
    </section>
    <section id="page-header" class="about-header">
        <h2>#Let's_talk</h2>
        <p>LEAVE A MESSAGE, We love to hear from you!</p>
    </section>
    <section id="cart" class="section-p1">
        <table width="100%">
            <thead>
                <tr>
                    <td>Remove</td>
                    <td>Image</td>
                    <td>Product</td>
                    <td>Price</td>
                    <td>Quantity</td>
                    <td>Subtotal</td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><a><i class="far fa-times-circle"></i></a></td>
                    <td><img src="img/products/f1.jpg" alt=""></td>
                    <td>Cotton Shirt</td>
                    <td>Rs.150</td>
                    <td><input type="number" value="1"></td>
                    <td>Rs.150</td>
                </tr>
                <tr>
                    <td><a><i class="far fa-times-circle"></i></a></td>
                    <td><img src="img/products/f2.jpg" alt=""></td>
                    <td>Cotton Shirt</td>
                    <td>Rs.150</td>
                    <td><input type="number" value="1"></td>
                    <td>Rs.150</td>
                </tr>
                <tr>
                    <td><a><i class="far fa-times-circle"></i></a></td>
                    <td><img src="img/products/f3.jpg" alt=""></td>
                    <td>Cotton Shirt</td>
                    <td>Rs.150</td>
                    <td><input type="number" value="1"></td>
                    <td>Rs.150</td>
                </tr>
            </tbody>
        </table>
    </section>
    <section id="cart-add" class="section-p1">
        <div id="coupon">
            <h3>Apply Coupon Code</h3>
            <div>
                <input type="text" placeholder="Enter Your Coupon Code">
                <button class="normal">Apply</button>
            </div>
        </div>
        <div id="sub-total">
            <h3>Cart Total</h3>
            <table>
                <tr>
                    <td>Cart Subtotal</td>
                    <td>Rs.150</td>
                </tr>
                <tr>
                    <td>Shipping</td>
                    <td>Free</td>
                </tr>
                <tr>
                    <td><strong>Total</strong></td>
                    <td><strong>Rs.150</strong></td>
                </tr>
            </table>
            <button class="normal">Proceed to Pay</button>
        </div>
    </section>
    <footer class="section-p1">
        <div class="col">
            <img class="logo logo1" src="img/navbar/pngwing.com.png" alt="">
            <h4>Contact</h4>
            <p><strong>Address: </strong>307,Nesamani Colony,Coimbatore</p>
            <p><strong>Phone: </strong>7868953808/04174 88701</p>
            <p><strong>Hours: </strong>10:00 - 18:00. Mon-Sat</p>
            <div class="follow">
                <h4>Follow Us</h4>
                <div class="icon">
                    <i class="fab fa-facebook-f"></i>
                    <i class="fab fa-twitter"></i>
                    <i class="fab fa-instagram"></i>
                    <i class="fab fa-whatsapp"></i>
                    <i class="fab fa-youtube"></i>
                </div>
            </div>
        </div>
        <div class="col">
            <h4>About</h4>
            <a href="#">About Us</a>
            <a href="#">Delivery Informaiton</a>
            <a href="#">Privacy Policy</a>
            <a href="#">Terms & Conditions</a>
            <a href="#">Contact Us</a>
        </div>
        <div class="col">
            <h4>My Account</h4>
            <a href="#">Sign In</a>
            <a href="#">View Cart</a>
            <a href="#">My Wishlist</a>
            <a href="#">Track My Orders</a>
            <a href="#">Help</a>
        </div>
        <div class="col install">
            <h4>Install Now</h4>
            <p>From App Store or Play Store</p>
            <div class="row">
                <img src="img/navbar/play.jpg" alt=";">
                <img src="img/navbar/app.jpg" alt=";">
            </div>
            <p>Secured Payment gateway</p>
            <img src="img/navbar/pay.png" alt="">
        </div>
        <div class="copyright">
            <p>@ 2022, it's a COPYRIGHT line.</p>
        </div>
    </footer>
    <script src="js.js"></script>
</body>

</html>