<?php
         include('../connection/dbcon.php');

$custid = $_POST['custid'];
$otp = $_POST['otp'];

   $qry = "select cust_otp from m_customers where cust_id = $custid ";
   $run=mysqli_query($con,$qry);
    foreach($run as $r){
        if($r['cust_otp']==$otp){
            echo 1;
        }else{
            echo 0;
        }
    }



?>