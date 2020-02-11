<?php

    include("includes/connection.php");
 if (isset($_GET['id']))
{
    $id = $_GET['id'];
    $fname = $_POST['fname'];
    $mname = $_POST['mname'];
    $lname = $_POST['lname'];
    $cnum = $_POST['cnum'];
    $username = $_POST['uname'];
    $pword = $_POST['pword'];
}


         $qry = "SELECT * FROM tblcustomer WHERE cust_id = '$id'";
         $result=$con->query($qry);
                        while($row=$result->fetch_array()) 
                        {
                            $cust_id =  $row['cust_id'];
                            $password =  $row['password'];
                        }

            if ($pword == $password){
                
                $sql = "UPDATE tblcustomer 
                            SET fname='".$fname."', mname='".$mname."', lname='".$lname."', 
                            contact_num='".$cnum."', username='".$username."', password='".$pword."'
                            WHERE cust_id='".$id."'";
                    $result=$con->query($sql);
                    if($qry){
                       
                        ?>
                       <script type="text/javascript">
                        alert("Profile information successfully updated!");
                         location.href="profile.php"; 

                       </script> 
                    <?php

                    }else{
                        echo "Error"; }

            }else if($pword != $password){
                

               ?>
               <script type="text/javascript">
                alert("Password do not match! Pls try again");
                 location.href="profile.php"; 

               </script> 
            <?php
            }

                 
                    
                   
            
           
    
    ?>

        