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
if ($task == 'lid')
    $sql = "SELECT * FROM lecturer WHERE lecturer_id LIKE '%$lname%'";

if ($task == 'lfn')
    $sql = "SELECT * FROM lecturer WHERE first_name LIKE '%$lname%'";

if ($task == 'lln')
    $sql = "SELECT * FROM lecturer WHERE last_name LIKE '%$lname%'";

if ($task == 'dob')
    $sql = "SELECT * FROM lecturer WHERE date_of_birth LIKE '%$lname%'";

if ($task == 'did')
    $sql = "SELECT * FROM lecturer WHERE department_id LIKE '%$lname%'";

if ($task == 'ema')
    $sql = "SELECT * FROM lecturer WHERE lecturer_email LIKE '%$lname%'";

if ($task == 'pnu')
    $sql = "SELECT * FROM lecturer WHERE phone_number LIKE '%$lname%'";

if ($task == 'gen')
    $sql = "SELECT * FROM lecturer WHERE gender LIKE '%$lname%'";

if ($task == 'yoe')
    $sql = "SELECT * FROM lecturer WHERE years_of_experience = $lname";

if ($task == 'ara')
    $sql = "SELECT * FROM lecturer WHERE Academic_Rank LIKE '%$lname%'";

if ($task == 'tcr')
    $sql = "SELECT * FROM lecturer WHERE total_credit = $lname";

if ($task == 'gpa')
    $sql = "SELECT * FROM lecturer WHERE gpa = $lname";

if ($task == 'doj')
    $sql = "SELECT * FROM lecturer WHERE Date_of_Joining LIKE '%$lname%'";

if ($task == 'hnu')
    $sql = "SELECT * FROM lecturer WHERE house_number = $lname";

if ($task == 'str')
    $sql = "SELECT * FROM lecturer WHERE street LIKE '%$lname%'";

if ($task == 'cit')
    $sql = "SELECT * FROM lecturer WHERE city LIKE '%$lname%'";

if ($task == 'sta')
    $sql = "SELECT * FROM lecturer WHERE state LIKE '%$lname%'";

if ($task == 'cou')
    $sql = "SELECT * FROM lecturer WHERE country LIKE '%$lname%'";

if ($task == 'act')
    $sql = "SELECT * FROM lecturer WHERE active LIKE '%$lname%'";


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