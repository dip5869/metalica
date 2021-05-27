<?php
         include('../connection/dbcon.php');

$prod_id = $_POST['prod_id'];
$custid = $_POST['custid'];
$qry = "SELECT * FROM `m_wishlist` WHERE cust_id = $custid and product_id = $prod_id ";
$run=mysqli_query($con,$qry);
$num = mysqli_num_rows($run);
if($num>0){
echo 2;
}else{
    $sql = "INSERT INTO `m_wishlist`(`product_id`, `wish_status`, `cust_id`, `wish_createddate`) VALUES ('$prod_id','Active','$custid',CURRENT_TIMESTAMP)";
    $run=mysqli_query($con,$sql);
    $last_id = mysqli_insert_id($con);
    
    if($run)
    {
        echo 1;
    } 
}


?>