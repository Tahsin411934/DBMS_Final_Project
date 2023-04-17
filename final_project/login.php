<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="login.css">
    <title>Log in</title>
</head>
<body>
    <img src="aa.jpg" alt="">
  <section>
    <p>close ✕</p>
    <h1 style="color:#052146;">E-BOOKSTORE</h1>
    <h2>Secure Account Log In</h2>
    <form action="#" method="POST" enctype="multipart/form-data"> 
    <input type="text" placeholder="Id" name="Id">
    <input type="password" placeholder="Password" name="Password">
    <input class="aa" style="padding: 10px; font-size: 17px;margin-top: 40px; width: 50%;text-align: center;margin-left: 100px;background-color: seagreen;" type="submit" value="LOG IN" name="submit">
</form>
    <p style="float: left;padding: 20px;">Forgot User ID/Password?</p> <br>
    <p style="float: left;padding: 20px;">NEW USER?<a href="registerr.php"> SIGN UP</a></p> <br>
     
  </section>

</body>
</html>

<?php
include("connection.php");
if(isset($_POST['submit'])){
  $Library_Id=$_POST['Id'];
  $Password=$_POST['Password'];
$sql="select * from sign_up WHERE Library_Id= '$Library_Id' AND Password='$Password'";
$sql1="select * from admin1 WHERE Id='$Library_Id' AND Password='$Password'";

$r=mysqli_query($conn,$sql);
$r1=mysqli_query($conn,$sql1);

if(mysqli_num_rows($r)>0)
{
$_SESSION['id']=$Library_Id;
$_SESSION['customer_login_status']="loged in";
header("Location: Customer");
}
else if(mysqli_num_rows($r1)>0)
{
$_SESSION['id']=$Library_Id;
$_SESSION[ 'admin_login_status']="loged in";
header("Location: admin");
}
else {
  echo "<script>alert(' Email or Password is Wrong.')</script>";
}
}
?>