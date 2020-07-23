<?php
// start session
session_start();
 
// connect to database
include 'config/database.php';
include 'config/config.php';

// include objects
include_once "objects/book.php";
include_once "objects/book_image.php";
 
// get database connection
$database = new Database();
$db = $database->getConnection();
 
// initialize objects
$book = new Book($db);
$book_image = new BookImage($db);
 
// set page title
$page_title="Checkout";

$ordered_item='';
// include page header html
include 'layout_header.php';

date_default_timezone_set('Asia/Kuala_Lumpur');

$today = date("d F, Y");
//echo $today ."<br>";

$d=strtotime("+1 Week");
//echo date("d F, Y", $d) . "<br>";
$expiredDate= date("d F, Y", $d);
if(count($_SESSION['cart'])>0){

    // get the product ids
	$cartRay=array();

    $ids = array();
    foreach($_SESSION['cart'] as $id=>$value){
        array_push($ids, $id);
				array_push($cartRay,$id);
    }
 
    $stmt=$book->readByIds($ids);
 
    $total=0;
    $item_count=0;
 
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
        extract($row);
 
        $quantity=$_SESSION['cart'][$id]['quantity'];
		$authorName=$author;
        // =================
        echo "<div class='cart-row'>";
            echo "<div class='col-md-8'>";
 				//echo $id;
                echo "<div class='product-name m-b-10px'><h4>{$name}</h4></div>";
                echo $quantity>1 ? "<div>{$quantity} books</div>" : "<div>{$quantity} book</div>";
            echo "</div>";
        echo "</div>";
        // =================
		
 		$ordered_item .= '<div>Title: '.$name.'<br>Author : '.$authorName.'<br><br></div>';
        $item_count += $quantity;
    }
 
    // echo "<div class='col-md-8'></div>";
    echo "<div class='col-md-12 text-align-center'>";
        echo "<div class='cart-row'>";
            if($item_count>1){
                echo "<h4 class='m-b-10px'>Total ({$item_count} books)</h4>";
            }else{
                echo "<h4 class='m-b-10px'>Total ({$item_count} book)</h4>";
            }
			$userId=$_SESSION['uId'];
			$mail=$_SESSION['email'];
			$_SESSION['cartcart']=$cartRay;
			$_SESSION["bookDate"] = $today;
			$_SESSION["expireDate"] = $expiredDate;
			$_SESSION["items"] = $ordered_item;
			$_SESSION["itemq"] = $item_count;
			echo "<form method='post' action='email.php' enctype=multipart/form-data>
					<input type=email id=email name=email value='$mail' maxlength=50 hidden>";

					echo "<br><input type=submit name=sendmail value=Confirm class='glyphicon glyphicon-shopping-cart btn btn-lg btn-success m-b-10px'>";
	echo "</form>";
	echo "</div>";
    echo "</div>";
        
 
}
 
else{
    echo "<div class='col-md-12'>";
        echo "<div class='alert alert-danger'>";
            echo "No books found in your cart!";
        echo "</div>";
    echo "</div>";
}
 
include 'layout_footer.php';
?>