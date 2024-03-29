<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
     $servername = "localhost";
     $username = "root";
     $password = "";
     $dbname = "studentrecord";


     $conn = new mysqli($servername, $username, $password, $dbname);

     if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }


    //add student

    if(isset($_POST['student_add'])) {
        $firstName = $_POST['first_name'];
        $lastName = $_POST['last_name'];
        $dateOfBirth = $_POST['date_of_birth'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];


        $sql = "INSERT INTO Student (FirstName, LastName, DateOfBirth, Email, Phone) VALUES ('$firstName', '$lastName', '$dateOfBirth', '$email', '$phone')"; 
            
        if ($conn->query($sql) === TRUE) {
            echo "Added Student";
        } else {
            echo "Error adding entity: " . $conn->error;
        }
    }

    //add course
    else if(isset($_POST['course_add'])) {
        $courseName = $_POST['course_name'];
        $credits = $_POST['credits'];

        $sql = "INSERT INTO Course (CourseName, Credits) VALUES ('$courseName', '$credits')"; 
        
        if ($conn->query($sql) === TRUE) {
            echo "Added Course";
        } else {
            echo "Error adding entity: " . $conn->error;
        }
    }


    
    //add instructor
    else if(isset($_POST['instructor_add'])) {
        $firstName = $_POST['first_name'];
        $lastName = $_POST['last_name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];

        $sql = "INSERT INTO Instructor (FirstName, LastName, Email, Phone) VALUES ('$firstName', '$lastName', '$email', '$phone')"; 
        
        if ($conn->query($sql) === TRUE) {
            echo "Added Instructor";
        } else {
            echo "Error adding entity: " . $conn->error;
        }
    }
    
    //add enrollment
    else if(isset($_POST['enrollment_add'])) {
        $studentId = $_POST['student_id'];
        $courseId = $_POST['course_id'];
        $enrollmentDate = $_POST['enrollment_date'];
        $grade = $_POST['grade'];

        $sql = "INSERT INTO Enrollment (StudentID, CourseID, EnrollmentDate, Grade) VALUES ('$studentId', '$courseId', '$enrollmentDate', '$grade')"; 
        
        if ($conn->query($sql) === TRUE) {
            echo "Added Enrollment";
        } else {
            echo "Error adding entity: " . $conn->error;
        }
    }

    $conn->close();
    ?>
</body>
</html>