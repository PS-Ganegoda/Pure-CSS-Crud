<?php
$con = mysqli_connect("localhost", "root", "", "crud2");

if (mysqli_connect_errno()) {
    echo "Connection failed: " . mysqli_connect_error();
}
?>