<?php
error_reporting(0);

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


// to prevent undefined index notice
$action = isset($_GET['action']) ? $_GET['action'] : "";
 
// for pagination purposes
$page = isset($_GET['page']) ? $_GET['page'] : 1; // page is the current page, if there's nothing set, default is page 1
$records_per_page = 6; // set records or rows of data per page
$from_record_num = ($records_per_page * $page) - $records_per_page; // calculate for the query LIMIT clause

// set page title
$page_title="Books";
 $searchq = null;
// page header html
include 'layout_header.php';
echo "<div class='col-md-12'>";
    if($action=='added'){
        echo "<div class='alert alert-info'>";
            echo "Book was added to your cart!";
        echo "</div>";
    }
 
    if($action=='exists'){
        echo "<div class='alert alert-info'>";
            echo "Book already exists in your cart!";
        echo "</div>";
    }
echo "</div>";
    
$searchq = $_POST['search'];

if($searchq != null)
{
	// read the search products in the database
	$stmt=$book->readBySearch($searchq);
}
else
{
	// read all products in the database
	$stmt=$book->read($from_record_num, $records_per_page);
}
// count number of retrieved products
$num = $stmt->rowCount();
 
// if products retrieved were more than zero
if($num>0){
    // needed for paging
    $page_url="index.php?";
    $total_rows=$book->count();
 
    // show products
    include_once "read_books_template.php";
}
 
// tell the user if there's no products in the database
else{
    echo "<div class='col-md-12'>";
        echo "<div class='alert alert-danger'>No books was found.</div>";
    echo "</div>";
}



// contents will be here 
 
// layout footer code
include 'layout_footer.php';
?>