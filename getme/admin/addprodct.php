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
    <a href="index.html"><img src="../img/navbar/pngwing.com.png" class="logo" alt=""></a>
    <div>
      <ul id="navbar">
        <li><a href="index.html">HOME</a></li>
        <li><a class="active" href="manageadmin.html">MANAGE</a></li>
        <li><a href="manageproduct.html">PRODUCTS</a></li>
        <li><a href="order.html">ORDERS</a></li>
        <li><a href="../login.html">LOGOUT</a></li>
        <a href="#" id="close"><i class="far fa-x"></i></a>
      </ul>
      <div id="mobile">
        <a href="#"><i class="fa-solid fa-bag-shopping line"></i></a>
        <i id="bar" class="fas fa-outdent"></i>
      </div>
    </div>
  </section>
  <section id="ad-admin">
  <form action="" method="POST" enctype="multipart/form-data" class="prodct">

      <h2><span class="colortxt">ADD PRODUCT</span></h2>
      <input type="text" name="title" placeholder="Enter Brand Name">
      <input type="text"name="price" placeholder="Enter Price">
      <input type="text"name="description" placeholder="Enter Price">
      
                        <select name="category">

                            <?php 
                                //Create PHP Code to display categories from Database
                                //1. CReate SQL to get all active categories from database
                                $sql = "SELECT * FROM tbl_category WHERE active='Yes'";
                                
                                //Executing qUery
                                $res = mysqli_query($conn, $sql);

                                //Count Rows to check whether we have categories or not
                                $count = mysqli_num_rows($res);

                                //IF count is greater than zero, we have categories else we donot have categories
                                if($count>0)
                                {
                                    //WE have categories
                                    while($row=mysqli_fetch_assoc($res))
                                    {
                                        //get the details of categories
                                        $id = $row['id'];
                                        $title = $row['title'];

                                        ?>

                                        <option value="<?php echo $id; ?>"><?php echo $title; ?></option>

                                        <?php
                                    }
                                }
                                else
                                {
                                    //WE do not have category
                                    ?>
                                    <option value="0">No Category Found</option>
                                    <?php
                                }
                            

                                //2. Display on Drpopdown
                            ?>

                        </select>
               
     
      <label for="image">SELECT IMAGE:</label><input type="file" name="image">
      <label for="image">SELECT IMAGE:</label><input type="file" name="image2">
      <label for="image">SELECT IMAGE:</label><input type="file" name="image3">
      <label for="image">SELECT IMAGE:</label><input type="file" name="image4">
      <label for="image">SELECT IMAGE:</label><input type="file" name="image5">
      <div>
        <label>FEATURED:</label>
        <input type="radio" name="featured" value="Yes"><label for="feature">YES</label>
        <input type="radio" name="featured" value="No"><label for="feature">NO</label>
      </div>
      <div>
        <label>ACTIVE:</label>
        <input type="radio" name="active" value="Yes"><label for="feature">YES</label>
        <input type="radio" name="active" value="No"><label for="feature">NO</label>
      </div>
      <button class="btn1" name="submit">ADD</button>

    </form>
    <?php 

