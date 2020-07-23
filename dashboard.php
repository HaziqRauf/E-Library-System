<?php
session_start();
if(isset($_SESSION['admin']))
{
	include 'config/config.php';
              $query = "SELECT `user_id` FROM `user_books` GROUP BY `user_id`";
              $numberOfUser = mysqli_num_rows(mysqli_query($link,$query));
              $query = "SELECT `id` FROM `books`";
              $numberOfBooks = mysqli_num_rows(mysqli_query($link,$query));
              $query = "SELECT `user_id` FROM `user_books` group by `user_id`";
              $numberOfBorrowers = mysqli_num_rows(mysqli_query($link,$query));
              $query = "SELECT `user_id` FROM `user` group by `user_id`";
              $numberOfUser = mysqli_num_rows(mysqli_query($link,$query));
              $query = "SELECT * FROM `user_books`";
              $numberOfBorrowedBooks = mysqli_num_rows(mysqli_query($link,$query));
              
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
	<h2 >Dashboard</h2>
	<hr>

    

	<style >
	.tot-book
	{
	position: absolute;
    width: 350px;
    height: 65px;
    transform:translate(-50%,-50%);
    background: rgba(177, 177, 231, 0.7);
    padding: 40px;
    border-radius: 9px;
    left: 37%;
    top: 50%;
    
	}
	.tot-user
	{
    position: absolute;
    width: 350px;
    height: 65px;
    transform:translate(-50%,-50%);
    background: rgba(177, 231, 177, 0.7);
    padding: 40px;
    border-radius: 9px;
    left: 67%;
    top: 50%;
    
	}
	.tot-book-issue
	{
	position: absolute;
    width: 350px;
    height: 65px;
    transform:translate(-50%,-50%);
    background: rgba(226, 226, 124, 0.7);
    padding: 40px;
    border-radius: 9px;
    left: 37%;
    top: 75%;
    
	}
	.tot-borrowers
	{
	position: absolute;
    width: 350px;
    height: 65px;
    transform:translate(-50%,-50%);
    background: rgba(226, 226, 250, 0.7);
    padding: 40px;
    border-radius: 9px;
    left: 67%;
    top: 75%;
    
	}
	</style>
	<center></center>
        <table>
        	<tr>
        		<td>
           	<div class="tot-book">
               <p style="margin-top: 0px;">Total Book</p>
               <hr>
               <p style="text-align: right;"><?php echo $numberOfBooks;?></p>   
            </div>
                </td>

                <td>           
            <div class="tot-user">
               <p style="margin-top: 0px;">Total User</p>
               <hr>
               <p style="text-align: right;"><?php echo $numberOfUser;?></p>   
            </div>
               </td>
             <tr>
             	<td>
             		<div class="tot-book-issue">
               <p style="margin-top: 0px;">Total Book Issued</p>
               <hr>
               <p style="text-align: right;"><?php echo $numberOfBorrowedBooks;?></p>   
                   </div>
             	</td>
    			
				 <td>
           	<div class="tot-borrowers">
               <p style="margin-top: 0px;">Total of Borrowers</p>
               <hr>
               <p style="text-align: right;"><?php echo $numberOfBorrowers;?></p>   
            </div>
                </td>
         </table>
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