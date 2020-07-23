<?php
session_start();
if(isset($_SESSION['admin']))
{
		include 'config/config.php';
	?>
<html>
    <head>
        <title>E-LIBRARY</title>
        <link rel="stylesheet" type="text/css" href="css/style2.css">

        <style>


        	.dcontent
        	{
        		color: black;
        		
        		 
        		 margin-top: 0px;
                 margin-bottom: 100px;
				 margin-right: 20px;
				 margin-left: 20px;
				 float: left;
			     padding: 20px;
				 width: 70%;
				 background-color: (rgba(255,0,0,0.2));
				 height: 300px;

        	}




        </style>

    </head>
    <header style="background-image: url(images/book2.jpg);">
    	<div class="header">
              <h2>E-LIBRARY</h2>
              <p style="font-size: 18px">Library Management Online System</p>
              
        </div>
    </header>

  <body>
<section>
<nav>
  <center>	
	<div class="content" >
			<ul>
				<br><br>
				<li><img src="images/book4.png" width="150"></li>
				<li><a href="dashboard.php">  Dashboard</a></li>
				<li><a href="books.php">Books</a></li>
				<li><a href="users.php" >Users</a></li>
				<li><a href="bookIssued.php">Book Issued</a></li>
				<li><a href="bookReturned.php">Book Returned</a></li>
				<li><a href="logoutUser.php">Logout</a></li>
			</ul>
	</div>
</center>
</nav>

<div class="dcontent">  
	<h2 >Record of Book Issued</h2>
	<hr>

    <style>
    .content-table
    {
    	border-collapse: collapse;
    	margin: 25px 0;
    	font-size: 0.9em;
    	min-width: 400px;
      margin-top: 50px;
    }

    .content-table thead tr
    {
    	background-color: #ED5565;
    		color:#ffffffff;
    		text-align: center;
    		font-weight: bold;
    }
    .content-table th
    {
    	padding: 12px 35px;
    }
     .content-table button
    {
      color: white;
      background: transparent;
      border: none;
      font-size: 16px;
      font-family: Segoe UI Symbol;
      background: rgba(233, 61, 74);
      padding: 10px 20px;
      border-radius: 5px;
      cursor: pointer; 
    }
  

	</style>

	 
	<center>
		<?php
    $query="SELECT T.user_id,T.book_id,U.user_name,B.name,B.genre,B.author,T.status,T.start FROM user U, books B, user_books T WHERE U.user_id=T.user_id and B.id=T.book_id ORDER BY T.user_id";
$result = mysqli_query( $link,$query) or die("Query failed");
?>
	<table class="content-table" >
		<tr style="background-color: #fff;"> 
			<thead >
                          <th>No</th>
                          <th width="90">User Name</th>
                          <th>Book Name</th>
                          <th width="100">Date Issue</th>
                          <th>Status</th>
                          <center><th colspan="2" >Action</th></center>

            </thead>         
		</tr>

		<?php $x=1;
	while ( $user = mysqli_fetch_array( $result ))
{
	$id=$user['user_id'];
    $name=$user['user_name'];
    $bookName=$user['name'];
	$date=$user['start'];
	$status=$user['status'];
	?>
		<tr>
						  <th><?php echo $x++; ?></th>
			              <th><?php echo $name; ?></th>
                          <th><?php echo $bookName; ?></th>
                          <th><?php echo $date; ?></th>
						  <th><?php echo $status; ?></th>
			<th><form action="statUpdate.php" method="post" name="statform">
				<select name="statform">
                      <option value="dah">Returned</option>
                      <option value="belom">Still Borrowing</option>
				</select>
				<input type="text" name="user_id" value="<?php echo $id?>" hidden >
				<input type="text" name="book_id" value="<?php echo $user['book_id'];?>" hidden>
				<button type="submit">Submit</button></form></th>
		</tr><?php
}?>
	</table>
	</center>

   
 
   </div>


</section>
</body>


 

</html>
<?php
	}
else
{
	echo "<script>location.href='admin_login.php'</script>";
}
?>