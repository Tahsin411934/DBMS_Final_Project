<?php
session_start();
if($_SESSION['admin_login_status']!="log in" and ! isset($_SESSION['id']))
header("Location:../index.php");
if(isset($_GET['sign']) and $_GET['sign']=="out") {
    $_SESSION['admin_login_status']="loged out";
    unset($_SESSION['id']);
    header("Location:../index.php");
}
?>
 
<!DOCTYPE html> 
<html> 



	<head> 
	<link rel="stylesheet" href="styleforcp.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
		<title> All Product Record </title> 
	</head> 
	<body> 
 
	<div class="div1">
        <ul>
            <li class="icon"><i style="margin-left: 50px; color: seagreen;" class="fas fa-book"></i> &nbsp E BookStore</li>
            <li class="title1"> <b>Welcome to Admin Pannel</b> </li>
        </ul>
       </div>
       <div class="header-2">
       <nav class="navbar">
       <ul>
      <li><a href="index.php">Home</a></li> 
      <li><a href="add.php">Add New Book</a></li> 
      <li><a href="corder.php">order</a></li> 
      <li><a href="last.php">Update</a></li>
      <li><a href="productshow.php">Show All Books</a></li> 
      <li style="margin-left:200px;" class="lo"><a href="?sign=out">Logout</a></li> 
      <li><a href="changepass.php">Change Password</a></li> 
       
   </ul>
   </nav>
    </div>
	<header style="width:330px;">
        <h1 style="margin: 30px;">About me</h1>
        <div class="about">
        <?php

    
    ?>
            <img src="a.jpg" alt="">
            <h3 class="name">Abrar Fahim</h3>
            <p class="post">Admin</p>
        </div>
        <div class="navbar">
            <ul>
                <li><a class="ab" href="index.php">Store</a></li>
                <li><a class="ab" href="Add_book.php">Order</a></li>
                <li><a class="ab" href="#home">Create post</a></li>
                <li><a class="ab" href="#home">Delevary</a></li>
                <li><a class="ab" href="#home">Contact</a></li>
            </ul>
        </div>
    </header>
<div  style="height:500px;width:550px;margin-right:200px" class="prod">
   
    <form action="changepass.php" method="post">
<div class= "row">
<hr/>
<br><br>
<div class="col-25">
    <h3 style="margin-left: 30px; margin-bottom: 30px;">change Password </h3>
<label  style="height:43px;width:200px; margin-left:30px ;" for="bookid" ><b>Your Id: </b></label>
</div>
<div class="col-75">
<input type="text"  style="height:43px;width:300px; margin-left:30px ;" name="Id" placeholder="user id">
</input>
<br>
<br>
<label  style="height:43px;width:200px; margin-left:30px ;" for="bookid" ><b>Current Password: </b></label>
</div>
<div class="col-75">
<input type="text"  style="height:43px;width:300px; margin-left:30px ;" name="Password" placeholder="Old Password...">

</input>

</div>
</div>
<div style="height:50px;width:400px; "class="row">
<div class="col-25">
    <br>
</div>
<label style="height:43px;width:200px; margin-left:30px ;" for="sprice"><b>New Password</b></label>
</div>
<div class="col-75">
<input  style="height:43px;width:300px; margin-left:30px ;" type="text" id="sprice" name="sprice" placeholder="New Password">
</div>

<input style="margin-top: px;margin-left: 172px; background-color: #4CAF50; color: white;padding: 15px 32px;text-align: center" type="submit" class="button" value="Reset Password" name="update">
</div>
</div>
</form>
</div>
</div>
</div>

<?php

include("connection.php");

if(isset($_POST['update']))
{
$id=$_POST['Id'];
$bookid=$_POST['Password'];
$sprice=$_POST['sprice'];

if($sprice>0)
{
$query="update admin1 set Password='$sprice' where Password='$bookid'AND Id='$id'";
}
if(mysqli_query($conn,$query))
{
echo "Successfully updated!";
header("Location: ../login.php");
}
else
{
echo "error!".mysqli_error($conn);
}
}
?>
</body>
</html>

