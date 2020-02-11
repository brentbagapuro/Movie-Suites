<?php

    include("includes/connection.php");

$fname = $_POST['fname'];
$mname = $_POST['mname'];
$lname = $_POST['lname'];
$cnum = $_POST['cnum'];
$username = $_POST['username'];
$password = $_POST['password'];


 
 if (isset($_POST['btnsubmit']))
 {
    
        $sql = "INSERT INTO tblcustomer VALUES (' ','$fname', '$mname', '$lname', '$cnum', '$username', '$password','ACTIVE')";
        $insert=$con->query($sql);
        header("Location: addcustomer.php");
}
           
    
        else if (isset($_POST['btnsubmit2']))
            {
                    $id = $_POST['id'];
                    
                    $sql = "UPDATE tblcustomer 
                            SET fname='".$fname."', mname='".$mname."', lname='".$lname."', 
                            contact_num='".$cnum."', username='".$username."', password='".$password."'
                            WHERE cust_id='".$id."'";
                    $update=$con->query($sql);
                    header("Location: addcustomer.php");
            }
         else if (isset($_POST['btnsubmit3']))
            {
                $id = $_POST['id'];
                $sql = "DELETE FROM tblcustomer WHERE cust_id='".$id."'";
                $del=$con->query($sql);
                header("Location: addcustomer.php");
            }

            else if (isset($_POST['btnsubmit4']))
            {
                $id = $_POST['id'];
                $sql = "UPDATE tblcustomer 
                            SET status= 'BLOCKED'
                            WHERE cust_id='".$id."'";
                $update=$con->query($sql);
                header("Location: addcustomer.php");
                }

                else if (isset($_POST['btnsubmit5']))
            {
                $id = $_POST['id'];
                $sql = "UPDATE tblcustomer 
                            SET status= 'ACTIVE'
                            WHERE cust_id='".$id."'";
                $update=$con->query($sql);
                header("Location: addcustomer.php");
                }
            

    ?>

        