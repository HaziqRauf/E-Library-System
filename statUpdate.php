<?php
include 'config/config.php';
$id=$_POST['user_id'];
$stat=$_POST['statform'];
$book=$_POST['book_id'];
			if($stat=="dah")
				$status="Returned";
			else if($stat=="belom")
				$status="Borrowing";

$con = $mysql;
mysqli_select_db($con,'libman');
$sql = "UPDATE user_books SET status='$status' WHERE user_id='$id'and book_id='$book'";

        if(mysqli_query($con,$sql))
			header("refresh:1; url=bookIssued.php");
        else
            echo "Not Updated";

?>
