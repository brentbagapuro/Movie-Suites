<?php

    include("includes/connection.php");

$rname = $_POST['rname'];
$occupancy = $_POST['occupancy'];
$status = $_POST['status'];


 
 if (isset($_POST['btnsubmit']))
 {
    
        $sql = "INSERT INTO tblrooms VALUES (' ','$rname', 'available', '$occupancy')";
        $insert=$con->query($sql);
        header("Location: addrooms.php");
}   
           
    
        else if (isset($_POST['upt']))
            {
                    $id = $_POST['id'];
                    
                    $sql = "UPDATE tblrooms 
                            SET rname='".$rname."', max_occupancy='".$occupancy."', status='".$status."' WHERE room_id='".$id."'";
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

        