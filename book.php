<?php
// start session
session_start();
 
// include classes
include_once "config/database.php";
include_once "objects/book.php";
include_once "objects/book_image.php";
 
// get database connection
$database = new Database();
$db = $database->getConnection();
 
// initialize objects
$book = new Book($db);
$book_image = new BookImage($db);


// get ID of the book to be edited
$id = isset($_GET['id']) ? $_GET['id'] : die('<script>window.location = "index.php";alert("Please sign up or Login as a user.")</script>');
 
// set the id as book id property
$book->id = $id;
 
// to read single record book
$book->readOne();
 
// set page title
$page_title = $book->name;
 
// book thumbnail will be here

// set book id
$book_image->book_id=$id;
 
// read all related book image
$stmt_book_image = $book_image->readByProductId();
 
// count all relatd book image
$num_book_image = $stmt_book_image->rowCount();
 
// include page header HTML
include_once 'layout_header.php';

echo "<div class='col-md-1'>";
    // if count is more than zero
    if($num_book_image>0){
        // loop through all book images
        while ($row = $stmt_book_image->fetch(PDO::FETCH_ASSOC)){
            // image name and source url
            $book_image_name = $row['name'];
            $source="uploads/images/{$book_image_name}";
            echo "<img src='{$source}' class='product-img-thumb' data-img-id='{$row['id']}' />";
        }
    }else{ echo "No images."; }
echo "</div>";
 
// book image will be here
 
echo "<div class='col-md-4' id='product-img'>";
 
    // read all related book image
    $stmt_book_image = $book_image->readByProductId();
    $num_book_image = $stmt_book_image->rowCount();
 
    // if count is more than zero
    if($num_book_image>0){
        // loop through all book images
        $x=0;
        while ($row = $stmt_book_image->fetch(PDO::FETCH_ASSOC)){
            // image name and source url
            $book_image_name = $row['name'];
            $source="uploads/images/{$book_image_name}";
            $show_book_img=$x==0 ? "display-block" : "display-none";
            echo "<a href='{$source}' target='_blank' id='product-img-{$row['id']}' class='product-img {$show_book_img}'>";
                echo "<img src='{$source}' style='width:100%;' />";
            echo "</a>";
            $x++;
        }
    }else{ echo "No images."; }
echo "</div>";
 
// book details will be here

echo "<div class='col-md-5'>";
 
    echo "<div class='product-detail'>Author:</div>";
    echo "<h4 class='m-b-10px price-description'>{$book->author}</h4>";

    echo "<div class='product-detail'>Book description:</div>";
    echo "<div class='m-b-10px'>";
        // make html
        $page_description = htmlspecialchars_decode(htmlspecialchars_decode($book->description));
 
        // show to user
        echo $page_description;
    echo "</div>";
 
    echo "<div class='product-detail'>Book genre:</div>";
    echo "<div class='m-b-10px'>{$book->category_name}</div>";
 
echo "</div>";

echo "<div class='col-md-2'>";
 
    // if product was already added in the cart
    if(array_key_exists($id, $_SESSION['cart'])){
        echo "<div class='m-b-10px'>This Book is already in your cart.</div>";
        echo "<a href='cart.php' class='btn btn-success w-100-pct'>";
            echo "Update Cart";
        echo "</a>";
 
    }
 
    // if product was not added to the cart yet
    else{
 
        echo "<form class='add-to-cart-form'>";
            // product id
            echo "<div class='product-id display-none'>{$id}</div>";
 
            // enable add to cart button
            echo "<button style='width:100%;' type='submit' class='btn btn-primary add-to-cart m-b-10px'>";
                echo "<span></span> Add to cart";
            echo "</button>";
 
        echo "</form>";
    }
echo "</div>";

// include page footer HTML
include_once 'layout_footer.php';
?>