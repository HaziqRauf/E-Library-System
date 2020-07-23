<?php
include 'config/config.php';
$con = $mysql;
mysqli_select_db($con,'libman');
$sql = "UPDATE books SET name='$_POST[name]',description='$_POST[desc]',genre='$_POST[genre]',author='$_POST[author]' WHERE id='$_POST[id]'";

        if(mysqli_query($con,$sql))
            header("refresh:1; url=books.php");
        else
            echo "Not Updated";

?>