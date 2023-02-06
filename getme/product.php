<?php 
    //Include COnstants Page
    include('config/constant.php');?>
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
<?php 
        //CHeck whether id is passed or not
        if(isset($_GET['id']))
        {
            //Category id is set and get the id
            $id = $_GET['id'];
            // Get the CAtegory Title Based on Category ID
            $sql = "SELECT category_id FROM tbl_food WHERE id=$id";
            
            //Execute the Query
            $res = mysqli_query($conn, $sql);
          

            //Get the value from Database
            $row = mysqli_fetch_assoc($res);
          

            $category_id=$row['category_id'];


            $sql3="SELECT title FROM tbl_category WHERE id=$category_id";
            $res3 = mysqli_query($conn, $sql3);

            $row3= mysqli_fetch_assoc($res3);

        
          

            //Get the TItle
            $category_title = $row3['title'];
        }
        else
        {
            //CAtegory not passed
            //Redirect to Home page
            header('location:'.SITEURL);
        }
    ?>

<body>
    <div id="preloader"></div>
    <section id="header">
        <a href="index.html"><img src="img/navbar/pngwing.com.png" class="logo" alt=""></a>
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
    <section id="prodetails" class="section-p1">
        <div class="single-pro-image">
        <?php 
            
            //Create SQL Query to Get foods based on Selected CAtegory
            $sql2 = "SELECT * FROM tbl_food WHERE id=$id";

            //Execute the Query
            $res2 = mysqli_query($conn, $sql2);

            //Count the Rows
            $count2 = mysqli_num_rows($res2);

            //CHeck whether food is available or not
            if($count2>0)
            {
                //Food is Available
                while($row2=mysqli_fetch_assoc($res2))
                {
                    $id = $row2['id'];
                    $title = $row2['title'];
                    $price = $row2['price'];
                    $description = $row2['description'];
                    $image_name = $row2['image_name'];
                    $image_name5= $row2['image_name5'];
                    $image_name2 = $row2['image_name2'];
                    $image_name3 = $row2['image_name3'];
                    $image_name4 = $row2['image_name4'];
                    ?>
                    
                   
                            <?php 
                                if($image_name=="")
                                {
                                    //Image not Available
                                    echo "<div class='error'>Image not Available.</div>";
                                }
                                else
                                {
                                    //Image Available
                                    ?>
                                    <img src="<?php echo SITEURL; ?>images/food/<?php echo $image_name; ?>" alt="Chicke Hawain Pizza" width="100%" id="mainimg">
                                    <?php
                                }
             
                            ?>
                    <?php
                }
            }
            else
            {
                //Food not available
                echo "<div class='error'>Food not Available.</div>";
            }
        
        ?>
          

            <div class="small-img-grp">
                <div class="small-img-col">
                    <img src="<?php echo SITEURL; ?>images/food/<?php echo $image_name5; ?>" width="100%" class="smallimg" alt="">
                </div>
                <div class="small-img-col">
                    <img src="<?php echo SITEURL; ?>images/food/<?php echo $image_name2; ?>" width="100%" class="smallimg" alt="">
                </div>
                <div class="small-img-col">
                    <img src="<?php echo SITEURL; ?>images/food/<?php echo $image_name3; ?>" width="100%" class="smallimg" alt="">
                </div>
                <div class="small-img-col">
                    <img src="<?php echo SITEURL; ?>images/food/<?php echo $image_name4; ?>" width="100%" class="smallimg" alt="">
                </div>
            </div>
        </div>
        <div class="single-pro-dtl">
            <h6><?php echo $category_title;?></h6>
            <h4><?php echo $title;?></h4>
            <h2>₹<?php echo $price;?></h2>
           
            <input type="number" value="1">
            <button class="normal">Add to Cart</button>
            <h4>Product Details</h4>
            <span><?php echo $description;?></span>
        </div>
    </section>
    <section id="product1" class="section-p1">
        <h2>Featured Produtcs</h2>
        <p>summer collections make you cool</p>
        <div class="pro-container">
        <?php 
            
            //Getting Foods from Database that are active and featured
            //SQL Query
            $sql4 = "SELECT * FROM tbl_food WHERE active='Yes' AND featured='Yes' LIMIT 6";

            //Execute the Query
            $res4 = mysqli_query($conn, $sql4);

            //Count Rows
            $count4 = mysqli_num_rows($res4);

            //CHeck whether food available or not
            if($count4>0)
            {
                //Food Available
                while($row=mysqli_fetch_assoc($res4))
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
                                   
                        <h3><?php echo $category_title;?></h3>
                            <h4><?php echo $title; ?></h4>
                            <div class="star">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                     
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
                <img src="img/products/f1.jpg" alt="">
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
                <img src="img/products/f2.jpg" alt="">
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
                    <h4>₹78</h4>

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

        </div>
    </section>
    <section id="newsletter" class="section-p1 section-m1">
        <div class="newstext">
            <h4>Sign Up for Updates</h4>
            <p>Get E-mail updates about <span>new arrivals and special offers.</span></p>
        </div>
        <div class="form">
            <input type="text" placeholder="Enter your email">
            <button class="normal">Sign up</button>
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
        <script src="js.js"></script>
    </footer>

    <script>
        var mainimg = document.getElementById("mainimg");
        var smallimg = document.getElementsByClassName("smallimg");

        smallimg[0].onclick = function () {
            mainimg.src = smallimg[0].src;
        }
        smallimg[1].onclick = function () {
            mainimg.src = smallimg[1].src;
        }
        smallimg[2].onclick = function () {
            mainimg.src = smallimg[2].src;
        }
        smallimg[3].onclick = function () {
            mainimg.src = smallimg[3].src;
        }
    </script>
</body>

</html>