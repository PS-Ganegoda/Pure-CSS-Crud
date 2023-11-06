<?php 
include("dbconnection.php");
 if (isset($_GET['delid'])){
    $id = $_GET['delid'];
    $sql =mysqli_query($con,"DELETE FROM crud2Operation WHERE ID='id' ");
    if ($sql) {
        echo "<script>alert('recorde deleted')</script>";
    } else {
        echo "Error: " . mysqli_error($con); // Display the MySQL error
    }
 }



?>