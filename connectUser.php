<?php
include ("config/config.php");

session_start();


    if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        $myusername= mysqli_real_escape_string($mysql,$_POST['username']);
        $mypassword= mysqli_real_escape_string($mysql,$_POST['password']);
        $sql = "SELECT * FROM user WHERE user_name = '$myusername' and user_pass = '$mypassword'";
        $result = mysqli_query($mysql,$sql);
        $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
        $count = mysqli_num_rows($result);
        
		
$query="Select user_id,user_email from user WHERE user_name = '$myusername' and user_pass = '$mypassword'";
$resultid = mysqli_query( $link,$query) or die("Query failed");
		
        if($count == 1)
        {
            $_SESSION['user'] = $myusername;
while($rowId = mysqli_fetch_array($resultid)) 
            {
            $_SESSION['uId'] = $rowId['user_id'];
			$_SESSION['email'] = $rowId['user_email'];
}
	echo '<h3>connection successfull!</h3>';
            header("location:index.php");
        }
        else
        {
            ?>
            <script> alert('Invalid Username or Password');</script>
<?php
                //header ("location:admin_login.html");
                header ("refresh:1; url=user_login.php");
        }
    }

?>