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
<?php 
            //1. Get the ID of Selected Admin
            $id=$_GET['id'];

            //2. Create SQL Query to Get the Details
            $sql="SELECT * FROM tbl_admin WHERE id=$id";

            //Execute the Query
            $res=mysqli_query($conn, $sql);

            //Check whether the query is executed or not
            if($res==true)
            {
                // Check whether the data is available or not
                $count = mysqli_num_rows($res);
                //Check whether we have admin data or not
                if($count==1)
                {
                    // Get the Details
                    //echo "Admin Available";
                    $row=mysqli_fetch_assoc($res);

                    $full_name = $row['full_name'];
                    $mobilenumber = $row['mobilenumber'];
                }
                else
                {
                    //Redirect to Manage Admin PAge
                    header('location:'.SITEURL.'admin/manage-admin.php');
                }
            }
        
        ?>
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
    <form action="" method="POST">
        <h2><span class="colortxt">UPDATE ADMIN</span></h2>
        <input type="text" placeholder="Enter FullName" name="full_name" value="<?php echo $full_name; ?>">
        <input type="tel" placeholder="Enter mobile number" name ="mobilenumber" value="<?php echo $mobilenumber;?>">
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <button class="btn1" name="submit">UPDATE</button>
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

<?php 

    //Check whether the Submit Button is Clicked or not
    if(isset($_POST['submit']))
    {
        //echo "Button CLicked";
        //Get all the values from form to update
        $id = $_POST['id'];
        $full_name = $_POST['full_name'];
        $mobilenumber = $_POST['mobilenumber'];

        //Create a SQL Query to Update Admin
        $sql = "UPDATE tbl_admin SET
        full_name = '$full_name',
        mobilenumber = '$mobilenumber' 
        WHERE id='$id'
        ";

        //Execute the Query
        $res = mysqli_query($conn, $sql);
        

        //Check whether the query executed successfully or not
        if($res==true)
        {
            //Query Executed and Admin Updated
            $_SESSION['update'] = "<div class='success'>Admin Updated Successfully.</div>";
            //Redirect to Manage Admin Page
            header('location:'.SITEURL.'admin/manageadmin.php');
        }
        else
        {
            //Failed to Update Admin
            $_SESSION['update'] = "<div class='error'>Failed to Delete Admin.</div>";
            //Redirect to Manage Admin Page
            header('location:'.SITEURL.'admin/manageadmin.php');
        }
    }

?>


<?php include('partials/footer.php'); ?>