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
<?php 
    //CHeck whether id is set or not 
    if(isset($_GET['id']))
    {
        //Get all the details
        $id = $_GET['id'];

        //SQL Query to Get the Selected Food
        $sql2 = "SELECT * FROM tbl_food WHERE id=$id";
        //execute the Query
        $res2 = mysqli_query($conn, $sql2);

        //Get the value based on query executed
        $row2 = mysqli_fetch_assoc($res2);

        //Get the Individual Values of Selected Food
        $title = $row2['title'];
        $description = $row2['description'];
        $price = $row2['price'];
        $current_image = $row2['image_name'];
        $current_category = $row2['category_id'];
        $featured = $row2['featured'];
        $active = $row2['active'];

    }
    else
    {
        //Redirect to Manage Food
        header('location:'.SITEURL.'admin/manageproduct.php');
    }
?>

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
<section id="ad-admin" >
    <form class="prodct" action="" method="POST">
        <h2><span class="colortxt">UPDATE PRODUCT</span></h2>
        <input type="text" placeholder="Enter Brand Name" name="title" value=<?php echo $title;?>>
        <input type="text" placeholder="Enter Price"  name="price" value=<?php echo $price; ?>>
        <input type="text" placeholder="Enter Price" name="description" value=<?php echo $description; ?>>
        <select name="category">

<?php 
    //Query to Get ACtive Categories
    $sql = "SELECT * FROM tbl_category WHERE active='Yes'";
    //Execute the Query
    $res = mysqli_query($conn, $sql);
    //Count Rows
    $count = mysqli_num_rows($res);

    //Check whether category available or not
    if($count>0)
    {
        //CAtegory Available
        while($row=mysqli_fetch_assoc($res))
        {
            $category_title = $row['title'];
            $category_id = $row['id'];
            
            //echo "<option value='$category_id'>$category_title</option>";
            ?>
            <option <?php if($current_category==$category_id){echo "selected";} ?> value="<?php echo $category_id; ?>"><?php echo $category_title; ?></option>
            <?php
        }
    }
    else
    {
        //CAtegory Not Available
        echo "<option value='0'>Category Not Available.</option>";
    }

?>

</select>

        <label for="image">SELECT New IMAGE:</label><input type="file" name="image">
        <div>
        <label>FEATURED:</label>
        <input type="radio" name="featured" value="YES" ><label for="feature">YES</label>
        <input type="radio" name="featured" value="No" ><label for="feature">NO</label>
        </div>
        <div>
            <label>ACTIVE:</label>
            <input type="radio" name="active" value="YES" ><label for="feature">YES</label>
            <input type="radio" name="active" value="No" ><label for="feature">NO</label>
            </div>
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <input type="hidden" name="current_image" value="<?php echo $current_image; ?>">

        <button class="btn1" name="submit">UPDATE PRODUCT</button>

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
        
        if(isset($_POST['submit']))
        {
            //echo "Button Clicked";

            //1. Get all the details from the form
            $id = $_POST['id'];
            $title = $_POST['title'];
            $description = $_POST['description'];
            $price = $_POST['price'];
            $current_image = $_POST['current_image'];
            $category = $_POST['category'];

            $featured = $_POST['featured'];
            $active = $_POST['active'];

            //2. Upload the image if selected

            //CHeck whether upload button is clicked or not
            if(isset($_FILES['image']['name']))
            {
                //Upload BUtton Clicked
                $image_name = $_FILES['image']['name']; //New Image NAme

                //CHeck whether th file is available or not
                if($image_name!="")
                {
                    //IMage is Available
                    //A. Uploading New Image

                    //REname the Image
                    $ext = end(explode('.', $image_name)); //Gets the extension of the image

                    $image_name = "Food-Name-".rand(0000, 9999).'.'.$ext; //THis will be renamed image

                    //Get the Source Path and DEstination PAth
                    $src_path = $_FILES['image']['tmp_name']; //Source Path
                    $dest_path = "../images/food/".$image_name; //DEstination Path

                    //Upload the image
                    $upload = move_uploaded_file($src_path, $dest_path);

                    /// CHeck whether the image is uploaded or not
                    if($upload==false)
                    {
                        //FAiled to Upload
                        $_SESSION['upload'] = "<div class='error'>Failed to Upload new Image.</div>";
                        //REdirect to Manage Food 
                        header('location:'.SITEURL.'admin/manageproduct.php');
                        //Stop the Process
                        die();
                    }
                    //3. Remove the image if new image is uploaded and current image exists
                    //B. Remove current Image if Available
                    if($current_image!="")
                    {
                        //Current Image is Available
                        //REmove the image
                        $remove_path = "../images/food/".$current_image;

                        $remove = unlink($remove_path);

                        //Check whether the image is removed or not
                        if($remove==false)
                        {
                            //failed to remove current image
                            $_SESSION['remove-failed'] = "<div class='error'>Faile to remove current image.</div>";
                            //redirect to manage food
                            header('location:'.SITEURL.'admin/manageproduct.php');
                            //stop the process
                            die();
                        }
                    }
                }
                else
                {
                    $image_name = $current_image; //Default Image when Image is Not Selected
                }
            }
            else
            {
                $image_name = $current_image; //Default Image when Button is not Clicked
            }

            

            //4. Update the Food in Database
            $sql3 = "UPDATE tbl_food SET 
                title = '$title',
                description = '$description',
                price = $price,
                image_name = '$image_name',
                category_id = '$category',
                featured = '$featured',
                active = '$active'
                WHERE id=$id
            ";

            //Execute the SQL Query
            $res3 = mysqli_query($conn, $sql3);

            //CHeck whether the query is executed or not 
            if($res3==true)
            {
                //Query Exectued and Food Updated
                $_SESSION['update'] = "<div class='success'>Food Updated Successfully.</div>";
                header('location:'.SITEURL.'admin/manage-food.php');
            }
            else
            {
                //Failed to Update Food
                $_SESSION['update'] = "<div class='error'>Failed to Update Food.</div>";
                header('location:'.SITEURL.'admin/manage-food.php');
            }

            
        }
    
    ?>

</div>
</div>