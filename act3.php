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
        $dbname = "studentinfo";

        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }


        //create
        if(isset($_POST['create'])) {
            $username = $_POST['username'];
            $email = $_POST['email'];

            $sql = "INSERT INTO users (username, email) VALUES ('$username', '$email')";

            if ($conn->query($sql) === TRUE) {
                echo "Created $username";
            } else {
                echo "Error adding entity: " . $conn->error;
            }
        }


        //update
        if(isset($_POST['update'])) {

            $id = $_POST['id'];
            $username = $_POST['username'];
            $email = $_POST['email'];
            $edited = 0;

            if ($username != null){
                $sql = "UPDATE users SET username='$username' WHERE id=$id";
                $conn->query($sql);
                $edited = 1;
            }

            if ($email != null){
                $sql = "UPDATE users SET email='$email' WHERE id=$id";
                $conn->query($sql);
                $edited = 1;
            }
            
            if ($edited === 1) {
                echo "Updated id = $id";
            } else {
                echo "Error updating entity: " . $conn->error;
            }
        }



        //delete
        if(isset($_POST['delete'])) {
            $id = $_POST['id'];

            $sql = "DELETE FROM users WHERE id=$id";
            
            if ($conn->query($sql) === TRUE) {
                echo "Deleted id = $id";
            } else {
                echo "Error deleting entity: " . $conn->error;
            }
        }

        echo "<br><br>";
        // read
        $sql = "SELECT id, username, email FROM users";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "ID: " . $row["id"]. " - Username: " . $row["username"]. " - Email: " . $row["email"]. "<br>";
            }
        } else {
            echo "0 results";
        }

        $conn->close();
    ?>

    <form method="post" action="act3.php">
        <h4>Create</h4>
        <input type="text" name="username" palceholder="Username">
        <input type="submit" name="create" value="Create">
    </form>


    <form method="post" action="act3.php">
        <h4>Update</h4>
        <input type="text" name="id" placeholder="ID" required>
        <input type="text" name="username" placeholder="Username">
        <input type="text" name="email" placeholder="Email">
        <input type="submit" name="update" value="Update">

    </form>
    
    <form method="post" action"act3.php">
        <h4>Delete</h4>
        <input type="text" name="id" placeholder="ID">
        <input type="submit" name="delete" value="Delete">
    </form>
</body>
</html>