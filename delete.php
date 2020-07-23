<?php
include 'config/config.php';
 //delete data
 $delete_id=$_GET['user_id'];
 $query = "DELETE FROM books WHERE id='$delete_id'";
 $result = mysqli_query( $link,$query) or die("Query failed");
 if ($result)
 echo "<script>alert('Delete Successfully!');window.location='books.php';</script>";
 else
 echo "Problem occured !";
 mysqli_close($link);
?>