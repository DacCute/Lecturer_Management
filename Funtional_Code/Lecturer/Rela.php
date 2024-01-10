<?php
# take task
$id = $_POST["id"];
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

# work
if ( $task == 'department' ){
    $sql = "SELECT * FROM department
    INNER JOIN lecturer
    ON department.department_id = lecturer.department_id
    WHERE lecturer_id = '$id'
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
}

if ( $task == "course" ){
    $sql = "SELECT * FROM $task
    WHERE lecturer_id = '$id'
    ";

    $result = mysqli_query($con,$sql);

    # Make table
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
}

if ( $task == "project" ){
    $sql = "SELECT * FROM $task
    INNER JOIN divide
    ON $task.project_id = divide.project_id
    INNER JOIN lecturer
    ON lecturer.lecturer_id = divide.lecturer_id
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
}

?>