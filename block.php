<?php
session_start();
include 'connection.php';
           
            $id = $_GET['id'];
            $bid = $_GET['bid'];
            
 $query = "UPDATE blog set status = $bid WHERE id=$id";

 
    if (mysqli_multi_query($link, $query)) {
		
         echo '<script type="text/javascript">

                           window.location = "viewblog.php"
                           alert("Successfully Done.");
                         </script>';
    } else {
         echo '<script type="text/javascript">

                           window.location = "viewblog.php"
                           alert("Error;");
                         </script>';
    }
    
?>


