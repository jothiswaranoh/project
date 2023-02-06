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
        <a href="index.html"><img src="img/navbar/pngwing.com.png" class="logo" alt=""></a>
        <div>
        <ul id="navbar">
                <li><a href="index.php">HOME</a></li>
                <li><a href="shop.php">SHOP</a></li>
                <li><a href="blog.php">BLOG</a></li>
                <li><a href="about.php">ABOUT</a></li>
                <li><a href="contact.php">CONTACT</a></li>
                <li><a  class="active"  href="login.php">LOGIN</a></li>
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
    <section id="contact-dtl" class="section-p1">
        <div class="dtls">
            <span>GET IN TOUCH</span>
            <h2>visit one of our agency locations or Contact us today</h2>
            <h3>Head Office</h3>
            <div>
                <li>
                    <i class="far fa-map"></i>
                    <p>307,Nesamani Colony,Coimbatore</p>
                </li>
                <li>
                    <i class="far fa-envelope"></i>
                    <p>nesamani@gmail.com <a href="mailto:arunarun4515@gmail.com">Send Feedback</a> </p>
                    
                </li>
                <li>
                    <i class="fas fa-phone-alt"></i>
                    <p>7868953808 <a href="tel:+919677562317">callus</a> <a href="sms:919677562317?body = Thank You">Send a SMS</a></p>
                </li>
                <li>
                    <i class="far fa-clock"></i>
                    <p>Monday to Friday: 9.00am to 16.00pm</p>
                </li>
            </div>
        </div>
        <div class="map">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d125341.64563415304!2d76.91562185434306!3d10.968926052925456!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ba85a5b0a224951%3A0xae661c49913444c0!2sRathinam%20Technical%20Campus!5e0!3m2!1sen!2sin!4v1668448470317!5m2!1sen!2sin"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </section>
    <section id="form-dtls">
        <form action="">
            <span>LEAVE A MESSAGE</span>
            <h2>We love to hear from you!</h2>  
            <input type="text" placeholder="Your Name">
            <input type="text" placeholder="E-mail">
            <input type="text" placeholder="Subject">
            <textarea name="" id="" cols="30" rows="10" placeholder="Your Message"></textarea>
            <button class="normal">Submit</button>
        </form>
        <div class="people">
            <div>
                <img src="img/people/1.png" alt="">
                <p><span>Jothis</span>Senior Marketing Manager<br>Phone: 1234567880<br>E-mail: jothi@gmail.com</p>
            </div>
            <div>
                <img src="img/people/2.png" alt="">
                <p><span>Vasanth</span>Senior Marketing Manager<br>Phone: 7868927194<br>E-mail: vasu@gmail.com</p>
            </div>
            <div>
                <img src="img/people/3.png" alt="">
                <p><span>Meena</span>Senior Marketing Manager<br>Phone: 842889271<br>E-mail: meenu@gmail.com</p>
            </div>
        </div>
    </section>
    <section id="newsletter" class="section-p1 section-m1">
        <div class="newstext">
            <h4>Sign Up for Updates</h4>
            <p>Get E-mail updates about <span>new arrivals and special offers.</span></p>
        </div>
        <div class="form">
            <input type="text" placeholder="Enter your email">
            <button class="normal" onclick="window.location.href='signup.html'">Sign up</button>
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
            <a href="about.html">About Us</a>
            <a href="#">Delivery Informaiton</a>
            <a href="#">Privacy Policy</a>
            <a href="#">Terms & Conditions</a>
            <a href="contact.html">Contact Us</a>
        </div>
        <div class="col">
            <h4>My Account</h4>
            <a href="login.html">Sign In</a>
            <a href="login.html">View Cart</a>
            <a href="#">My Wishlist</a>
            <a href="#">Track My Orders</a>
            <a href="contact.html">Help</a>
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