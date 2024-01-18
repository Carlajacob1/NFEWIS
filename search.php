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

        $searchTerm = $_GET['search'];
    ?>

    <div class="container mb-3 mt-3">
        <h1>Search Results</h1>
    </div>

    <div class="container mb-5 mt-5">
        <h2>Table: Student</h2>
        <table class="table table-striped">
        <tr>
            <td>Student ID</td>
            <td>First Name</td>
            <td>Last Name</td>
            <td>Date of Birth</td>
            <td>Email</td>
            <td>Phone</td>
        </tr>
        <?php
            
            $sqlStudent = "SELECT * FROM Student WHERE ";
            $columnsStudent = ['StudentID', 'FirstName', 'LastName', 'DateOfBirth', 'Email', 'Phone'];

            $conditionsStudent = [];
            foreach ($columnsStudent as $column) {
                $conditionsStudent[] = "$column LIKE '%$searchTerm%'";
            }

            $sqlStudent .= implode(" OR ", $conditionsStudent);

            $resultStudent = $conn->query($sqlStudent);

            if ($resultStudent->num_rows > 0) {
                while ($row = $resultStudent->fetch_assoc()) {
                    echo "<tr><td>" .$row["StudentID"]. "</td>";
                    echo "<td>" .$row["FirstName"]. "</td>";
                    echo "<td>" .$row["LastName"]. "</td>";
                    echo "<td>" .$row["DateOfBirth"]. "</td>";
                    echo "<td>" .$row["Email"]. "</td>";
                    echo "<td>" .$row["Phone"]. "</td></tr>";
                }
            } else {
                echo "0 results from Student";
            }
        ?>
        </table>
    </div>

    <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "studentrecord";

        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $searchTerm = $_GET['search'];
    ?>

    <div class="container mb-3 mt-3">
        <h1>Search Results</h1>
    </div>

    <div class="container mb-5 mt-5">
        <h2>Table: Student</h2>
        <table class="table table-striped">
        <tr>
            <td>Student ID</td>
            <td>First Name</td>
            <td>Last Name</td>
            <td>Date of Birth</td>
            <td>Email</td>
            <td>Phone</td>
        </tr>
        <?php
            
            $sqlStudent = "SELECT * FROM Student WHERE ";
            $columnsStudent = ['StudentID', 'FirstName', 'LastName', 'DateOfBirth', 'Email', 'Phone'];

            $conditionsStudent = [];
            foreach ($columnsStudent as $column) {
                $conditionsStudent[] = "$column LIKE '%$searchTerm%'";
            }

            $sqlStudent .= implode(" OR ", $conditionsStudent);

            $resultStudent = $conn->query($sqlStudent);

            if ($resultStudent->num_rows > 0) {
                while ($row = $resultStudent->fetch_assoc()) {
                    echo "<tr><td>" .$row["StudentID"]. "</td>";
                    echo "<td>" .$row["FirstName"]. "</td>";
                    echo "<td>" .$row["LastName"]. "</td>";
                    echo "<td>" .$row["DateOfBirth"]. "</td>";
                    echo "<td>" .$row["Email"]. "</td>";
                    echo "<td>" .$row["Phone"]. "</td></tr>";
                }
            } else {
                echo "0 results from Student";
            }
        ?>
        </table>
    </div>

    <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "studentrecord";

        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $searchTerm = $_GET['search'];
    ?>

    <div class="container mb-3 mt-3">
        <h1>Search Results</h1>
    </div>

    <div class="container mb-5 mt-5">
        <h2>Table: Student</h2>
        <table class="table table-striped">
        <tr>
            <td>Student ID</td>
            <td>First Name</td>
            <td>Last Name</td>
            <td>Date of Birth</td>
            <td>Email</td>
            <td>Phone</td>
        </tr>
        <?php
            
            $sqlStudent = "SELECT * FROM Student WHERE ";
            $columnsStudent = ['StudentID', 'FirstName', 'LastName', 'DateOfBirth', 'Email', 'Phone'];

            $conditionsStudent = [];
            foreach ($columnsStudent as $column) {
                $conditionsStudent[] = "$column LIKE '%$searchTerm%'";
            }

            $sqlStudent .= implode(" OR ", $conditionsStudent);

            $resultStudent = $conn->query($sqlStudent);

            if ($resultStudent->num_rows > 0) {
                while ($row = $resultStudent->fetch_assoc()) {
                    echo "<tr><td>" .$row["StudentID"]. "</td>";
                    echo "<td>" .$row["FirstName"]. "</td>";
                    echo "<td>" .$row["LastName"]. "</td>";
                    echo "<td>" .$row["DateOfBirth"]. "</td>";
                    echo "<td>" .$row["Email"]. "</td>";
                    echo "<td>" .$row["Phone"]. "</td></tr>";
                }
            } else {
                echo "0 results from Student";
            }
        ?>
        </table>
    </div>

    <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "studentrecord";

        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $searchTerm = $_GET['search'];
    ?>

    <div class="container mb-3 mt-3">
        <h1>Search Results</h1>
    </div>

    <div class="container mb-5 mt-5">
        <h2>Table: Student</h2>
        <table class="table table-striped">
        <tr>
            <td>Student ID</td>
            <td>First Name</td>
            <td>Last Name</td>
            <td>Date of Birth</td>
            <td>Email</td>
            <td>Phone</td>
        </tr>
        <?php
            
            $sqlStudent = "SELECT * FROM Student WHERE ";
            $columnsStudent = ['StudentID', 'FirstName', 'LastName', 'DateOfBirth', 'Email', 'Phone'];

            $conditionsStudent = [];
            foreach ($columnsStudent as $column) {
                $conditionsStudent[] = "$column LIKE '%$searchTerm%'";
            }

            $sqlStudent .= implode(" OR ", $conditionsStudent);

            $resultStudent = $conn->query($sqlStudent);

            if ($resultStudent->num_rows > 0) {
                while ($row = $resultStudent->fetch_assoc()) {
                    echo "<tr><td>" .$row["StudentID"]. "</td>";
                    echo "<td>" .$row["FirstName"]. "</td>";
                    echo "<td>" .$row["LastName"]. "</td>";
                    echo "<td>" .$row["DateOfBirth"]. "</td>";
                    echo "<td>" .$row["Email"]. "</td>";
                    echo "<td>" .$row["Phone"]. "</td></tr>";
                }
            } else {
                echo "0 results from Student";
            }
        ?>
        </table>
    </div>
</body>
</html>