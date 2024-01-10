<?php
# take task
$id = $_POST["id"];

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

# work
$sql = "SELECT * FROM lecturer
INNER JOIN divide
ON lecturer.lecturer_id = divide.lecturer_id
INNER JOIN project
ON divide.project_id = project.project_id
WHERE project.project_id = '$id'
";

$result = mysqli_query($con,$sql);

# Make table
echo "<table border='1' cellpadding='0' cellspacing='0' class='db-table'>
<tr>
<th>ID</th>
<th>First Name</th>
<th>Last Name</th>
<th>Phone number</th>
<th>Email</th>
<th>Day of birth</th>
<th>Gender</th>
<th>Year of experience</th>
<th>Academic Rank</th>
<th>Total credit</th>
<th>GPA</th>
<th>Date of joining</th>
<th>House number</th>
<th>Street</th>
<th>City</th>
<th>State</th>
<th>Country</th>
<th>Department ID</th>
<th>Active</th>
</tr>";

# Print data
while($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
{
    echo "<tr>";
    echo "<td>" . $row["lecturer_id"] . "</td>";
    echo "<td>" . $row["first_name"] . "</td>";
    echo "<td>" . $row["last_name"] . "</td>";
    echo "<td>" . $row["phone_number"] . "</td>";
    echo "<td>" . $row["lecturer_email"] . "</td>";
    echo "<td>" . $row["date_of_birth"] . "</td>";
    echo "<td>" . $row["gender"] . "</td>";
    echo "<td>" . $row["years_of_experience"] . "</td>";
    echo "<td>" . $row["Academic_Rank"] . "</td>";
    echo "<td>" . $row["total_credit"] . "</td>";
    echo "<td>" . $row["gpa"] . "</td>";
    echo "<td>" . $row["Date_of_Joining"] . "</td>";
    echo "<td>" . $row["house_number"] . "</td>";
    echo "<td>" . $row["street"] . "</td>";
    echo "<td>" . $row["city"] . "</td>";
    echo "<td>" . $row["state"] . "</td>";
    echo "<td>" . $row["country"] . "</td>";
    echo "<td>" . $row["department_id"] . "</td>";
    echo "<td>" . $row["active"] . "</td>";
    echo "</tr>";
}

?>