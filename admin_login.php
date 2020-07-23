<?php

$page_title="Admin Login";
include 'layout_header.php';
?>
<html>
    <head>
        
        <link rel="stylesheet" type="text/css" href="css/login.css">
   
    </head>
    <body style="background-image: url('images/library2.jpg');">
        
            <div id="overlay">
                
                <div class="box">
                    <h2><img src="icons/user-solid.svg" width="40" height="40" style="background:white">Admin Login </h2>
            
                    <form action="connectAdmin.php" method="POST" >
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
        </div>
                
            </div>
            
            
        
    </body>
</html>
