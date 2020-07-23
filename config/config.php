
<?php
$databaseHost = "localhost";
$databaseUsername = "root";
$databasePassword = "";
$databaseName = "libman";

$mysql = mysqli_connect ($databaseHost,$databaseUsername,$databasePassword,$databaseName);
$link = mysqli_connect($databaseHost,$databaseUsername,$databasePassword,$databaseName)or die("Could not connect");
//connection to database
$db = mysqli_select_db( $link,"libman")or die("Could not select
database");
$con=new mysqli($databaseHost,$databaseUsername,$databasePassword,$databaseName);

if(!$mysql)
{
    echo "Connection Failed";
}
else
{
    //echo "Connection Successfull";
}
    
?>