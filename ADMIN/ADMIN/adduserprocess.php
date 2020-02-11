<?php

    include("includes/connection.php");

$fname = $_POST['fname'];
$mname = $_POST['mname'];
$lname = $_POST['lname'];
$cnum = $_POST['cnum'];
$username = $_POST['username'];
$password = $_POST['password'];
$position = $_POST['position'];


 
 if (isset($_POST['btnsubmit']))
 {
    
        $sql = "INSERT INTO tblemployee VALUES (' ','$fname', '$mname', '$lname', '$cnum', '$username', '$password','$position','ACTIVE')";
        $insert=$con->query($sql);
        header("Location: adduser.php");
}   
           
    
        else if (isset($_POST['upt']))
            {
                    $id = $_POST['id'];
                    
                    $sql = "UPDATE tblemployee 
                            SET fname='".$fname."', mname='".$mname."', lname='".$lname."', 
                            contact_num='".$cnum."', uname='".$username."', pword='".$password."', position='".$position."' WHERE emp_id='".$id."'";
                    $update=$con->query($sql);
                    header("Location: adduser.php");
            }
         else if (isset($_POST['btnsubmit3']))
            {
                $id = $_POST['id'];
                $sql = "DELETE FROM tblemployee WHERE emp_id='".$id."'";
                $del=$con->query($sql);
                header("Location: adduser.php");
            }

            else if (isset($_POST['btnsubmit4']))
            {
                $id = $_POST['id'];
                $sql = "UPDATE tblemployee 
                            SET status= 'BLOCKED'
                            WHERE emp_id='".$id."'";
                $update=$con->query($sql);
                header("Location: adduser.php");
                }

                else if (isset($_POST['btnsubmit5']))
            {
                $id = $_POST['id'];
                $sql = "UPDATE tblemployee 
                            SET status= 'ACTIVE'
                            WHERE emp_id='".$id."'";
                $update=$con->query($sql);
                header("Location: adduser.php");
                }

    ?>

        