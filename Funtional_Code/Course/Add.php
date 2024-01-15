<?php
# input
$cid = $_POST["cid"];
$lid = $_POST["lid"];
$cna = $_POST["cna"];
$cre = $_POST["cre"];
$cde = $_POST["cde"];
$pre = $_POST["pre"];
$cma = $_POST["cma"];
$cps = $_POST["cps"];
$cpe = $_POST["cpe"];
$cts = $_POST["cts"];
$cte = $_POST["cte"];
$cda = $_POST["cda"];
$roo = $_POST["roo"];
$sem = $_POST["sem"];
$yea = $_POST["yea"];

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
            '$cid',
            '$lid',
            '$cna',
            '$cre',
            '$cde',
            '$pre',
            '$cma',
            '$cps',
            '$cpe',
            '$cts',
            '$cte',
            '$cda',
            '$roo',
            '$sem',
            '$yea'";
    $result = mysqli_query($con,$sql); 
    echo "Insert new data!";

?>