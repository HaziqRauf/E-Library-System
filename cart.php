<?php
// start session
session_start();
 
// connect to database
include 'config/database.php';
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
$page_title="Cart";
 
// include page header html
include 'layout_header.php';
 
// contents will be here 
 
$action = isset($_GET['action']) ? $_GET['action'] : "";
 
echo "<div class='col-md-12'>";
    if($action=='removed'){
        echo "<div class='alert alert-info'>";
            echo "Book was removed from your cart!";
        echo "</div>";
    }
 
    else if($action=='quantity_updated'){
        echo "<div class='alert alert-info'>";
            echo "Book quantity was updated!";
        echo "</div>";
    }
echo "</div>";

if(count($_SESSION['cart'])>0){
 
    // get the product ids
    $ids = array();
    foreach($_SESSION['cart'] as $id=>$value){
        array_push($ids, $id);
    }
 
    $stmt=$book->readByIds($ids);
 
    $total=0;
    $item_count=0;

    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
        extract($row);
 
        $quantity=$_SESSION['cart'][$id]['quantity'];
 
        // =================
        echo "<div class='cart-row'>";
            echo "<div class='col-md-8'>";
 
                echo "<div class='book-name m-b-10px'><h4>{$name}</h4></div>";
 
                // update quantity
                echo "<form class='update-quantity-form'>";
                    echo "<div class='book-id' style='display:none;'>{$id}</div>";
                echo "</form>";
 
                // delete from cart
                echo "<a href='remove_from_cart.php?id={$id}' class='btn btn-default'>";
                    echo "Delete";
                echo "</a>";
            echo "</div>";
 
        // =================
 
        $item_count += $quantity;
    }
 
    echo "<div class='col-md-8'></div>";
    echo "<div class='col-md-4'>";
        echo "<div class='cart-row'>";
            echo "<h4 class='m-b-10px'>Total ({$item_count} books)</h4>";
            echo "<a href='checkout.php' class='btn btn-success m-b-10px'>";
                echo " Proceed to Checkout";
            echo "</a>";
        echo "</div>";
    echo "</div>";
 
}
 
// no products were added to cart
else{
    echo "<div class='col-md-12'>";
        echo "<div class='alert alert-danger'>";
            echo "No books found in your cart!";
        echo "</div>";
    echo "</div>";
}




// layout footer 
include 'layout_footer.php';
?>