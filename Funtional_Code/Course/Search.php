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
$sql = "SELECT * FROM course
WHERE $task LIKE '%$name%'
";

$result = mysqli_query($con,$sql);

echo "<table border='1' cellpadding='0' cellspacing='0' class='db-table'>
<tr>
<th>Course ID</th>
<th>Lecturer ID</th>
<th>Course Name</th>
<th>credit</th>
<th>Course Description</th>
<th>Prerequisites</th>
<th>Course Materials</th>
<th>class period starts</th>
<th>class period ends</th>
<th>Course Time start</th>
<th>Course Time end</th>
<th>Course Day</th>
<th>Room</th>
<th>Semester</th>
<th>year</th>
</tr>";

# Print data
while($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
{
    echo "<tr>";
    echo "<td>" . $row["course_id"] . "</td>";
    echo "<td>" . $row["lecturer_id"] . "</td>";
    echo "<td>" . $row["Course_Name"] . "</td>";
    echo "<td>" . $row["Credit"] . "</td>";
    echo "<td>" . $row["Course_Description"] . "</td>";
    echo "<td>" . $row["Prerequisites"] . "</td>";
    echo "<td>" . $row["Course_Materials"] . "</td>";
    echo "<td>" . $row["class_period_starts"] . "</td>";
    echo "<td>" . $row["class_period_ends"] . "</td>";
    echo "<td>" . $row["Course_Time_start"] . "</td>";
    echo "<td>" . $row["Course_Time_end"] . "</td>";
    echo "<td>" . $row["Course_Day"] . "</td>";
    echo "<td>" . $row["Room"] . "</td>";
    echo "<td>" . $row["semester"] . "</td>";
    echo "<td>" . $row["year"] . "</td>";
    echo "</tr>";
}

?>