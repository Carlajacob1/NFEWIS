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
    ?>

    <div class="container mb-3">
        <form action="search_final.php" method="GET">
            <label for="search">Search:</label>
            <input type="text" id="search" name="search">
            <button type="submit">Submit</button>
        </form>
    </div>

    <!-- Users Table  -->

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
                $sqlUsers = "SELECT * FROM Users";
                $resultUsers = $conn->query($sqlUsers);

                if ($resultUsers){
                    while ($row = $resultUsers->fetch_assoc()) {
                        echo "<tr><td>" .$row["UserID"]. "</td>";
                        echo "<td>" .$row["Username"]. "</td>";
                        echo "<td>" .$row["Email"]. "</td>";
                        echo "<td>" .$row["Passwd"]. "</td></tr>";
                    }
                }
                else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }
            ?>
        </table>
        <button onclick="toggleFormUsersCreate()">Add</button>
        <button onclick="toggleFormUsersUpdate()">Update</button>
        <button onclick="toggleFormUsersDelete()">Delete</button>

        <div class="mt-3">
            <form id="UsersFormCreate" method="post" action="table_edit.php" style="display: none;">
                <h4>Add User</h4>
                <input type="text" name="username" placeholder="Username">
                <input type="text" name="email" placeholder="Email">
                <input type="text" name="passwd" placeholder="Password">
                <input type="submit" name="users_add" value="Add User">
            </form>

            <form id="UsersFormUpdate" method="post" action="table_edit.php" style="display: none;">
                <h4>Update User</h4>
                <input type="text" name="id" placeholder="User ID" required>
                <input type="text" name="username" placeholder="Username">
                <input type="text" name="email" placeholder="Email">
                <input type="text" name="passwd" placeholder="Password">
                <input type="submit" name="users_update" value="Update User">
            </form>

            <form id="UsersFormDelete" method="post" action="table_edit.php" style="display: none;">
                <h4>Delete User</h4>
                <input type="text" name="id" placeholder="User ID" required>
                <input type="submit" name="users_delete" value="Delete user">
            </form>
        </div>
    </div>


    <!-- Users Table  -->

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
                $sqlUsers = "SELECT * FROM Users";
                $resultUsers = $conn->query($sqlUsers);

                if ($resultUsers){
                    while ($row = $resultUsers->fetch_assoc()) {
                        echo "<tr><td>" .$row["UserID"]. "</td>";
                        echo "<td>" .$row["Username"]. "</td>";
                        echo "<td>" .$row["Email"]. "</td>";
                        echo "<td>" .$row["Passwd"]. "</td></tr>";
                    }
                }
                else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }
            ?>
        </table>
        <button onclick="toggleFormUsersCreate()">Add</button>
        <button onclick="toggleFormUsersUpdate()">Update</button>
        <button onclick="toggleFormUsersDelete()">Delete</button>

        <div class="mt-3">
            <form id="UsersFormCreate" method="post" action="table_edit.php" style="display: none;">
                <h4>Add User</h4>
                <input type="text" name="username" placeholder="Username">
                <input type="text" name="email" placeholder="Email">
                <input type="text" name="passwd" placeholder="Password">
                <input type="submit" name="users_add" value="Add User">
            </form>

            <form id="UsersFormUpdate" method="post" action="table_edit.php" style="display: none;">
                <h4>Update User</h4>
                <input type="text" name="id" placeholder="User ID" required>
                <input type="text" name="username" placeholder="Username">
                <input type="text" name="email" placeholder="Email">
                <input type="text" name="passwd" placeholder="Password">
                <input type="submit" name="users_update" value="Update User">
            </form>

            <form id="UsersFormDelete" method="post" action="table_edit.php" style="display: none;">
                <h4>Delete User</h4>
                <input type="text" name="id" placeholder="User ID" required>
                <input type="submit" name="users_delete" value="Delete user">
            </form>
        </div>
    </div>


    <!-- Users Table  -->

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
                $sqlUsers = "SELECT * FROM Users";
                $resultUsers = $conn->query($sqlUsers);

                if ($resultUsers){
                    while ($row = $resultUsers->fetch_assoc()) {
                        echo "<tr><td>" .$row["UserID"]. "</td>";
                        echo "<td>" .$row["Username"]. "</td>";
                        echo "<td>" .$row["Email"]. "</td>";
                        echo "<td>" .$row["Passwd"]. "</td></tr>";
                    }
                }
                else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }
            ?>
        </table>
        <button onclick="toggleFormUsersCreate()">Add</button>
        <button onclick="toggleFormUsersUpdate()">Update</button>
        <button onclick="toggleFormUsersDelete()">Delete</button>

        <div class="mt-3">
            <form id="UsersFormCreate" method="post" action="table_edit.php" style="display: none;">
                <h4>Add User</h4>
                <input type="text" name="username" placeholder="Username">
                <input type="text" name="email" placeholder="Email">
                <input type="text" name="passwd" placeholder="Password">
                <input type="submit" name="users_add" value="Add User">
            </form>

            <form id="UsersFormUpdate" method="post" action="table_edit.php" style="display: none;">
                <h4>Update User</h4>
                <input type="text" name="id" placeholder="User ID" required>
                <input type="text" name="username" placeholder="Username">
                <input type="text" name="email" placeholder="Email">
                <input type="text" name="passwd" placeholder="Password">
                <input type="submit" name="users_update" value="Update User">
            </form>

            <form id="UsersFormDelete" method="post" action="table_edit.php" style="display: none;">
                <h4>Delete User</h4>
                <input type="text" name="id" placeholder="User ID" required>
                <input type="submit" name="users_delete" value="Delete user">
            </form>
        </div>
    </div>


    <!-- Users Table  -->

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
                $sqlUsers = "SELECT * FROM Users";
                $resultUsers = $conn->query($sqlUsers);

                if ($resultUsers){
                    while ($row = $resultUsers->fetch_assoc()) {
                        echo "<tr><td>" .$row["UserID"]. "</td>";
                        echo "<td>" .$row["Username"]. "</td>";
                        echo "<td>" .$row["Email"]. "</td>";
                        echo "<td>" .$row["Passwd"]. "</td></tr>";
                    }
                }
                else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }
            ?>
        </table>
        <button onclick="toggleFormUsersCreate()">Add</button>
        <button onclick="toggleFormUsersUpdate()">Update</button>
        <button onclick="toggleFormUsersDelete()">Delete</button>

        <div class="mt-3">
            <form id="UsersFormCreate" method="post" action="table_edit.php" style="display: none;">
                <h4>Add User</h4>
                <input type="text" name="username" placeholder="Username">
                <input type="text" name="email" placeholder="Email">
                <input type="text" name="passwd" placeholder="Password">
                <input type="submit" name="users_add" value="Add User">
            </form>

            <form id="UsersFormUpdate" method="post" action="table_edit.php" style="display: none;">
                <h4>Update User</h4>
                <input type="text" name="id" placeholder="User ID" required>
                <input type="text" name="username" placeholder="Username">
                <input type="text" name="email" placeholder="Email">
                <input type="text" name="passwd" placeholder="Password">
                <input type="submit" name="users_update" value="Update User">
            </form>

            <form id="UsersFormDelete" method="post" action="table_edit.php" style="display: none;">
                <h4>Delete User</h4>
                <input type="text" name="id" placeholder="User ID" required>
                <input type="submit" name="users_delete" value="Delete user">
            </form>
        </div>
    </div>


    <!-- Users Table  -->

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
                $sqlUsers = "SELECT * FROM Users";
                $resultUsers = $conn->query($sqlUsers);

                if ($resultUsers){
                    while ($row = $resultUsers->fetch_assoc()) {
                        echo "<tr><td>" .$row["UserID"]. "</td>";
                        echo "<td>" .$row["Username"]. "</td>";
                        echo "<td>" .$row["Email"]. "</td>";
                        echo "<td>" .$row["Passwd"]. "</td></tr>";
                    }
                }
                else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }
            ?>
        </table>
        <button onclick="toggleFormUsersCreate()">Add</button>
        <button onclick="toggleFormUsersUpdate()">Update</button>
        <button onclick="toggleFormUsersDelete()">Delete</button>

        <div class="mt-3">
            <form id="UsersFormCreate" method="post" action="table_edit.php" style="display: none;">
                <h4>Add User</h4>
                <input type="text" name="username" placeholder="Username">
                <input type="text" name="email" placeholder="Email">
                <input type="text" name="passwd" placeholder="Password">
                <input type="submit" name="users_add" value="Add User">
            </form>

            <form id="UsersFormUpdate" method="post" action="table_edit.php" style="display: none;">
                <h4>Update User</h4>
                <input type="text" name="id" placeholder="User ID" required>
                <input type="text" name="username" placeholder="Username">
                <input type="text" name="email" placeholder="Email">
                <input type="text" name="passwd" placeholder="Password">
                <input type="submit" name="users_update" value="Update User">
            </form>

            <form id="UsersFormDelete" method="post" action="table_edit.php" style="display: none;">
                <h4>Delete User</h4>
                <input type="text" name="id" placeholder="User ID" required>
                <input type="submit" name="users_delete" value="Delete user">
            </form>
        </div>
    </div>


    
    <?php
        $conn->close(); 
    ?>
        <script>
        function toggleFormUsersCreate() {
            var form = document.getElementById("UsersFormCreate");
            var form1 = document.getElementById("UsersFormUpdate");
            var form2 = document.getElementById("UsersFormDelete");
            if (form.style.display === "none") {
                form.style.display = "block";
                form1.style.display = "none";
                form2.style.display = "none";
            } else {
                form.style.display = "none";
            }
        }
        
        
        function toggleFormUsersCreate() {
            var form = document.getElementById("UsersFormCreate");
            var form1 = document.getElementById("UsersFormUpdate");
            var form2 = document.getElementById("UsersFormDelete");
            if (form.style.display === "none") {
                form.style.display = "block";
                form1.style.display = "none";
                form2.style.display = "none";
            } else {
                form.style.display = "none";
            }
        }

        
        function toggleFormUsersCreate() {
            var form = document.getElementById("UsersFormCreate");
            var form1 = document.getElementById("UsersFormUpdate");
            var form2 = document.getElementById("UsersFormDelete");
            if (form.style.display === "none") {
                form.style.display = "block";
                form1.style.display = "none";
                form2.style.display = "none";
            } else {
                form.style.display = "none";
            }
        }

        
        function toggleFormUsersCreate() {
            var form = document.getElementById("UsersFormCreate");
            var form1 = document.getElementById("UsersFormUpdate");
            var form2 = document.getElementById("UsersFormDelete");
            if (form.style.display === "none") {
                form.style.display = "block";
                form1.style.display = "none";
                form2.style.display = "none";
            } else {
                form.style.display = "none";
            }
        }

        
        function toggleFormUsersCreate() {
            var form = document.getElementById("UsersFormCreate");
            var form1 = document.getElementById("UsersFormUpdate");
            var form2 = document.getElementById("UsersFormDelete");
            if (form.style.display === "none") {
                form.style.display = "block";
                form1.style.display = "none";
                form2.style.display = "none";
            } else {
                form.style.display = "none";
            }
        }

        
        function toggleFormUsersCreate() {
            var form = document.getElementById("UsersFormCreate");
            var form1 = document.getElementById("UsersFormUpdate");
            var form2 = document.getElementById("UsersFormDelete");
            if (form.style.display === "none") {
                form.style.display = "block";
                form1.style.display = "none";
                form2.style.display = "none";
            } else {
                form.style.display = "none";
            }
        }

        
        function toggleFormUsersCreate() {
            var form = document.getElementById("UsersFormCreate");
            var form1 = document.getElementById("UsersFormUpdate");
            var form2 = document.getElementById("UsersFormDelete");
            if (form.style.display === "none") {
                form.style.display = "block";
                form1.style.display = "none";
                form2.style.display = "none";
            } else {
                form.style.display = "none";
            }
        }

        
        function toggleFormUsersCreate() {
            var form = document.getElementById("UsersFormCreate");
            var form1 = document.getElementById("UsersFormUpdate");
            var form2 = document.getElementById("UsersFormDelete");
            if (form.style.display === "none") {
                form.style.display = "block";
                form1.style.display = "none";
                form2.style.display = "none";
            } else {
                form.style.display = "none";
            }
        }

        
        function toggleFormUsersCreate() {
            var form = document.getElementById("UsersFormCreate");
            var form1 = document.getElementById("UsersFormUpdate");
            var form2 = document.getElementById("UsersFormDelete");
            if (form.style.display === "none") {
                form.style.display = "block";
                form1.style.display = "none";
                form2.style.display = "none";
            } else {
                form.style.display = "none";
            }
        }

        
        function toggleFormUsersCreate() {
            var form = document.getElementById("UsersFormCreate");
            var form1 = document.getElementById("UsersFormUpdate");
            var form2 = document.getElementById("UsersFormDelete");
            if (form.style.display === "none") {
                form.style.display = "block";
                form1.style.display = "none";
                form2.style.display = "none";
            } else {
                form.style.display = "none";
            }
        }

        
        function toggleFormUsersCreate() {
            var form = document.getElementById("UsersFormCreate");
            var form1 = document.getElementById("UsersFormUpdate");
            var form2 = document.getElementById("UsersFormDelete");
            if (form.style.display === "none") {
                form.style.display = "block";
                form1.style.display = "none";
                form2.style.display = "none";
            } else {
                form.style.display = "none";
            }
        }

        
        function toggleFormUsersCreate() {
            var form = document.getElementById("UsersFormCreate");
            var form1 = document.getElementById("UsersFormUpdate");
            var form2 = document.getElementById("UsersFormDelete");
            if (form.style.display === "none") {
                form.style.display = "block";
                form1.style.display = "none";
                form2.style.display = "none";
            } else {
                form.style.display = "none";
            }
        }

        
        function toggleFormUsersCreate() {
            var form = document.getElementById("UsersFormCreate");
            var form1 = document.getElementById("UsersFormUpdate");
            var form2 = document.getElementById("UsersFormDelete");
            if (form.style.display === "none") {
                form.style.display = "block";
                form1.style.display = "none";
                form2.style.display = "none";
            } else {
                form.style.display = "none";
            }
        }

        
        function toggleFormUsersCreate() {
            var form = document.getElementById("UsersFormCreate");
            var form1 = document.getElementById("UsersFormUpdate");
            var form2 = document.getElementById("UsersFormDelete");
            if (form.style.display === "none") {
                form.style.display = "block";
                form1.style.display = "none";
                form2.style.display = "none";
            } else {
                form.style.display = "none";
            }
        }

        
        function toggleFormUsersCreate() {
            var form = document.getElementById("UsersFormCreate");
            var form1 = document.getElementById("UsersFormUpdate");
            var form2 = document.getElementById("UsersFormDelete");
            if (form.style.display === "none") {
                form.style.display = "block";
                form1.style.display = "none";
                form2.style.display = "none";
            } else {
                form.style.display = "none";
            }
        }


    </script>
</body>
</html>