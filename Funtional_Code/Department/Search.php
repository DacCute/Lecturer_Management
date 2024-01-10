<?php
# take task
$name = $_POST["name"];
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
$sql = "SELECT * FROM department
WHERE $task LIKE '%$name%'
";

$result = mysqli_query($con,$sql);

# Make table
echo "<table border='1' cellpadding='0' cellspacing='0' class='db-table'>
<tr>
<th>Department ID</th>
<th>Department Name</th>
<th>Department Head</th>
<th>Location</th>
<th>Phone Number</th>
<th>Established Date</th>
<th>Number of Students</th>
<th>Departmental Budget</th>
<th>Facilities</th>
<th>Faculty Members</th>
<th>Department Newsletter</th>
</tr>";

# Print data
while($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
{
    echo "<tr>";
    echo "<td>" . $row["department_id"] . "</td>";
    echo "<td>" . $row["Department_Name"] . "</td>";
    echo "<td>" . $row["Department_Head"] . "</td>";
    echo "<td>" . $row["Location"] . "</td>";
    echo "<td>" . $row["Phone_Number"] . "</td>";
    echo "<td>" . $row["Established_Date"] . "</td>";
    echo "<td>" . $row["Number_of_Students"] . "</td>";
    echo "<td>" . $row["Departmental_Budget"] . "</td>";
    echo "<td>" . $row["Facilities"] . "</td>";
    echo "<td>" . $row["Faculty_Members"] . "</td>";
    echo "<td>" . $row["Department_Newsletter"] . "</td>";
    echo "</tr>";
}
?>