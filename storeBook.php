<?php
session_start();

if(isset($_SESSION['user']))
{
include ('config/config.php');
	
date_default_timezone_set('Asia/Kuala_Lumpur');

$bookId=$_SESSION['cartcart'];
$userId=$_SESSION['uId'];
$s=strtotime($_SESSION['bookDate']);
$e=strtotime($_SESSION['expireDate']);
$start=date('Y-m-d',$s);
$end=date('Y-m-d',$e);	
$currBook=null;
if($s>$e)
{
	$status="must be returned";
}
else
{
	$status="Borrowing";
}

for($x=0;$x<count($bookId);$x++)
{
	$currBook=$bookId[$x];

		if(mysqli_query($mysql,"INSERT INTO user_books(user_id,book_id,start,end,status) VALUES('$userId','$currBook','$start','$end','$status')"))
        {
            echo "Data Connection Success!";
			header ("location:index.php");
        }
        else
        {
            echo $userId . $start . $end;
        }
}
}
else
{
	echo '<script>window.location = "index.php";alert("Please sign up or Login as a user.")</script>';
}

?>