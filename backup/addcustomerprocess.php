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
    
        $insert = mysql_query("INSERT INTO tblcustomer VALUES (' ','$fname', '$mname', '$lname', '$cnum', '$username', '$password','ACTIVE')");
                if(!$insert)
                die(mysql_error());
        else
            header("Location: addcustomer.php");
}
           
    
        else if (isset($_POST['btnsubmit2']))
            {
                    $id = $_POST['id'];
                    
                    $sql = "UPDATE tblcustomer 
                            SET fname='".$fname."', mname='".$mname."', lname='".$lname."', 
                            contact_num='".$cnum."', username='".$username."', password='".$password."'
                            WHERE cust_id='".$id."'";
                    $result=mysql_query($sql);
                    if($result)
                        header("Location: addcustomer.php");
                    else
                        echo "Error";
            }
         else if (isset($_POST['btnsubmit3']))
            {
                $id = $_POST['id'];
                $sql = "DELETE FROM tblcustomer WHERE cust_id='".$id."'";
                $result=mysql_query($sql);
                if($result)
                    header("Location: addcustomer.php");
                else
                    echo "Error";
            }

            else if (isset($_POST['btnsubmit4']))
            {
                $id = $_POST['id'];
                $sql = "UPDATE tblcustomer 
                            SET status= 'BLOCKED'
                            WHERE cust_id='".$id."'";
                    $result=mysql_query($sql);
                    if($result)
                        header("Location: addcustomer.php");
                    else
                        echo "Error";
                }

    ?>

        