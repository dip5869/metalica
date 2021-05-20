<?php
         include('../connection/dbcon.php');

$custid = $_POST['custid'];
$prod_id = $_POST['prod_id'];
$qry = "delete from m_wishlist where product_id = $prod_id and cust_id = $custid";

$run=mysqli_query($con,$qry);

echo 1;
?>