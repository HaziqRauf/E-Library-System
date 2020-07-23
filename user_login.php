<?php
session_start();
$page_title="User Login";
include 'layout_header.php';
if(!isset($_SESSION['user']))
{
?>
<html>
    <head>
        
        <link rel="stylesheet" type="text/css" href="css/login.css">
      

    </head>
    <body style="background-image: url('images/library2.jpg');">
        
            <div id="overlay">
                
                <div class="box">
                    <h2><img src="icons/user-solid.svg" width="40" height="40" style="background:white">User Login </h2>
            
                    <form action="connectUser.php" method="POST" >
                <div class="inputBox">
                    
                    
                    <input type="text" name="username" placeholder="User Name" autocomplete="off">
                    <br><br>
                    
                    
                </div>
                <div class="inputBox">
                    
                    <br>
                    <input type="password" name="password" placeholder="Password">
                    
                </div>
                <input type="submit" value="login">
                </form>
                
                <p style="color: white; margin-left: 160px;">Create your account          <button  onclick="window.location.href = 'register.php'; ">Register</button></p>
                
             
                
            
        </div>
                
            </div>
            
            
        
    </body>
</html>
<?php
}
else
{
	echo "<script>location.href='logoutUser.php'</script>";
}
?>