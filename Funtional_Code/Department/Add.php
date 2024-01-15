<?php
# input
$did = $_POST["did"];
$dna = $_POST["dna"];
$dhe = $_POST["dhe"];
$loc = $_POST["dlo"];
$pnu = $_POST["pnu"];
$eda = $_POST["esd"];
$nos = $_POST["nos"];
$dbu = $_POST["dbu"];
$fac = $_POST["fac"];
$fme = $_POST["fme"];
$dne = $_POST["dne"];

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
            '$did',
            '$dna',
            '$dhe',
            '$loc',
            '$pnu',
            '$eda',
            '$nos',
            '$dbu',
            '$fac',
            '$fme',
            '$dne')";
    $result = mysqli_query($con,$sql); 
    echo "Insert new data!";

?>