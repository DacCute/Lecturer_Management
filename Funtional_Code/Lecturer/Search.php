<?php
# take task
$lname = $_POST["name"];
$task = $_POST["task"];

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
$sql = "SELECT * FROM lecinfo WHERE lecturer_id = '$lname'";
$result = mysqli_query($con,$sql);
echo "Printout exactualy data";

# Make table
echo "<table border='1' cellpadding='0' cellspacing='0' class='db-table'>
<tr>
<th>ID</th>
<th>First Name</th>
<th>Last Name</th>
<th>Department ID</th>
<th>Phone number</th>
<th>email</th>
<th>Day of birth</th>
<th>Gender</th>
<th>Year of experience</th>
<th>Total credit</th>
<th>GPA</th>
<th>Date of joining</th>
<th>House number</th>
<th>Street</th>
<th>City</th>
<th>State</th>
<th>Country</th>
</tr>";

# Print data
while($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
{
    echo "<tr>";
    echo "<td>" . $row["lecid"] . "</td>";
    echo "<td>" . $row["con"] . "</td>";
    echo "<td>" . $row["con"] . "</td>";
    echo "<td>" . $row["con"] . "</td>";
    echo "<td>" . $row["con"] . "</td>";
    echo "<td>" . $row["con"] . "</td>";
    echo "<td>" . $row["con"] . "</td>";
    echo "<td>" . $row["con"] . "</td>";
    echo "<td>" . $row["con"] . "</td>";
    echo "</tr>";
}
?>