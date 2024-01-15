<?php
# input
$pid = $_POST["pid"];
$pname = $_POST["pna"];
$pde = $_POST["pde"];
$sda = $_POST["sda"];
$eda = $_POST["eda"];
$pld = $_POST["ple"];
$pln = $_POST["pln"];
$plm = $_POST["plm"];
$pst = $_POST["pst"];
$bud = $_POST["bud"];
$col = $_POST["col"];
$fso = $_POST["fso"];

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
        "INSERT INTO project
        VALUES (
            '$pid',
            '$pna',
            '$pde',
            '$sda',
            '$eda',
            '$pld',
            '$pln',
            '$plm',
            '$pst',
            '$bud',
            '$col',
            '$fso',
            )";
    $result = mysqli_query($con,$sql); 
    echo "Insert new data!";

?>