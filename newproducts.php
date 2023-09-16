<?php

@include 'config.php';

if(isset($_POST['add_product'])){
   $p_name = $_POST['p_name'];
   $p_price = $_POST['p_price'];
   $p_image = $_FILES['p_image']['name'];
   $p_image_tmp_name = $_FILES['p_image']['tmp_name'];
   $p_image_folder = 'uploaded_img/'.$p_image;

   $insert_query = mysqli_query($conn, "INSERT INTO `products`(name, price, image) VALUES('$p_name', '$p_price', '$p_image')") or die('query failed');

   if($insert_query){
      move_uploaded_file($p_image_tmp_name, $p_image_folder);
      header('location:admin.php');

      $message[] = 'product add succesfully';
   }else{
    header('location:admin1.php');

      $message[] = 'could not add the product';
      
   }
};


?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style1.css">
   <link rel="stylesheet" href="css/style.css">

   <!-- custom js file link  -->
   <script src="js/script1.js" defer></script>

</head>
<body>

<?php

$conn = mysqli_connect('localhost','root','','shop_db') or die('connection failed');
$query = "SELECT * FROM products";
$query_run = mysqli_query($conn,$query);

?>

<?php

if(isset($message)){
   foreach($message as $message){
      echo '<div class="message"><span>'.$message.'</span> <i class="fas fa-times" onclick="this.parentElement.style.display = `none`;"></i> </div>';
   };
};

?>
  <?php
         
         $select_products = mysqli_query($conn, "SELECT * FROM `products`");
         if(mysqli_num_rows($select_products) > 0){
            while($row = mysqli_fetch_assoc($select_products)){}
         }
      ?>




     
<div class="container">
   <?php
   if(mysqli_num_rows($query_run) > 0)
   {
      foreach($query_run as $row)
      {

      }
   }
   ?>
<section class="heading">
    <h3>our shop</h3>
    <p> <a href="index.php">Home</a> / <span>shop</span> </p>
</section>


   <h3 class="title"> Latest Products </h3>

   <div class="products-container">



      
   <?php
   if(mysqli_num_rows($query_run) > 0)
   {
      foreach($query_run as $row)
      {
?>

<div class="product" data-name="">
         <img src="uploaded_img/<?php echo $row['image']; ?>" alt="">
         <h3><?php echo $row['name']; ?></h3>
         <div class="price"><?php echo $row['price']; ?></div>
         <div class="buttons">
         <div class="btn">
               <a href="1.php" class="buy">Send Enquiry</a>
         </div>
        
      </div>
      </div>

<?php

      }
   }
   ?>
         


      
     
   

</div>


</div>

</body>
</html>