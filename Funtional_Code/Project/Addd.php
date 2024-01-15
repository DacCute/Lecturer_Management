<?php
# input
$lid = $_POST["lid"];
$pid = $_POST["pid"];

# connect SQL
$con = mysqli_connect("localhost","datck","datck");
if (mysqli_connect_errno()){
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

# Select database
$db_selected = mysqli_select_db($con, "lmdb");
if (!$db_selected) {
    echo "Failed to select DB. <br/>";
}

# use database
$sql = 
        "INSERT INTO divide
        VALUES (
            '$pid',
            '$lid')";
    $result = mysqli_query($con,$sql); 
    echo "Insert new data!";

?>