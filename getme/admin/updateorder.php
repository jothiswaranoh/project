<?php include('../config/constant.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>GETME</title>
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        referrerpolicy="no-referrer" />
</head>

<body>
    <div id="preloader"></div>
    <section id="header">
        <a href="index.php"><img src="../img/navbar/pngwing.com.png" class="logo" alt=""></a>
        <div>
            <ul id="navbar">
                <li><a class="active" href="index.php">HOME</a></li>
                <li><a href="manageadmin.php">MANAGE</a></li>
                <li><a href="manageproduct.php">PRODUCTS</a></li>
                <li><a href="order.php">ORDERS</a></li>
                <li><a href="logout.php">LOGOUT</a></li>

                <a href="#" id="close"><i class="far fa-x"></i></a>
            </ul>
            <div id="mobile">
                <i id="bar" class="fas fa-outdent"></i>
            </div>
        </div>
    </section>
    <section id="ad-admin">
        <form class="order">
            <h2><span class="colortxt">UPDATE PRODUCT</span></h2>
            <div style="margin-top: 20px;">
                <label for="pdname">Product Name:</label>
                <span>ADIDAS-Shirt</span>
            </div>
            <div>
                <label for="pdname">Price:</label>
                <span>$180</span>
            </div>
            <label for="pdname">Quantity:</label>
            <input type="number" name="pdname" min="0" value="1">

            <label for="cusname">Customer Name:</label>
            <input type="text" name="cusname" value="vasanthkumar">

            <label for="cusnum">Customer Number:</label>
            <input type="tel" name="cusnum" value="7868345678">
            <label for="status">Status:</label>
            <select name="status">
                <option value="1">OrderPlaced</option>
                <option value="2">Shipped</option>
                <option value="3">OutForDelivery</option>
                <option value="4">Delivered</option>
            </select>
            <label for="cusadd">Customer Address:</label>
            <textarea name="cusadd" value="RTC"></textarea>
            <button class="btn1">UPDATE</button>
        </form>
    </section>
    <footer class="section-p1 admin-footer">
        <div class="col">
            <img class="logo logo1" src="../img/navbar/pngwing.com.png" alt="">
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
            <a href="../about.html">About Us</a>
            <a href="#">Delivery Informaiton</a>
            <a href="#">Privacy Policy</a>
            <a href="#">Terms & Conditions</a>
            <a href="../contact.html">Contact Us</a>
        </div>
        <div class="col">
            <h4>My Account</h4>
            <a href="../login.html">Sign In</a>
            <a href="../login.html">View Cart</a>
            <a href="#">My Wishlist</a>
            <a href="#">Track My Orders</a>
            <a href="../contact.html">Help</a>
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
    <script src="../js.js"></script>
</body>

</html>