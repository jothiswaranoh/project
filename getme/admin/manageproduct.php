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
    <section class="admntbl">
        <div id="admintbl">
            <h1>Manage Products</h1>
            <?php 
                    if(isset($_SESSION['add']))
                    {
                        echo $_SESSION['add'];
                        unset($_SESSION['add']);
                    }

                    if(isset($_SESSION['delete']))
                    {
                        echo $_SESSION['delete'];
                        unset($_SESSION['delete']);
                    }

                    if(isset($_SESSION['upload']))
                    {
                        echo $_SESSION['upload'];
                        unset($_SESSION['upload']);
                    }

                    if(isset($_SESSION['unauthorize']))
                    {
                        echo $_SESSION['unauthorize'];
                        unset($_SESSION['unauthorize']);
                    }

                    if(isset($_SESSION['update']))
                    {
                        echo $_SESSION['update'];
                        unset($_SESSION['update']);
                    }
                
                ?>
            <p>provide best products to our customers:)</p>
            <button class="btn1" onclick="window.location.href='addprodct.php'";> ADD PRODUCT</button>
            <div class="tbl-header">
                <table cellpadding="0" cellspacing="0" border="0">
                    <thead>
                        <tr>
                            <th>S/N</th>
                            <th>BRAND</th>
                            <th>IMAGE</th>
                            <th>PRICE</th>
                            
                            <th>FEATURED</th>
                            <th>ACTIVE</th>
                            <th>ACTION</th>
                            
                        </tr>
                        </thead>
                       

                    
                </table>
            </div>
            <div class="tbl-content">
                <table cellpadding="0" cellspacing="0" border="0">
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>ADDIDAS</td>
                            <td></td>
                            <td>$200</td>
                            
                            <td>YES</td>
                            <td>NO</td>
                            <td><button class="btn" onclick="window.location.href='updateproduct.html'";>Update</button></td>
                            <td><button class="btn">Delete</button></td>
                       
                        <?php 
                        //Create a SQL Query to Get all the Food
                        $sql = "SELECT * FROM tbl_food";

                        //Execute the qUery
                        $res = mysqli_query($conn, $sql);

                        //Count Rows to check whether we have foods or not
                        $count = mysqli_num_rows($res);

                        //Create Serial Number VAriable and Set Default VAlue as 1
                        $sn=1;

                        if($count>0)
                        {
                            //We have food in Database
                            //Get the Foods from Database and Display
                            while($row=mysqli_fetch_assoc($res))
                            {
                                //get the values from individual columns
                                $id = $row['id'];
                                $title = $row['title'];
                                $price = $row['price'];
                                $image_name = $row['image_name'];
                                $featured = $row['featured'];
                                $active = $row['active'];
                                ?>

                                <tr>
                                    <td><?php echo $sn++; ?>. </td>
                                    <td><?php echo $title; ?></td>
                                  
                                    <td>
                                        <?php  
                                            //CHeck whether we have image or not
                                            if($image_name=="")
                                            {
                                                //WE do not have image, DIslpay Error Message
                                                echo "<div class='error'>Image not Added.</div>";
                                            }
                                            else
                                            {
                                                //WE Have Image, Display Image
                                                ?>
                                                <img src="<?php echo SITEURL; ?>images/food/<?php echo $image_name; ?>" width="100px">
                                                <?php
                                            }
                                        ?>
                                    </td>
                                    <td>$<?php echo $price; ?></td>
                                    <td><?php echo $featured; ?></td>
                                    <td><?php echo $active; ?></td>
                                    <td>
                                    
                                    <a href="<?php echo SITEURL; ?>admin/updateproduct.php?id=<?php echo $id; ?>" class="btn">Update Product</a>
                                    </td>
                                    <td>
                                        <a href="<?php echo SITEURL; ?>admin/delete-food.php?id=<?php echo $id; ?>&image_name=<?php echo $image_name; ?>" class="btn">Delete Product</a>
                                    </td>
                                </tr>

                                <?php
                            }
                        }
                        else
                        {
                            //Food not Added in Database
                            echo "<tr> <td colspan='7' class='error'> Food not Added Yet. </td> </tr>";
                        }

                    ?>
                    </tbody> 
                </table>
            </div>
        </div>
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