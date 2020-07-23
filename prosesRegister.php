<?php
include 'config/config.php';
 //assign textbox to variable
 $add_name=$_POST['username'];
 $add_pass=$_POST['userpass'];
 $add_email=$_POST['useremail'];
 $add_phone=$_POST['userphone'];
 //insert data
 $query= "INSERT INTO user(user_name,user_pass,user_email,user_phone) VALUES('$add_name','$add_pass','$add_email','$add_phone')" ;
 $result = mysqli_query( $link,$query) or die("Query failed"); 
//SQL statement for checking
 //checking either success or not
 if ($result)
echo "<script>alert('You have been registered!');window.location = 'user_login.php';</script>";
else
echo "Problem occured !";
 mysqli_close($link);
?>]