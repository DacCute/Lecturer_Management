use lmdb;

# lecturer
CREATE TABLE lecturer(
    lecturer_id VARCHAR(10) PRIMARY KEY NOT NULL, 
    first_name VARCHAR(15), 
    last_name VARCHAR(15), 
    phone_number CHAR(12), 
    lecturer_email VARCHAR(35), 
    date_of_birth DATE, 
    gender ENUM('Male','Female','Other'), 
    years_of_experience INT(2), 
    Academic_Rank ENUM('Lecturer','Assistant Professor','Professor','Chairperson/Department Head'), 
    total_credit INT(3), 
    gpa FLOAT(2,1), 
    Date_of_Joining DATE, 
    house_number INT(4), 
    street VARCHAR(18), 
    city VARCHAR(15), 
    state VARCHAR(10), 
    country VARCHAR(10), 
    department_id VARCHAR(3));

# course
CREATE TABLE course(
    course_id VARCHAR(7) NOT NULL PRIMARY KEY, 
    Course_Name VARCHAR(35), 
    Credit INT(1), 
    Course_Description VARCHAR(100), 
    Prerequisites VARCHAR(7), 
    Course_Materials VARCHAR(100), 
    class_period_starts INT(2), 
    class_period_ends INT(2), 
    Course_Time_start TIME, 
    Course_Time_end TIME, 
    Course_Day VARCHAR(9), 
    Room VARCHAR(6), 
    Semester ENUM('Spring', 'Summer', 'Fall', 'Winter'), 
    year YEAR, 
    lecturer_id VARCHAR(10));

# department
CREATE TABLE department(
    department_id VARCHAR(3) NOT NULL PRIMARY KEY, 
    Department_Name VARCHAR(23), 
    Department_Head VARCHAR(30), 
    Location VARCHAR(10), 
    Phone_Number VARCHAR(12), 
    Established_Date DATE, 
    Number_of_Students INT(4), 
    Departmental_Budget INT(10), 
    Facilities VARCHAR(15), 
    Faculty_Members INT(3), 
    Department_Newsletter INT(3));

# project
CREATE TABLE project(
    project_id VARCHAR(10) NOT NULL PRIMARY KEY,
    Project_Name VARCHAR(50), 
    Project_Description VARCHAR(100), 
    Start_Date DATE, 
    End_Date DATE, 
    Project_Leader VARCHAR(30), 
    project_leader_number VARCHAR(15), 
    project_leader_mail VARCHAR(40), 
    Project_Status VARCHAR(15), 
    Budget INT(10), 
    Collaborators VARCHAR(30), 
    Funding_Source VARCHAR(20));
