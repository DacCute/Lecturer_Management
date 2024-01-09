<?php
# input
$lid = $_POST["lid"];
$lname = $_POST["lname"];
$fname = $_POST["fname"];
$lphonenum = $_POST["lphonenum"];
$sta = $_POST["sta"];
$st = $_POST["st"];
$doj = $_POST["doj"];
$lemail = $_POST["lemail"];
$ldob = $_POST["ldob"];
$lgender = $_POST["lgender"];
$lyoe = $_POST["lyoe"];
$lare = $_POST["lare"];
$dep = $_POST["dep"];
$cou = $_POST["cou"];
$cit = $_POST["cit"];
$hn = $_POST["hn"];
$gpa = $_POST["gpa"];
$cre = $_POST["cre"];

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
        "INSERT INTO lecturer
        VALUES (
            '$lid',
            '$fname',
            '$lname',
            '$lphonenum',
            '$lemail',
            '$ldob',
            '$lgender',
            '$lyoe',
            '$lare',
            '$cre',
            '$gpa',
            '$doj',
            '$hn',
            '$st',
            '$cit',
            '$sta',
            '$cou',
            '$dep',
            '1')";
    $result = mysqli_query($con,$sql); 
    echo "Insert new data!";

?>