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
        $dbname = "mosawan";

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
        <h2>Table: Users</h2>
        <table class="table table-striped">
        <tr>
            <td>User ID</td>
            <td>Username</td>
            <td>Email</td>
            <td>Password</td>
        </tr>
        <?php
            
            $sqlUsers = "SELECT * FROM Users WHERE ";
            $columnsUsers = ['UserID', 'Username', 'Email', 'Passwd'];

            $conditionsUsers = [];
            foreach ($columnsUsers as $column) {
                $conditionsUsers[] = "$column LIKE '%$searchTerm%'";
            }

            $sqlUsers .= implode(" OR ", $conditionsUsers);

            $resultUsers = $conn->query($sqlUsers);

            if ($resultUsers->num_rows > 0) {
                while ($row = $resultUsers->fetch_assoc()) {
                    echo "<tr><td>" .$row["UserID"]. "</td>";
                    echo "<td>" .$row["Username"]. "</td>";
                    echo "<td>" .$row["Email"]. "</td>";
                    echo "<td>" .$row["Passwd"]. "</td></tr>";
                }
            } else {
                echo "0 results from Users";
            }
        ?>
        </table>
    </div>

    <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "mosawan";

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
        <h2>Table: Users</h2>
        <table class="table table-striped">
        <tr>
            <td>User ID</td>
            <td>Username</td>
            <td>Email</td>
            <td>Password</td>
        </tr>
        <?php
            
            $sqlUsers = "SELECT * FROM Users WHERE ";
            $columnsUsers = ['UserID', 'Username', 'Email', 'Passwd'];

            $conditionsUsers = [];
            foreach ($columnsUsers as $column) {
                $conditionsUsers[] = "$column LIKE '%$searchTerm%'";
            }

            $sqlUsers .= implode(" OR ", $conditionsUsers);

            $resultUsers = $conn->query($sqlUsers);

            if ($resultUsers->num_rows > 0) {
                while ($row = $resultUsers->fetch_assoc()) {
                    echo "<tr><td>" .$row["UserID"]. "</td>";
                    echo "<td>" .$row["Username"]. "</td>";
                    echo "<td>" .$row["Email"]. "</td>";
                    echo "<td>" .$row["Passwd"]. "</td></tr>";
                }
            } else {
                echo "0 results from Users";
            }
        ?>
        </table>
    </div>

    <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "mosawan";

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
        <h2>Table: Users</h2>
        <table class="table table-striped">
        <tr>
            <td>User ID</td>
            <td>Username</td>
            <td>Email</td>
            <td>Password</td>
        </tr>
        <?php
            
            $sqlUsers = "SELECT * FROM Users WHERE ";
            $columnsUsers = ['UserID', 'Username', 'Email', 'Passwd'];

            $conditionsUsers = [];
            foreach ($columnsUsers as $column) {
                $conditionsUsers[] = "$column LIKE '%$searchTerm%'";
            }

            $sqlUsers .= implode(" OR ", $conditionsUsers);

            $resultUsers = $conn->query($sqlUsers);

            if ($resultUsers->num_rows > 0) {
                while ($row = $resultUsers->fetch_assoc()) {
                    echo "<tr><td>" .$row["UserID"]. "</td>";
                    echo "<td>" .$row["Username"]. "</td>";
                    echo "<td>" .$row["Email"]. "</td>";
                    echo "<td>" .$row["Passwd"]. "</td></tr>";
                }
            } else {
                echo "0 results from Users";
            }
        ?>
        </table>
    </div>

    <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "mosawan";

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
        <h2>Table: Users</h2>
        <table class="table table-striped">
        <tr>
            <td>User ID</td>
            <td>Username</td>
            <td>Email</td>
            <td>Password</td>
        </tr>
        <?php
            
            $sqlUsers = "SELECT * FROM Users WHERE ";
            $columnsUsers = ['UserID', 'Username', 'Email', 'Passwd'];

            $conditionsUsers = [];
            foreach ($columnsUsers as $column) {
                $conditionsUsers[] = "$column LIKE '%$searchTerm%'";
            }

            $sqlUsers .= implode(" OR ", $conditionsUsers);

            $resultUsers = $conn->query($sqlUsers);

            if ($resultUsers->num_rows > 0) {
                while ($row = $resultUsers->fetch_assoc()) {
                    echo "<tr><td>" .$row["UserID"]. "</td>";
                    echo "<td>" .$row["Username"]. "</td>";
                    echo "<td>" .$row["Email"]. "</td>";
                    echo "<td>" .$row["Passwd"]. "</td></tr>";
                }
            } else {
                echo "0 results from Users";
            }
        ?>
        </table>
    </div>

    <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "mosawan";

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
        <h2>Table: Users</h2>
        <table class="table table-striped">
        <tr>
            <td>User ID</td>
            <td>Username</td>
            <td>Email</td>
            <td>Password</td>
        </tr>
        <?php
            
            $sqlUsers = "SELECT * FROM Users WHERE ";
            $columnsUsers = ['UserID', 'Username', 'Email', 'Passwd'];

            $conditionsUsers = [];
            foreach ($columnsUsers as $column) {
                $conditionsUsers[] = "$column LIKE '%$searchTerm%'";
            }

            $sqlUsers .= implode(" OR ", $conditionsUsers);

            $resultUsers = $conn->query($sqlUsers);

            if ($resultUsers->num_rows > 0) {
                while ($row = $resultUsers->fetch_assoc()) {
                    echo "<tr><td>" .$row["UserID"]. "</td>";
                    echo "<td>" .$row["Username"]. "</td>";
                    echo "<td>" .$row["Email"]. "</td>";
                    echo "<td>" .$row["Passwd"]. "</td></tr>";
                }
            } else {
                echo "0 results from Users";
            }
        ?>
        </table>
    </div>
</body>
</html>