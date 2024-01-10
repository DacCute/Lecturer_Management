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
$sql = "SELECT * FROM project
WHERE $task LIKE '%$name%'
";

$result = mysqli_query($con,$sql);

# Make table
echo "<table border='1' cellpadding='0' cellspacing='0' class='db-table'>
<tr>
<th>project ID</th>
<th>project Name</th>
<th>Project Description</th>
<th>Start Date</th>
<th>End Date</th>
<th>Project Leader</th>
<th>project leader number</th>
<th>Project Status</th>
<th>Budget</th>
<th>Collaborators</th>
<th>Funding Source</th>
</tr>";

# Print data
while($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
{
    echo "<tr>";
    echo "<td>" . $row["project_id"] . "</td>";
    echo "<td>" . $row["Project_Name"] . "</td>";
    echo "<td>" . $row["Project_Description"] . "</td>";
    echo "<td>" . $row["Start_Date"] . "</td>";
    echo "<td>" . $row["End_Date"] . "</td>";
    echo "<td>" . $row["Project_Leader"] . "</td>";
    echo "<td>" . $row["project_leader_number"] . "</td>";
    echo "<td>" . $row["Project_Status"] . "</td>";
    echo "<td>" . $row["Budget"] . "</td>";
    echo "<td>" . $row["Collaborators"] . "</td>";
    echo "<td>" . $row["Funding_Source"] . "</td>";
    echo "</tr>";
}
?>