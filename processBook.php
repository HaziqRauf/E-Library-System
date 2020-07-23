<?php

session_start();
include 'config/config.php';

if(isset($_SESSION['user']))
{
date_default_timezone_set('Asia/Kuala_Lumpur');

$id=$_SESSION['uId'];
$s = strtotime(date("Y-m-d"));

$query="SELECT * FROM  user_books WHERE user_id='$id'";
$result = mysqli_query( $link,$query) or die("Query failed");
	$count = mysqli_num_rows($result);
	if($count == 0)
	{
		echo "<script>alert('You dont Choose any book yet!');window.location = 'index.php';</script>";
	}
	else
	{
while ( $cus = mysqli_fetch_array( $result ))
{
	$status='';
    $e=strtotime($cus['end']);
	$bId=$cus['book_id'];

if($s>$e)
{
	$status="must be returned";
}
else
{
	$status="Borrowing";
}

$con = $mysql;
mysqli_select_db($con,'libman');
$sql = "UPDATE user_books SET status='$status' WHERE user_id='$id' and book_id='$bId'";

        if(mysqli_query($con,$sql))
		{
            echo "<br>Updated.<br>";
			header("Location:bookmarks.php");
		}
        else
            echo "Not Updated";
}
	}
}
else
{
	echo '<script>window.location = "index.php";alert("Please sign up or Login as a user.")</script>';
}
?>