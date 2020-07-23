<?php
// 'product image' object
class BookImage{
 
    // database connection and table name
    private $conn;
    private $table_name = "book_images";
 
    // object properties
    public $id;
    public $book_id;
    public $name;
    public $timestamp;
 
    // constructor
    public function __construct($db){
        $this->conn = $db;
    }


// read the first product image related to a product
function readFirst(){
 
    // select query
    $query = "SELECT id, book_id, name
            FROM " . $this->table_name . "
            WHERE book_id = ?
            ORDER BY name DESC
            LIMIT 0, 1";
 
    // prepare query statement
    $stmt = $this->conn->prepare( $query );
 
    // sanitize
    $this->id=htmlspecialchars(strip_tags($this->id));
 
    // bind prodcut id variable
    $stmt->bindParam(1, $this->book_id);
 
    // execute query
    $stmt->execute();
 
    // return values
    return $stmt;
}
    
// read all product image related to a product
function readByProductId(){
 
    // select query
    $query = "SELECT id, book_id, name
            FROM " . $this->table_name . "
            WHERE book_id = ?
            ORDER BY name ASC";
 
    // prepare query statement
    $stmt = $this->conn->prepare( $query );
 
    // sanitize
    $this->book_id=htmlspecialchars(strip_tags($this->book_id));
 
    // bind prodcut id variable
    $stmt->bindParam(1, $this->book_id);
 
    // execute query
    $stmt->execute();
 
    // return values
    return $stmt;
}
}

?>