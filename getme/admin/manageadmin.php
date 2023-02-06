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
                <li><a  href="index.php">HOME</a></li>
                <li><a class="active" href="manageadmin.php">MANAGE</a></li>
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
      <h1>Manage Admins</h1>
      <?php 
                    if(isset($_SESSION['add']))
                    {
                        echo $_SESSION['add']; //Displaying Session Message
                        unset($_SESSION['add']); //REmoving Session Message
                    }

                    if(isset($_SESSION['delete']))
                    {
                        echo $_SESSION['delete'];
                        unset($_SESSION['delete']);
                    }
                    
                    if(isset($_SESSION['update']))
                    {
                        echo $_SESSION['update'];
                        unset($_SESSION['update']);
                    }

                    if(isset($_SESSION['user-not-found']))
                    {
                        echo $_SESSION['user-not-found'];
                        unset($_SESSION['user-not-found']);
                    }

                    if(isset($_SESSION['pwd-not-match']))
                    {
                        echo $_SESSION['pwd-not-match'];
                        unset($_SESSION['pwd-not-match']);
                    }

                    if(isset($_SESSION['change-pwd']))
                    {
                        echo $_SESSION['change-pwd'];
                        unset($_SESSION['change-pwd']);
                    }

                ?>
      <p>Build your empire with best Admins !</p>
      <button class="btn1"  onclick="window.location.href='addadmin.php'";>ADD ADMIN</button>
      <div class="tbl-header">
        <table cellpadding="0" cellspacing="0" border="0">
          <thead>
            <tr>
              <th>S/N</th>
              <th>FULLNAME</th>
              <th>PHONE NUMBER</th>
              <th>UPDATE</th>
              <th>CHANGE</th>
              <th>DELETE</th>
            </tr>
          </thead>
        </table>
      </div>
      <div class="tbl-content">
        <table cellpadding="0" cellspacing="0" border="0">
          <tbody>
            <tr>
            <?php 
                        //Query to Get all Admin
                        $sql = "SELECT * FROM tbl_admin";
                        //Execute the Query
                        $res = mysqli_query($conn, $sql);

                        //CHeck whether the Query is Executed of Not
                        if($res==TRUE)
                        {
                            // Count Rows to CHeck whether we have data in database or not
                            $count = mysqli_num_rows($res); // Function to get all the rows in database

                            $sn=1; //Create a Variable and Assign the value

                            //CHeck the num of rows
                            if($count>0)
                            {
                                //WE HAve data in database
                                while($rows=mysqli_fetch_assoc($res))
                                {
                                    //Using While loop to get all the data from database.
                                    //And while loop will run as long as we have data in database

                                    //Get individual DAta
                                    $id=$rows['id'];
                                    $full_name=$rows['full_name'];
                                    $username=$rows['username'];

                                    //Display the Values in our Table
                                    ?>
                                    
                                    <tr>
                                        <td><?php echo $sn++; ?>. </td>
                                        <td><?php echo $full_name; ?></td>
                                        <td><?php echo $username; ?></td>
                                        <td>
                                            <a href="<?php echo SITEURL; ?>admin/updatepassword.php?id=<?php echo $id; ?>" class="btn">Change Password</a>
                                            </td>
                                            <td>  <a href="<?php echo SITEURL; ?>admin/updateadmin.php?id=<?php echo $id; ?>" class="btn">Update Admin</a></td>
                                          <td>  <a href="<?php echo SITEURL; ?>admin/delete-admin.php?id=<?php echo $id; ?>" class="btn">Delete Admin</a></td>
                                        </td>
                                    </tr>

                                    <?php

                                }
                            }
                            else
                            {
                                //We Do not Have Data in Database
                            }
                        }

                    ?>
             
            </tr>
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