<?php
# take task
$lnameid = $_POST["lnameid"];
echo $lnameid;

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
try{
    $sql = "SELECT * FROM lecinfo WHERE lecid = '$lnameid'";
    $result = mysqli_query($con,$sql);
    echo "Printout exactualy data";
}
catch (Exception $e){
    $sql = 
        "SELECT * FROM lecinfo WHERE concate = '%$lname%'";
    $result = mysqli_query($con,$sql); 
    echo "Printout a set of lecturers has the name",$lnameid;
}

# connect to sever

# use database
?>