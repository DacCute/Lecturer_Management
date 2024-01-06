<?php
# input
$lid = $_POST["lid"];
$lname = $_POST["lname"];
$lphonenum = $_POST["lphonenum"];
$lemail = $_POST["lemail"];
$ldob = $_POST["ldob"];
$lgender = $_POST["lgender"];
$lgpa = $_POST["lgpa"];

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
        "INSERT INTO lecinfo
        VALUES ('$fid','$fname','$fphonenum','$femail','$fdob','$lgender','$lgqp')";
    $result = mysqli_query($con,$sql); 
    echo "Insert new data!";

?>