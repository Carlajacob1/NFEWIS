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
        die("Connection failed: " . $conn->_error);
    }


    //delete student
    if(isset($_POST['student_delete'])) {
        $id = $_POST['id'];

        $sql = "DELETE FROM Student WHERE StudentID = $id";

        try {
            if($conn->query($sql) === TRUE) {
                echo "DELETED STUDENT";
            } else {
                echo "Error Deleting Entity: " . $conn->error;
            }
        }catch(Exception $e) {
            echo "Cannot delete Student, Student is connected with other tables";
        }
    }


    //delete course
    else if(isset($_POST['course_delete'])) {
        $id = $_POST['id'];

        $sql = "DELETE FROM Course WHERE CourseID = $id"; 
        
        try{
            if ($conn->query($sql) === TRUE) {
                echo "Deleted Course";
            } else {
                echo "Error deleting entity: " . $conn->error;
            }
        }catch(Exception $e){
            echo "Cannot delete course. Course is connected with other tables.";
        }
        
    }

    // delete instructor
    else if(isset($_POST['instructor_delete'])) {
        $id = $_POST['id'];

        $sql = "DELETE FROM Instructor WHERE InstructorID = $id"; 
        
        try{
            if ($conn->query($sql) === TRUE) {
                echo "Deleted Instructor";
            } else {
                echo "Error deleting entity: " . $conn->error;
            }
        }catch(Exception $e){
            echo "Cannot delete instructor. Instructor is connected with other tables.";
        }
        
    }



    //delete enrollment
    else if(isset($_POST['enrollment_delete'])) {
        $id = $_POST['id'];

        $sql = "DELETE FROM Enrollment WHERE EnrollmentID = $id"; 
        
        try{
            if ($conn->query($sql) === TRUE) {
                echo "Deleted Enrollment";
            } else {
                echo "Error deleting entity: " . $conn->error;
            }
        }catch(Exception $e){
            echo "Cannot delete enrollment. Enrollment is connected with other tables.";
        }
        
    }

    $conn->close();
    ?>
</body>
</html>