//CHeck whether the button is clicked or not
if(isset($_POST['submit']))
{
    //Add the Food in Database
    //echo "Clicked";
    
    //1. Get the DAta from Form
    $title = $_POST['title'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $category = $_POST['category'];

    //Check whether radion button for featured and active are checked or not
    if(isset($_POST['featured']))
    {
        $featured = $_POST['featured'];
    }
    else
    {
        $featured = "No"; //SEtting the Default Value
    }

    if(isset($_POST['active']))
    {
        $active = $_POST['active'];
    }
    else
    {
        $active = "No"; //Setting Default Value
    }

    //2. Upload the Image if selected
    //Check whether the select image is clicked or not and upload the image only if the image is selected
    if(isset($_FILES['image']['name']))
    {
        //Get the details of the selected image
        $image_name = $_FILES['image']['name'];

        //Check Whether the Image is Selected or not and upload image only if selected
        if($image_name!="")
        {
            // Image is SElected
            //A. REnamge the Image
            //Get the extension of selected image (jpg, png, gif, etc.) "vijay-thapa.jpg" vijay-thapa jpg
            $tmp = explode('.', $image_name);
            $ext= end($tmp);;

            // Create New Name for Image
            $image_name = "Food-Name-".rand(0000,9999).".".$ext; //New Image Name May Be "Food-Name-657.jpg"

            //B. Upload the Image
            //Get the Src Path and DEstinaton path

            // Source path is the current location of the image
            $src = $_FILES['image']['tmp_name'];

            //Destination Path for the image to be uploaded
            $dst = "../images/food/".$image_name;

            //Finally Uppload the food image
            $upload = move_uploaded_file($src, $dst);

            //check whether image uploaded of not
            if($upload==false)
            {
                //Failed to Upload the image
                //REdirect to Add Food Page with Error Message
                //$_SESSION['upload'] = "<div class='error'>Failed to Upload Image.</div>";
               // header('location:'.SITEURL.'admin/');
                //STop the process
                die();
            }

        }

    }
    else
    {
        $image_name = ""; //SEtting DEfault Value as blank
    }

    if(isset($_FILES['image2']['name']))
    {
        //Get the details of the selected image
        $image_name2 = $_FILES['image2']['name'];

        //Check Whether the Image is Selected or not and upload image only if selected
        if($image_name2!="")
        {
            // Image is SElected
            //A. REnamge the Image
            //Get the extension of selected image (jpg, png, gif, etc.) "vijay-thapa.jpg" vijay-thapa jpg
            $tmp = explode('.', $image_name2);
            $ext1= end($tmp);

            // Create New Name for Image
            $image_name2 = "Food-Name-".rand(0000,9999).".".$ext1; //New Image Name May Be "Food-Name-657.jpg"

            //B. Upload the Image
            //Get the Src Path and DEstinaton path

            // Source path is the current location of the image
            $src1 = $_FILES['image2']['tmp_name'];

            //Destination Path for the image to be uploaded
            $dst1 = "../images/food/".$image_name2;

            //Finally Uppload the food image
            $upload = move_uploaded_file($src1, $dst1);

            //check whether image uploaded of not
            if($upload==false)
            {
                //Failed to Upload the image
                //REdirect to Add Food Page with Error Message
                $_SESSION['upload'] = "<div class='error'>Failed to Upload Image.</div>";
                header('location:'.SITEURL.'admin/');
                //STop the process
                die();
            }

        }

    }
    else
    {
        $image_name2 = ""; //SEtting DEfault Value as blank
    }
    if(isset($_FILES['image3']['name']))
    {
        //Get the details of the selected image
        $image_name3 = $_FILES['image3']['name'];

        //Check Whether the Image is Selected or not and upload image only if selected
        if($image_name3!="")
        {
            // Image is SElected
            //A. REnamge the Image
            //Get the extension of selected image (jpg, png, gif, etc.) "vijay-thapa.jpg" vijay-thapa jpg
            $tmp = explode('.', $image_name2);
            $ext1= end($tmp);

            // Create New Name for Image
            $image_name3 = "Food-Name-".rand(0000,9999).".".$ext1; //New Image Name May Be "Food-Name-657.jpg"

            //B. Upload the Image
            //Get the Src Path and DEstinaton path

            // Source path is the current location of the image
            $src1 = $_FILES['image3']['tmp_name'];

            //Destination Path for the image to be uploaded
            $dst1 = "../images/food/".$image_name3;

            //Finally Uppload the food image
            $upload = move_uploaded_file($src1, $dst1);

            //check whether image uploaded of not
            if($upload==false)
            {
                //Failed to Upload the image
                //REdirect to Add Food Page with Error Message
                $_SESSION['upload'] = "<div class='error'>Failed to Upload Image.</div>";
                header('location:'.SITEURL.'admin/');
                //STop the process
                die();
            }

        }

    }
    else
    {
        $image_name3 = ""; //SEtting DEfault Value as blank
    }
    if(isset($_FILES['image4']['name']))
    {
        //Get the details of the selected image
        $image_name4 = $_FILES['image4']['name'];

        //Check Whether the Image is Selected or not and upload image only if selected
        if($image_name4!="")
        {
            // Image is SElected
            //A. REnamge the Image
            //Get the extension of selected image (jpg, png, gif, etc.) "vijay-thapa.jpg" vijay-thapa jpg
            $tmp = explode('.', $image_name4);
            $ext1= end($tmp);

            // Create New Name for Image
            $image_name4 = "Food-Name-".rand(0000,9999).".".$ext1; //New Image Name May Be "Food-Name-657.jpg"

            //B. Upload the Image
            //Get the Src Path and DEstinaton path

            // Source path is the current location of the image
            $src1 = $_FILES['image4']['tmp_name'];

            //Destination Path for the image to be uploaded
            $dst1 = "../images/food/".$image_name4;

            //Finally Uppload the food image
            $upload = move_uploaded_file($src1, $dst1);

            //check whether image uploaded of not
            if($upload==false)
            {
                //Failed to Upload the image
                //REdirect to Add Food Page with Error Message
                $_SESSION['upload'] = "<div class='error'>Failed to Upload Image.</div>";
                header('location:'.SITEURL.'admin/manageproduct.php');
                //STop the process
                die();
            }

        }

    }
    else
    {
        $image_name4 = ""; //SEtting DEfault Value as blank
    }
    if(isset($_FILES['image5']['name']))
    {
        //Get the details of the selected image
        $image_name5 = $_FILES['image5']['name'];

        //Check Whether the Image is Selected or not and upload image only if selected
        if($image_name5!="")
        {
            // Image is SElected
            //A. REnamge the Image
            //Get the extension of selected image (jpg, png, gif, etc.) "vijay-thapa.jpg" vijay-thapa jpg
            $tmp = explode('.', $image_name5);
            $ext1= end($tmp);

            // Create New Name for Image
            $image_name5 = "Food-Name-".rand(0000,9999).".".$ext1; //New Image Name May Be "Food-Name-657.jpg"

            //B. Upload the Image
            //Get the Src Path and DEstinaton path

            // Source path is the current location of the image
            $src1 = $_FILES['image5']['tmp_name'];

            //Destination Path for the image to be uploaded
            $dst1 = "../images/food/".$image_name5;

            //Finally Uppload the food image
            $upload = move_uploaded_file($src1, $dst1);

            //check whether image uploaded of not
            if($upload==false)
            {
                //Failed to Upload the image
                //REdirect to Add Food Page with Error Message
                $_SESSION['upload'] = "<div class='error'>Failed to Upload Image.</div>";
                header('location:'.SITEURL.'admin/');
                //STop the process
                die();
            }

        }

    }
    else
    {
        $image_name5 = ""; //SEtting DEfault Value as blank
    }
//Create a SQL Query to Save or Add food
// For Numerical we do not need to pass value inside quotes '' But for string value it is compulsory to add quotes ''
$sql5 = "INSERT INTO tbl_food SET 
    title = '$title',
    description = '$description',
    price = $price,
    image_name = '$image_name',
    

    category_id = $category,
    featured = '$featured',
    active = '$active',
    image_name2 = '$image_name2',
    image_name3 = '$image_name3',
    image_name4 = '$image_name4',
    image_name5 = '$image_name5'
";

//Execute the Query
$res5 = mysqli_query($conn, $sql5);

//CHeck whether data inserted or not
//4. Redirect with MEssage to Manage Food page
if($res5 == true)
{
    //Data inserted Successfullly
    $_SESSION['add'] = "<div class='success'>Product Added Successfully.</div>";
    header('location:'.SITEURL.'admin/manageproduct.php');
}
else
{
    //FAiled to Insert Data
    $_SESSION['add'] = "<div class='error'>Failed to Add Product.</div>";
   header('location:'.SITEURL.'admin/');
}


}

?>

   
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