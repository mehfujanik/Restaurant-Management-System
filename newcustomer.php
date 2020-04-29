<?php
    //for new customer


    /*connecting database*/
    session_start();

  $connection=mysqli_connect('localhost','root','','restaurants');
    if(isset($_POST['submit'])){

    /*Catching data from new customer form*/
    $customer_id=mysqli_real_escape_string($connection,$_POST['customer_id']);
    $_SESSION['customer_id']=$customer_id;
    $customer_name=mysqli_real_escape_string($connection,$_POST['customer_name']);
    $customer_contact=mysqli_real_escape_string($connection,$_POST['customer_contact']);
    $customer_address=mysqli_real_escape_string($connection,$_POST['customer_address']);
    $customer_email=mysqli_real_escape_string($connection,$_POST['customer_email']);
    $customer_dob=mysqli_real_escape_string($connection,$_POST['customer_dob']);
    $customer_password=mysqli_real_escape_string($connection,$_POST['customer_password']);
    $insert= "insert into customer values('$customer_id','$customer_name','$customer_contact','$customer_address','$customer_email','$customer_dob','$customer_password')";
    if(mysqli_query($connection, $insert))
    {
                include('shoppingcart.php');

        }
    else{
            echo "ERROR: Could not able to execute $insert. " . mysqli_error($connection);
                }

// Close connection
    }
    mysqli_close($connection);

//end of new customer
 ?>
