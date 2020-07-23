<?php
session_start();
if(isset($_SESSION['admin']))
{
include ('config/config.php');

$id='0';
 $name=$_POST['name'];
 $desc=$_POST['description'];
 $genre=$_POST['genre'];
 $author=$_POST['author'];

        if(mysqli_query($mysql,"INSERT INTO books(name,description,genre,author) VALUES('$name','$desc','$genre','$author')" ))
        {
            echo "Data Connection Success!";
        }
        else
        {
            echo "Data Connection unsuccessful :( ";
            header ("location:addphotobook.php");
        }
echo $id;
$query="SELECT id FROM books WHERE name like '$name'";
$result = mysqli_query( $link,$query) or die("Query failed");

		while ( $user = mysqli_fetch_array( $result ))
		{
    			$name=$user['name'];
				$id= $user['id'];
				echo $id;
				break;
		}
$con = $mysql;
mysqli_select_db($con,'libman');
$sql = "UPDATE `book_images` SET `book_id`=$id WHERE `book_id` like 0 ";
        		if(mysqli_query($con,$sql))
				{
					echo " <script>alert('The book successfully added!');window.location ='books.php';</script>";
				}
       			 else
echo "Problem occured !";
	
	}
else
{
	echo "<script>location.href='admin_login.php'</script>";
}
?>