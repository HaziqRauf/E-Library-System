<?php
session_start();
$page_title="Bookmarks";

include 'config/config.php';
include 'layout_header.php';
if(isset($_SESSION['user']))
{
?>
<style>
.success {
  background-color: red;
  border: none;
  color: white;
  padding: 1px 5px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 11px;
  margin: 4px 2px;
  cursor: pointer;
}
.borrows {
  background-color: yellow;
  border: none;
  color: black;
  padding: 1px 5px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 11px;
  margin: 4px 2px;
  cursor: pointer;
}

</style>

            <table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <th>Book Title</th>
                <th>Book Genre</th>
                <th>Author Name</th>
				<th>Borrow Date</th>
                <th>Return Date</th>
                <th>Status</th>
                <th>Remaining/Expired Days</th>
              </tr>
<?php

date_default_timezone_set('Asia/Kuala_Lumpur');
$id=$_SESSION['uId'];
$s = strtotime(date("Y-m-d"));

$myquery="SELECT * FROM  user_books U, books B WHERE B.id = U.book_id and user_id='$id'";
$resulthist = mysqli_query( $link,$myquery) or die("Query failed");
while ( $cus = mysqli_fetch_array( $resulthist ))
{
$status =" ";
if($cus['status'] != 'Borrowing')
    $status = "<input type='button' class='success' value='Must be returned'>";
 else
   $status = "<input type='button' class='borrows' value='Borrowing'>";
	
	$output='';
    $n=$cus['name'];
	$g=$cus['genre'];
	$a=$cus['author'];
	$st=$cus['start'];
	$en=$cus['end'];
	$stat=$cus['status'];
    $e=strtotime($cus['end']);
	
$due=' ';
if($s>$e)
{
	$diff=$s-$e;
	$x=abs(floor($diff/(60*60*24)));
	$due="How many days after the due date: ".$x." days.<br><br>";
}
else
{
	$diff=$s-$e;
	$x=abs(floor($diff/(60*60*24)));
	$due="How many days until due date: ".$x." days.<br><br>";
}
	
?>
              	<tr>
                <td><?php echo $n;?></td>
				<td><?php echo $g;?></td>
                <td><?php echo $a;?></td>
				<td><?php echo $st;?></td>
				<td><?php echo $en;?></td>
                <td><?php echo $status;?></td>
				<td><?php echo $due;?></td>
              </tr>
				<?php
}
}
else
{
	echo '<script>window.location = "index.php";alert("Please sign up or Login as a user.")</script>';
}
?>