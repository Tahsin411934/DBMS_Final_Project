<?php
include("connection.php");
if(isset($_POST['submit'])){
  $id1=rand(10000,100000000);
	$Library_Id=$_POST['pid'];
	$Name=$_POST['name'];
	$Email=$_POST['email'];
	$Gender=$_POST['gen'];
    $ext=explode(".",$_FILES['pic']['name']);
    $c=count($ext);
    $ext=$ext[$c-1];

     $date=date("D:M:Y");
     $time=date("h:i:s");
    $image_name=md5($date.$time);
    $Image=$image_name.".".$ext;
    // $file_name=$_FILES['img'] []



$qrl="INSERT INTO add_stationart_product VALUES('$Library_Id','$Name','$Email',$Gender,'$Image')";
if(mysqli_query($conn,$qrl))
{ 
    
  echo"inserted  "; 
  echo"account no is A- $id1";
  if($Image !=null){
      move_uploaded_file($_FILES['pic']['tmp_name'],"imgbook/$Image");
  }
  
}else{
  echo"not inserted".mysqli_error($conn);
}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <link rel="stylesheet" href="styl.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <title>ADD BOOKS</title>
    <style>
        input{
            padding: 10px;
            width: 450px;
            margin-bottom: 30px;
            border-radius: 10px;

        }
        label{
            margin-right: 20px;
        }
        #cars{
            padding: 10px;
            width: 450px;
            margin-bottom: 30px;
            border-radius: 10px;
            margin-left: 10px;
            
        }
    </style>
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
           <li><a href="Add_book.php">Add Book</a></li> 
           <li><a href="#home">Stationery</a></li> 
           <li><a href="#home">Create Post</a></li>
           <li><a href="#">Order</a></li> 
           <li class="lo"><a href="#">Logout</a></li> 
           <li><a href="#">Change Password</a></li> 
            
        </ul>
        </nav>
    </div>
    
    <header style="width:330px;">
        <h1 style="margin: 30px;">About me</h1>
        <div class="about">
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
    <h2 style="text-align: center;margin-top: 20px;padding: 40px;">Post New Stationery Item</h2>
    <div  class="post" style="margin-left: 50px;">
            <form action="add.php" method="POST" enctype="multipart/form-data">  
        <label style=" ;" for="#">P  ID</label> 
        <input style="" type="text" name="pid" placeholder="p-1234" require> <br>

        <label for="#">Name</label>
        <input style="" type="text" name="name" placeholder="pen" require> <br>

        <label for="#">Type</label>
        <input style="" type="TEXT" name="email"><br>
        <label for="#">price</label>
        <input style="" type="TEXT" name="gen"><br>

        
         

        <!-- <label for="#">Type of card Registration</label>
        <input style="width: 60%; "type="text" placeholder="Master card,visa card or other" name="tocr"> -->

        <label>Select file to upload:</label>  
     <input style="margin-top: 10px; margin-left: 50px;" type="file" name="pic"> <br> 
     
     <input class="aa" style="padding: 10px; font-size: 17px;margin-top: 10px; width: 10%;text-align: center;margin-left: 50%;background-color: seagreen;" type="submit" value="ADD" name="submit">
    
    
</body>
</html>