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
    <?php 
                    if(isset($_SESSION['update']))
                    {
                        echo $_SESSION['update'];
                        unset($_SESSION['update']);
                    }
                ?>
  <section class="admntbl">
    <div id="admintbl" style="overflow-x:auto;">
      <h1>Manage Orders</h1>
      <p>Make your customers happy <span> 😀 </span></p>
      <div class="tbl-header">
        <table cellpadding="0" cellspacing="0" border="0">
          <thead>
            <tr>
            <th>S.N.</th>
           <th>Name</th>
                        <th>Price</th>
                        <th>Qty.</th>
                        <th>Total</th>
                        <th>Order Date</th>
                        <th>Status</th>
                        <th>Customer Name</th>
                        <th>Contact</th>
                        <th>Email</th>
                        <th>Address</th>
                        <th>Actions</th>
            </tr>
          </thead>
        </table>
      </div>
      <div class="tbl-content">
        <table cellpadding="0" cellspacing="0" border="0">
          <tbody>
            <tr>
            <?php 
                        //Get all the orders from database
                        $sql = "SELECT * FROM tbl_order ORDER BY id DESC"; // DIsplay the Latest Order at First
                        //Execute Query
                        $res = mysqli_query($conn, $sql);
                        //Count the Rows
                        $count = mysqli_num_rows($res);

                        $sn = 1; //Create a Serial Number and set its initail value as 1

                        if($count>0)
                        {
                            //Order Available
                            while($row=mysqli_fetch_assoc($res))
                            {
                                //Get all the order details
                                $id = $row['id'];
                                $food = $row['food'];
                                $price = $row['price'];
                                $qty = $row['qty'];
                                $total = $row['total'];
                                $order_date = $row['order_date'];
                                $status = $row['status'];
                                $customer_name = $row['customer_name'];
                                $customer_contact = $row['customer_contact'];
                                $customer_email = $row['customer_email'];
                                $customer_address = $row['customer_address'];
                                
                                ?>

                                    <tr>
                                        <td><?php echo $sn++; ?>. </td>
                                        <td><?php echo $food; ?></td>
                                        <td><?php echo $price; ?></td>
                                        <td><?php echo $qty; ?></td>
                                        <td><?php echo $total; ?></td>
                                        <td><?php echo $order_date; ?></td>

                                        <td>
                                            <?php 
                                                // Ordered, On Delivery, Delivered, Cancelled

                                                if($status=="Ordered")
                                                {
                                                    echo "<label>$status</label>";
                                                }
                                                elseif($status=="On Delivery")
                                                {
                                                    echo "<label style='color: orange;'>$status</label>";
                                                }
                                                elseif($status=="Delivered")
                                                {
                                                    echo "<label style='color: green;'>$status</label>";
                                                }
                                                elseif($status=="Cancelled")
                                                {
                                                    echo "<label style='color: red;'>$status</label>";
                                                }
                                            ?>
                                        </td>

                                        <td><?php echo $customer_name; ?></td>
                                        <td><?php echo $customer_contact; ?></td>
                                        <td><?php echo $customer_email; ?></td>
                                        <td><?php echo $customer_address; ?></td>
                                        <td>
                                            <a href="<?php echo SITEURL; ?>admin/update-order.php?id=<?php echo $id; ?>" class="btn">Update Order</a>
                                        </td>
                                    </tr>

                                <?php

                            }
                        }
                        else
                        {
                            //Order not Available
                            echo "<tr><td colspan='12' class='error'>Orders not Available</td></tr>";
                        }
                    ?>

              <td>1</td>
              <td>Shirt</td>
              <td>2</td>
              <td>2</td>
              <td>$150</td>
              <td>Ordered</td>
              <td>Prabanjan</td>
              <td>1234567890</td>
              <td>RTC</td>
              <td><button class="btn" role="button" onclick="window.location.href='updateorder.html'";>UPDATE</button></td>
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

</html> */




<!-- 
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
    <a href="index.html"><img src="../img/navbar/pngwing.com.png" class="logo" alt=""></a>
    <div>
      <ul id="navbar">
        <li><a href="index.html">HOME</a></li>
        <li><a href="manageadmin.html">MANAGE</a></li>
        <li><a href="manageproduct.html">PRODUCTS</a></li>
        <li><a class="active" href="order.html">ORDERS</a></li>
        <li><a href="../login.html">LOGOUT</a></li>
        <a href="#" id="close"><i class="far fa-x"></i></a>
      </ul>
      <div id="mobile">
        <i id="bar" class="fas fa-outdent"></i>
      </div>
    </div>
  </section>
  <section id="#admintbl">
    <div style="overflow-x:auto;">
      <table>
        <tr>
          <th>S/N</th>
          <th>NAME</th>
          <th>QTY</th>
          <th>PRICE</th>
          <th>DATE</th>
          <th>STATUS</th>
          <th>CUSTOMER NAME</th>
          <th>CONTACT</th>
          <th>EMAIL</th>
          <th>PLACE</th>
          <th>ACTION</th>
        </tr>
        <tr>
          <td>1</td>
          <td>Shirt</td>
          <td>2</td>
          <td>2</td>
          <td>$150</td>
          <td>Ordered</td>
          <td>Prabanjan</td>
          <td>1234567890</td>
          <td>arunarun211@gamil.com</td>
          <td>RTC</td>
          <td><button class="normal1 blue">Delete</button></td>
        </tr>
      </table>
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


  <style>
    table {
    
      border-spacing: 0;
      width: 100%;
      border: 1px solid #ddd;
    }
    
    th, td {
      text-align: left;
      padding: 8px;
    }
    
    tr:nth-child(even){background-color: #f2f2f2}
    </style>
</body>

</html> -->








<!-- HTML !-->


/* CSS */
.button-62 {
  background: linear-gradient(to bottom right, #EF4765, #FF9A5A);
  border: 0;
  border-radius: 12px;
  color: #FFFFFF;
  cursor: pointer;
  display: inline-block;
  font-family: -apple-system,system-ui,"Segoe UI",Roboto,Helvetica,Arial,sans-serif;
  font-size: 16px;
  font-weight: 500;
  line-height: 2.5;
  outline: transparent;
  padding: 0 1rem;
  text-align: center;
  text-decoration: none;
  transition: box-shadow .2s ease-in-out;
  user-select: none;
  -webkit-user-select: none;
  touch-action: manipulation;
  white-space: nowrap;
}

.button-62:not([disabled]):focus {
  box-shadow: 0 0 .25rem rgba(0, 0, 0, 0.5), -.125rem -.125rem 1rem rgba(239, 71, 101, 0.5), .125rem .125rem 1rem rgba(255, 154, 90, 0.5);
}

.button-62:not([disabled]):hover {
  box-shadow: 0 0 .25rem rgba(0, 0, 0, 0.5), -.125rem -.125rem 1rem rgba(239, 71, 101, 0.5), .125rem .125rem 1rem rgba(255, 154, 90, 0.5);
}