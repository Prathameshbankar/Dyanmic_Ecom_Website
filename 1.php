<?php
  if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){
    $loggedin = true;
  }
  else{
    $loggedin = false;
  }
   
$insert = false;
if(isset($_POST['name'])){

$server = "localhost";
$username = "root";
$password = "";


$con = mysqli_connect($server, $username, $password);

if(!$con)
{
    die("connection to this database failed due to". mysqli_connect_error());

}

// echo "success connecting to the db";
$name = $_POST['name'];

$email = $_POST['email'];
$phone = $_POST['phone'];
$desc = $_POST['msg'];

$sql = "INSERT INTO `entry`.`entry` ( `name`, `email`, `phone`, `msg`, `date`) VALUES ('$name', '$email', '$phone', '$desc', current_timestamp())";
// echo $sql;

if($con->query($sql)==true){
    // echo "succesfully inserted";
    $insert = true;


}
else{
    echo "ERROR: $sql <br> $con->error";
}

$con->close();
}
?>
<?php include_once("controller.php"); ?>
<?php
$visited = false;
$email = $_SESSION['email'];
$password = $_SESSION['password'];
$fname = $_SESSION['name'];

if($email != false && $password != false){
    $query = "SELECT * FROM userInfo WHERE email = '$email' AND password = '$password'";
    $run_query = mysqli_query($conn , $query);
    if($run_query){
        $fetch_data = mysqli_fetch_assoc($run_query);
        $status = $fetch_data['status'];
        if($status != "Verified"){
            header("location: otp.php");
        }
        if($status == "Verified"){
            $_SESSION['loggedin'] = true;
            $visited = true;
        }
    }
}
else{
    header('location: login.php');
}
if($visited == true){
  $_SESSION['loggedin'] = true;
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta character="utf-8">
	<title></title>
	<style type="text/css">
		body{
    background-image: url(./curology-6CJg-fOTYs4-unsplash.jpg);
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: 100% 100%;
    
	}

  h2{
    text-align:center;
    font-family:courier;
  }
		.form-control {
    width: 100%;
    height: 34px;
    padding: 6px 12px;
    font-size: 14px;
    color: #555;
    background-color: #fff;
    border: 1px solid #ccc;
    border-radius: 4px;
}
.btn-primary {
    padding: 6px 12px;
    font-size: 14px;
    font-weight: 400;
    cursor: pointer;
    border: 1px solid transparent;
    border-radius: 4px; 
    background-color: #337ab7;
    color: #fff;
}
textarea.form-control {
    height: auto;
}
.container 
{ 
margin-left: 35%;
width: 400px ;
margin-top: 6%;
background-color: yellow;
padding: 30px;
padding-right: 60px;
box-shadow: 10px 5px 5px grey;
 }
label   {
	font-size: 18px;
}
.success 
{ 
	margin: 5px auto;
  border-radius: 5px;
  border: 3px solid #fff;
  background: #33CC00;
  color: #fff;
font-size: 20px;
  padding: 10px;
  box-shadow: 10px 5px 5px grey;
}


	</style>
</head>
<body>
	<div class="container">

	<?php
 if(isset($_POST['submit_form']))
			{ 
          $name=$_POST['name']; 
       $email=$_POST['email']; 
        $msg=$_POST['msg']; 
       $phone=$_POST['phone']; 
       $FromName="Sabne Furniture";
$FromEmail=" ";
$ReplyTo=$email;
$toemail="bankarprathamesh45@gmail.com";
$subject="Sabne Furniture Enquiry form"; 
$message='Name:-'.$name.'<br>Email :-' .$email.'<br> Phone No:-'.$phone.'<br> Message:-'.$msg;
$headers = "MIME-Version: 1.0\n";
$headers .= "Content-type: text/html; charset=iso-8859-1\n";
$headers .= "From: ".$FromName." <".$FromEmail.">\n";
$headers .= "Reply-To: ".$ReplyTo."\n";
$headers .= "X-Sender: <".$FromEmail.">\n";
$headers .= "X-Mailer: PHP\n";
$headers .= "X-Priority: 1\n";
$headers .= "Return-Path: <".$FromEmail.">\n";
   if(mail($toemail, $subject, $message, $headers,'-f'.$FromEmail) ){
          $hide=1;
        
         echo '<div class="success"><center><span style="font-size:100px;">&#9989;</span></center> <br> Thank you <strong>'.$name.',</strong> Your message has been sent. We will reply soon as possible. </div> '; 
        
	      
	} else {
		echo "The server failed to send the message. Please try again later or Make sure , you are using live server for email.";
} 

			}
			if(!isset($hide)){
		
		?> 
<?php
  if($_SESSION['loggedin'] == true){
    echo '<h2> <b>ENQUIRY FORM</b> </h2>
        
    <form action="1.php" method="POST">
      <label> Name :-</label>
        <input type="text" name="name" class="form-control" required placeholder=" Name">

        <label>Email :-</label>
        <input type="email" name="email" class="form-control" required placeholder="Email">

        <label>Phone Number :-</label>
        <input type="number" name="phone" class="form-control" required placeholder="Phone number">

        <label> Message :-</label>
        <textarea name="msg" cols="10" rows="5"  class="form-control" required placeholder="Write here msg"></textarea> 
        <input type="submit" name="submit_form" value="Send Enquiry " class="btn-primary">';
        if($_SESSION['loggedin'] == true){
        echo'<h3><a href="main.php">Return to Home</a></h3>';
        }
        else{
          echo'<h3><a href="home.php">Return to Home</a></h3>';
        }
      echo'</form>';
  }
  else{
    header("location: login.php");
  }
?>
<?php } ?>
</div>
</body>
</html>