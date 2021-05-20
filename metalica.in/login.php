<?php
session_start();
         include('../connection/dbcon.php');
         $cust_phno = $_POST['phno'];
         $sql = "select * from m_customers where cust_phno = $cust_phno";
         $run=mysqli_query($con,$sql);
         $num = mysqli_num_rows($run);
        if($num>0){
            foreach($run as $a){
                $last_id = $a['cust_id'];
            }
            $qry = "UPDATE `m_customers` SET `cust_otp`='0101' WHERE cust_id = $last_id  ";
            $run=mysqli_query($con,$qry);

        }else{
            $qry="INSERT INTO `m_customers`( `cust_phno`, `cust_status`, `cust_createdat`,`cust_otp`) VALUES ('$cust_phno','Active',CURRENT_TIMESTAMP,'0101')";
            //  echo $qry;die;
            $run=mysqli_query($con,$qry);
            $last_id = mysqli_insert_id($con);
        }

            echo $last_id;
            $_SESSION['cust_id'] = $last_id;
        
?>