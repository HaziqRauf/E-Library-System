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
				 background-color: (rgba(255,0,0,0.2);
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
	<h2 >User List</h2>
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
    		text-align: left;
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
	<?php
    $query="SELECT * FROM user";
$result = mysqli_query( $link,$query) or die("Query failed");
?>
	<center>
	<table class="content-table" >
		<tr style="background-color: #fff;"> 
			<thead >
                          <th>User ID</th>
                          <th>Name</th>
                          <th>Phone Number</th>
                          <th>Email</th>
                          

            </thead>         
		</tr>
		<?php while ( $user = mysqli_fetch_array( $result ))
{
    $id=$user['user_id'];
    $name=$user['user_name'];
    $phone=$user['user_phone'];
    $email=$user['user_email'];
	
	?>
		<tr>
			              <th><?php echo $id; ?></th>
                          <th><?php echo $name; ?></th>
                          <th><?php echo $phone; ?></th>
                          <th><?php echo $email; ?></th>
                         
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