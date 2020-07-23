<?php
error_reporting(0);
session_start();
if(isset($_SESSION['admin']))
{
//Connection to database
include 'config/config.php';
	?>
<html>

<head>
	<title>E-LIBRARY</title>
	<link rel="stylesheet" type="text/css" href="css/style2.css">

	<style>
		.dcontent {
			color: black;
			margin-top: 0px;
			margin-bottom: 100px;
			margin-right: 20px;
			margin-left: 20px;
			float: left;
			padding: 20px;
			width: 70%;
			background-color: (rgba(255, 0, 0, 0.2));
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
				<div class="content">
					<ul>
						<br><br>
						<li><img src="images/book4.png" width="150"></li>
						<li><a href="dashboard.php"> Dashboard</a></li>
						<li><a href="books.php">Books</a></li>
						<li><a href="users.php">Users</a></li>
						<li><a href="bookIssued.php">Book Issued</a></li>
						<li><a href="bookReturned.php">Book Returned</a></li>
						<li><a href="logoutUser.php">Logout</a></li>
					</ul>
				</div>
			</center>
		</nav>

		<div class="dcontent">
			<h2>Book Lists</h2>
			<hr>

			<style>
				.content-table {
					border-collapse: collapse;
					margin: 10px 0;
					font-size: 0.9em;
					min-width: 400px;
				}

				.content-table thead tr {
					background-color: #ED5565;
					color: #ffffffff;
					text-align: center;
					font-weight: bold;
				}

				.content-table th {
					padding: 12px 30px;
				}

				.img-search img {
					margin-left: 5px;
				}

				.img-search input {
					margin-top: 5px;
					margin-left: 700px;
					padding: 8px;
				}

				.button-add button {
					margin-right: 728px;
					color: white;
					background: transparent;
					border: none;
					font-size: 16px;
					font-family: Segoe UI Symbol;
					background: #ED5565;
					padding: 10px 20px;
					border-radius: 5px;
					cursor: pointer;
				}

				.content-table button {
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



			<form class="img-search" action="books.php" method="post">
				<input type="text" name="search" class="form-control" placeholder="Search..."> <a href="books.php" value="search"><img style="height: 22px; width: 20px;" src="images/search5.png"></a>
			</form>
			<center>
				<div class="button-add">
					<a href="addphotobook.php"><button href="add.php">
							<img src="images/add2.png" style="width: 25px; height: 22px;">
							Add Book
						</button></a>
				</div>

				<?php
	$search = $_POST['search'];

if($search != null)
{
if(isset($_POST['search']))
{
    //$search = $_POST['search'];
    
    $query =  "Select * from books where genre like '%$search%' or name like '%$search%' ";
    $result = mysqli_query( $link,$query)or die("<br>could not search!");
    $count = mysqli_num_rows($result);
    if( $count != 0)
    {	?>
				<table class="content-table">
					<tr style="background-color: #fff;">
						<thead>
							<th>No</th>
							<th>Name</th>
							<th>Genre</th>
							<th>Author</th>
							<th colspan="2">Action</th>

						</thead>
					</tr>

					<?php $x=1;
	while ( $user = mysqli_fetch_array( $result ))
{
    $name=$user['name'];
    $genre=$user['genre'];
	$author=$user['author'];
	?>
					<tr>
						<th><?php echo $x++; ?></th>
						<th><?php echo $name; ?></th>
						<th><?php echo $genre; ?></th>
						<th><?php echo $author; ?></th>
						<th><a href="editbook.php?user_id=<?php print($user['id']);?>"><button>Edit</button></a></th>
						<th><a href="delete.php?user_id=<?php print($user['id']);?>"><button>Delete</button></a></th>


					</tr><?php
}
    }
    else
    {
        echo'<br>There was no search result!';
    }
}
	
}
else
{
    $query="SELECT * FROM books";
$result = mysqli_query( $link,$query) or die("Query failed");
?>
					<table class="content-table">
						<tr style="background-color: #fff;">
							<thead>
								<th>No</th>
								<th>Name</th>
								<th>Genre</th>
								<th>Author</th>
								<th colspan="2">Action</th>
							</thead>

						</tr>

						<?php $x=1;
	while ( $user = mysqli_fetch_array( $result ))
{
    $name=$user['name'];
    $genre=$user['genre'];
	$author=$user['author'];
	?>
						<tr>
							<th><?php echo $x++; ?></th>
							<th><?php echo $name; ?></th>
							<th><?php echo $genre; ?></th>
							<th><?php echo $author; ?></th>
							<th><a href="editbook.php?user_id=<?php print($user['id']);?>"><button>Edit</button></a></th>
							<th><a href="delete.php?user_id=<?php print($user['id']);?>"><button>Delete</button></a></th>


						</tr><?php
}}?>
					</table>
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