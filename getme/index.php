<?php 
    //Include COnstants Page
    include('config/constant.php');?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>GETME</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        referrerpolicy="no-referrer" />
</head>

<body>
    <div id="preloader"></div>
    <section id="header">
        <a href="index.php"><img src="img/navbar/pngwing.com.png" class="logo" alt=""></a>
        <div>
            <ul id="navbar">
                <li><a class="active" href="index.php">HOME</a></li>
                <li><a href="shop.php">SHOP</a></li>
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
    <section id="hero">
        <h4>Best Deals</h4>
        <h2>Offer Upto 60%</h2>
        <h1>On all products</h1>
        <button onclick="window.location.href='shop.html'">Shop Now</button>
    </section>
    <section id="feature" class="section-p1">
        <div class="fe-box">
            <img src="img/feature/ship.jpg" alt="">
            <h6>Free Shipping</h6>
        </div>
        <div class="fe-box">
            <img src="img/feature/3.jpg" alt="">
            <h6>Online Order</h6>
        </div>
        <div class="fe-box">
            <img src="img/feature/savemoney.jpg" alt="">
            <h6>Save Money</h6>
        </div>
        <div class="fe-box">
            <img src="img/feature/promotion.jpg" alt="">
            <h6>Promotions</h6>
        </div>

        <div class="fe-box">
            <img src="img/feature/12694.jpg" alt="">
            <h6>Good Quality</h6>
        </div>

        <div class="fe-box">
            <img src="img/feature/247.jpg" alt="">
            <h6>F24/7 Support</h6>
        </div>
    </section>
    <section id="product1" class="section-p1">
        <h2>Featured Produtcs</h2>
        <p>can fill any text u want</p>
        <div class="pro-container">
          

          
                <?php 
                //Create SQL Query to Display CAtegories from Database
                $sql = "SELECT * FROM tbl_category WHERE active='Yes' AND featured='Yes' LIMIT 3";
                //Execute the Query
                $res = mysqli_query($conn, $sql);
                //Count rows to check whether the category is available or not
                $count = mysqli_num_rows($res);

                if($count>0)
                {
                    //CAtegories Available
                    while($row=mysqli_fetch_assoc($res))
                    {
                        //Get the Values like id, title, image_name
                        $id = $row['id'];
                        $title = $row['title'];
                        $image_name = $row['image_name'];
                        ?>
                          <div class="pro">
               
               <div class="des">
                        
                        <a href="<?php echo SITEURL; ?>category-foods.php?category_id=<?php echo $id; ?>">
                            <div class="box-3 float-container">
                                <?php 
                                    //Check whether Image is available or not
                                    if($image_name=="")
                                    {
                                        //Display MEssage
                                        echo "<div class='error'>Image not Available</div>";
                                    }
                                    else
                                    {
                                        //Image Available
                                        ?>
                                        <img src="<?php echo SITEURL; ?>images/food/<?php echo $image_name; ?>" alt="Pizza" class="img-responsive img-curve">
                                        <?php
                                    }
                                ?>
                                

                                <h3><?php echo $title; ?></h3>
                                
                            </div>
                        </a>
                        <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                 

                </div>
                <a href="#"><i class="fa fa-shopping-cart cart"></i></a>
            </div>

                        <?php
                    }
                }
                else
                {
                    //Categories not Available
                    echo "<div class='error'>Category not Added.</div>";
                }
            ?>

                    
               
                
            <div class="pro">
                <img src="img/products/f3.jpg" alt="">
                <div class="des">
                    <span>adidas</span>
                    <h5>Product Name</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>₹708</h4>

                </div>
                <a href="#"><i class="fa fa-shopping-cart cart"></i></a>
            </div>
            <div class="pro">
                <img src="img/products/f4.jpg" alt="">
                <div class="des">
                    <span>adidas</span>
                    <h5>Product Name</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>₹78</h4>

                </div>
                <a href="#"><i class="fa fa-shopping-cart cart"></i></a>
            </div>
            <div class="pro">
                <img src="img/products/f5.jpg" alt="">
                <div class="des">
                    <span>adidas</span>
                    <h5>Product Name</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>₹78</h4>

                </div>
                <a href="#"><i class="fa fa-shopping-cart cart"></i></a>
            </div>
            <div class="pro">
                <img src="img/products/f6.jpg" alt="">
                <div class="des">
                    <span>adidas</span>
                    <h5>Product Name</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>₹78</h4>

                </div>
                <a href="#"><i class="fa fa-shopping-cart cart"></i></a>
            </div>
            <div class="pro">
                <img src="img/products/f7.jpg" alt="">
                <div class="des">
                    <span>adidas</span>
                    <h5>Product Name</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>₹78</h4>

                </div>
                <a href="#"><i class="fa fa-shopping-cart cart"></i></a>
            </div>
            <div class="pro">
                <img src="img/products/f8.jpg" alt="">
                <div class="des">
                    <span>adidas</span>
                    <h5>Product Name</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>₹78</h4>

                </div>
                <a href="#"><i class="fa fa-shopping-cart cart"></i></a>
            </div>
        </div>
    </section>
    <section id="banner" class="section-m1">
        <h4>Repair Services</h4>
        <h2>Up to <span>60% Off</span> All t-Shirts & Accessories</h2>
        <button class="normal" onclick="window.location.href='shop.html'">Explore more</button>
    </section>
    <section id="product1" class="section-p1">
        <h2>New Arrivals</h2>
        <p>can palce any text</p>
        <div class="pro-container">
        <?php 
            
            //Getting Foods from Database that are active and featured
            //SQL Query
            $sql2 = "SELECT * FROM tbl_food WHERE active='Yes' AND featured='Yes' LIMIT 6";

            //Execute the Query
            $res2 = mysqli_query($conn, $sql2);

            //Count Rows
            $count2 = mysqli_num_rows($res2);

            //CHeck whether food available or not
            if($count2>0)
            {
                //Food Available
                while($row=mysqli_fetch_assoc($res2))
                {
                    //Get all the values
                    $id = $row['id'];
                    $title = $row['title'];
                    $price = $row['price'];
                    $description = $row['description'];
                    $image_name = $row['image_name'];
                    ?>

                    
                    <div class="pro">
                            <?php 
                                //Check whether image available or not
                                if($image_name=="")
                                {
                                    //Image not Available
                                    echo "<div class='error'>Image not available.</div>";
                                }
                                else
                                {
                                    //Image Available
                                    ?>
                                    <img src="<?php echo SITEURL; ?>images/food/<?php echo $image_name; ?>" alt="Chicke Hawain Pizza" class="img-responsive img-curve">
                                    <?php
                                }
                            ?>
                            
                      

                        <div class="des">
                            <h4><?php echo $title; ?></h4>
                            <div class="star">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                            
                            <p class="food-detail">
                                <?php echo $description; ?>
                            </p>
                            <h4>₹<?php echo $price; ?></h4>
                            <br>

                            <a href="<?php echo SITEURL; ?>order.php?food_id=<?php echo $id; ?>" class="btn btn-primary">Order Now</a>
                        </div>
                          
                            </div>

                    <?php
                }
            }?>
            <div class="pro">
                <img src="img/products/n1.jpg" alt="">
                <div class="des">
                    <span>adidas</span>
                    <h5>Product Name</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>₹78</h4>
                </div>
                <a href="#"><i class="fa fa-shopping-cart cart"></i></a>
            </div>
            <div class="pro">
                <img src="img/products/n2.jpg" alt="">
                <div class="des">
                    <span>adidas</span>
                    <h5>Product Name</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>₹78</h4>
                </div>
                <a href="#"><i class="fa fa-shopping-cart cart"></i></a>
            </div>
            <div class="pro">
                <img src="img/products/n3.jpg" alt="">
                <div class="des">
                    <span>adidas</span>
                    <h5>Product Name</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>₹78</h4>
                </div>
                <a href="#"><i class="fa fa-shopping-cart cart"></i></a>
            </div>
            <div class="pro">
                <img src="img/products/n4.jpg" alt="">
                <div class="des">
                    <span>adidas</span>
                    <h5>Product Name</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>₹78</h4>
                </div>
                <a href="#"><i class="fa fa-shopping-cart cart"></i></a>
            </div>
            <div class="pro">
                <img src="img/products/n5.jpg" alt="">
                <div class="des">
                    <span>adidas</span>
                    <h5>Product Name</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>₹78</h4>
                </div>
                <a href="#"><i class="fa fa-shopping-cart cart"></i></a>
            </div>
            <div class="pro">
                <img src="img/products/n7.jpg" alt="">
                <div class="des">
                    <span>adidas</span>
                    <h5>Product Name</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>₹78</h4>
                </div>
                <a href="#"><i class="fa fa-shopping-cart cart"></i></a>
            </div>
            <div class="pro">
                <img src="img/products/n8.jpg" alt="">
                <div class="des">
                    <span>adidas</span>
                    <h5>Product Name</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>₹78</h4>
                </div>
                <a href="#"><i class="fa fa-shopping-cart cart"></i></a>
            </div>
            <div class="pro">
                <img src="img/products/n6.jpg" alt="">
                <div class="des">
                    <span>adidas</span>
                    <h5>Product Name</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>₹78</h4>
                </div>
                <a href="#"><i class="fa fa-shopping-cart cart"></i></a>
            </div>
        </div>
    </section>
    <section id="sm-banner" class="section-p1">
        <div class="banner-box">
            <h4>crazy deals</h4>
            <h2>buy 1 get 1 free</h2>
            <span>The best classic dress in the earth</span>
            <button class="white">Learn More</button>
        </div>
        <div class="banner-box banner-box2">
            <h4>summer/winter</h4>
            <h2>for upcoming seasons</h2>
            <span>The Best Collections are awaiting</span>
            <button class="white">Collection</button>
        </div>
    </section>
    <section id="banner2">

        <div class="banner-box">
            <h2>SEASONAL SALE</h2>
            <h3>Winter Collection get upto 50% off</h3>
        </div>

        <div class="banner-box box2">
            <h2>DIWALI SALE</h2>
            <h3>Let's light the dark with us</h3>
        </div>
        <div class="banner-box box3">
            <h2>1+1 OFFER</h2>
            <h3>Buy one and get one free...</h3>
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
            <a href="cart.html">View Cart</a>
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