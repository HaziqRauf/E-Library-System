<?php
session_start();
	include 'config/config.php';
if(isset($_SESSION['admin']))
{
	?>
<html>
    <head>
        <title>E-LIBRARY</title>
        <link rel="stylesheet" type="text/css" href="css/style2.css">
        <link rel="stylesheet" type="text/css" href="css/login.css">

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
              <p style="font-size: 18px">Library Management Online System </p>
              
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

<style>
	.box-add
	{
    position: absolute;
    top: 64%;
    left: 55%;
    width: 400px;
    transform:translate(-50%,-50%);
    background: rgba(233, 61, 74, 0.5);
    padding: 40px;
    border-radius: 9px;
    
	}
	.box-add h2
	{   
    text-align: center;
    padding: 0px;
    font-family: Segoe UI Symbol;
    color: white;
	}
	.box-add .inputBox
	{
	position: relative;
	}
	.box-add .inputBox input
	{
	    
	    width: 100%;
	    padding: 10px 0;
	    font-size: 16px;
	    border-bottom: 1px solid #fff;
	    font-family: Segoe UI Symbol;
	    
	}
	.box-add .inputBox label
	{
	 color: white;   
	}
	.box-add input[type="submit"] 
	{
	    background: transparent;
	    border: none;
	    color: #fff;
	    margin-top:10px;
	    font-size: 16px;
	    font-family: Segoe UI Symbol;
	    background: black;
	    padding: 10px 20px;
	    border-radius: 5px;
	    cursor: pointer;
	}
	.box-add input[type="button"] 
	{
	    background: transparent;
	    border: none;
	    color: #fff;
	    margin-top:10px;
	    font-size: 16px;
	    font-family: Segoe UI Symbol;
	    background: black;
	    padding: 10px 20px;
	    border-radius: 5px;
	    cursor: pointer;
	    left: 20px;
	}

	.box-add button 
	{
	    color: white;
	    
	    left: 500px;
	    background: transparent;
	    border: none;
	    color: #ED5565;
	    margin-top:10px;
	    font-size: 16px;
	    font-family: Segoe UI Symbol;
	    background: white;
	    padding: 10px 20px;
	    border-radius: 5px;
	    cursor: pointer; 
	}
</style>
	
	<form action="addphotobook.php" align="center" method="post" enctype="multipart/form-data">
		Select image to upload:
		<br>
		<button><input type="file" name="file[]" id="file" multiple=""></button>
		<br>
		<br>

		<button><input type="submit" value="Upload Image" name="submit"></button>
	</form>
<?php
$phpFileUploadErrors = array(
0 => 'There is no error, the file uploaded with success',
1 => 'The uploaded file exceeds the upload_max_filesize directive in php.ini',
2 => 'The uploaded file exceeds MAX_FILE_SIZE directive that was specified in the HTML form',
3 => 'The uploaded file was only partially uploaded',
4 => 'No file was uploaded',
6 => 'Missing a temporary folder',
7 => 'Failed to write file to disk',
8 => 'A php extension stopped the file upload.',
);
	function reArrayFiles($file_post)
{
    $file_ary=array();
    $file_count=count($file_post['name']);
    $file_keys=array_keys($file_post);
    
    for($i=0; $i<$file_count ; $i++)
    {
        foreach($file_keys as $key)
        {
            $file_ary[$i][$key] = $file_post[$key][$i];
        }
    }
    return $file_ary;
}
if(isset($_FILES['file']))
{
    $file_array = reArrayFiles($_FILES['file']);
    //pre_r($file_array);
    for( $i=0 ;$i<count($file_array) ; $i++)
    {
        if($file_array[$i]['error'])
        {
            ?><div class="alert alert-danger">
	<?php echo $phpFileUploadErrors[$file_array[$i]['error']];
            ?></div><?php
        }
        else
            {
                $extensions = array ('jpg','png','jpeg');
                $file_ext = explode('.',$file_array[$i]['name']);
                $file_ext = end($file_ext);
                if(!in_array($file_ext,$extensions))
                {
                    ?><div class="alert alert-danger">
	<?php echo "{$file_array[$i]['name']} -Invalid File extension!";
            ?></div><?php
                }
                else
                {
                    move_uploaded_file($file_array[$i]{'tmp_name'},"uploads/images/".$file_array[$i]['name']);
                    $filename = mysqli_escape_string($mysql,$file_array[$i]['name']);
                    $sql = "INSERT INTO book_images (name) VALUES ('$filename')";
                    $result = mysqli_query($mysql,$sql);
                    echo $filename;
                    header ("refresh:1; url=addbook.php");

            ?><div class="alert alert-danger">
	<?php echo $phpFileUploadErrors[$file_array[$i]['error']];
            ?></div><?php
                }
            }
    }
}




function pre_r($array)
{
    echo '<pre>';
    print_r($array);
    echo '</pre>';
}
?>

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