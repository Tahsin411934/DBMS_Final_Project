<?php

include 'connection12.php';


?>



<!DOCTYPE html>
<html>
<head>
	<title>Change Password</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <form action="index.php" method="post">
     	<h2>Change Password</h2>
     	

     	<label>Old Password</label>
     	<input type="password" 
     	       name="op" 
     	       placeholder="Old Password">
     	       <br>

     	<label>New Password</label>
     	<input type="password" 
     	       name="np" 
     	       placeholder="New Password">
     	       <br>

     	<label>Confirm New Password</label>
     	<input type="password" 
     	       name="c_np" 
     	       placeholder="Confirm New Password">
     	       <br>

     	<input type="submit" value="submit" name="submit">
          <a href="home.php" class="ca">HOME</a>
     </form>
</body>
</html>

<?php

if(isset($_POST['submit'])){

    $opass=$_POST['op'];
    $npass=$_POST['np'];
    $cpass=$_POST['c_np'];
    if($npass==$cpass){

        $qrl="select * from users where id='$opass'";

        if(mysqli_query($conn,$qrl){
            

            if(mysqli_num_rows($sql) > 0){
                $qrl1="update users set id='$npass'";
                $sql3=mysqli_query($conn,$sql1);

                if($sql3){
                    echo"
                    <script>
                        alert('updated');
                        window.location.href='index.php';
                    </script>
                    ";
                }
                else{
                    echo"
                    <script>
                        alert('not updated');
                        window.location.href='index.php';
                    </script>
                    ";
                }
            }
            else{
                echo"
                    <script>
                        alert('register first');
                        window.location.href='index.php';
                    </script>
                    ";
            
        }


    }
    else{
        echo"
                    <script>
                        alert('q not wordk');
                        window.location.href='index.php';
                    </script>
                    ";

    }


}
else{

    echo"
    <script>
        alert('pass not match');
        window.location.href='index.php';
    </script>
    ";


}

?>