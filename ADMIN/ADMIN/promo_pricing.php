<?php

    include("includes/connection.php");
    date_default_timezone_set('Asia/Kuala_Lumpur');

$promo_name = $_POST['promo_name'];
$promo_price = $_POST['promo_price'];
$persons = $_POST['promo_persons'];
$pax = $_POST['promo_pax'];
$start_time = $_POST['start_time'];
$end_time = $_POST['end_time'];



 
 if (isset($_POST['btnsubmit']))
 {
    if(isset($start_time) && isset($end_time))
    {
        $sql = "INSERT INTO tblpromo VALUES (' ','$promo_name', '$promo_price', '$persons', '$pax', '$start_time', '$end_time')";
        $insert=$con->query($sql);
        header("Location: pricing.php");
    }
    else
    {
        $sql = "INSERT INTO tblpromo VALUES (' ','$promo_name', '$promo_price', '$persons', '$pax', 'none', 'none')";
        $insert=$con->query($sql);
        header("Location: pricing.php");
    }
}
           
    
        else if (isset($_POST['btnsubmit2']))
            {
                    $id = $_POST['id1'];
                    //$start_time =date("g:i a", strtotime($st));
                    //$end_time =date("g:i a", strtotime($et));
                    
                if(empty($start_time) && empty($end_time))
                {
                    $sql = "UPDATE tblpromo
                            SET promo_name='".$promo_name."', promo_price='".$promo_price."', promo_numofpersons='".$persons."' , promo_pax='".$pax."', time_start='none', time_end='none'
                            WHERE promo_id='".$id."'";
                    $update=$con->query($sql);
                    header("Location: pricing.php");
                }
                else
                {
                    $st = date("g:i a", strtotime($start_time));
                    $et = date("g:i a", strtotime($end_time));
                    $sql = "UPDATE tblpromo
                            SET promo_name='".$promo_name."', promo_price='".$promo_price."', promo_numofpersons='".$persons."' , promo_pax='".$pax."', time_start='".$st."', time_end='".$et."'
                            WHERE promo_id='".$id."'";
                    $update=$con->query($sql);
                    header("Location: pricing.php");
                }
            }
         else if (isset($_POST['btnsubmit3']))
            {
                $id = $_POST['id1'];
                $sql = "DELETE FROM tblpromo WHERE promo_id='".$id."'";
                $del=$con->query($sql);
                header("Location: pricing.php");
            }
    ?>

        