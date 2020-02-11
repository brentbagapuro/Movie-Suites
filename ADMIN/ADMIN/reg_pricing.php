<?php

    include("includes/connection.php");

$price_name = $_POST['price_name'];
$price = $_POST['price'];
$pax = $_POST['pax'];
$persons = $_POST['persons'];


 
 if (isset($_POST['btnsubmit']))
 {
    
        $sql = "INSERT INTO tblreg_price VALUES (' ','$price_name', '$price', '$persons', '$pax')";
        $insert=$con->query($sql);
        header("Location: pricing.php");
}
           
    
        else if (isset($_POST['btnsubmit2']))
            {
                    $id = $_POST['id'];
                    
                    $sql = "UPDATE tblreg_price 
                            SET price_name='".$price_name."', reg_price='".$price."', price_pax='".$pax."', price_numofpersons='".$persons."'
                            WHERE price_id='".$id."'";
                    $update=$con->query($sql);
                        header("Location: pricing.php");
            }
         else if (isset($_POST['btnsubmit3']))
            {
                $id = $_POST['id'];
                $sql = "DELETE FROM tblreg_price WHERE price_id='".$id."'";
                $del=$con->query($sql);
                header("Location: pricing.php");
            }
    ?>

        