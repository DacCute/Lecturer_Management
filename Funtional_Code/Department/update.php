<?php
# take task
$lid = $_POST["id"];
$task = $_POST["task"];
$up = $_POST["up"];

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

$sql = "UPDATE department
    SET $task = '$up'
    WHERE department_id = '$lid'
";
$result = mysqli_query($con,$sql);

?>