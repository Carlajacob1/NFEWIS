<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="container">
        <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "mosawan";

            $conn = new mysqli($servername, $username, $password, $dbname);

            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            // Add User
            if(isset($_POST['users_add'])) {
                $username = $_POST['username'];
                $email = $_POST['email'];
                $passwd = $_POST['passwd'];

                $sql = "INSERT INTO Users (Username, Email, Passwd) VALUES ('$username', '$email', '$passwd')"; 
                
                if ($conn->query($sql) === TRUE) {
                    echo "Added User";
                } else {
                    echo "Error adding entity: " . $conn->error;
                }
            }

            // Add User
            if(isset($_POST['users_add'])) {
                $username = $_POST['username'];
                $email = $_POST['email'];
                $passwd = $_POST['passwd'];

                $sql = "INSERT INTO Users (Username, Email, Passwd) VALUES ('$username', '$email', '$passwd')"; 
                
                if ($conn->query($sql) === TRUE) {
                    echo "Added User";
                } else {
                    echo "Error adding entity: " . $conn->error;
                }
            }

            // Add User
            if(isset($_POST['users_add'])) {
                $username = $_POST['username'];
                $email = $_POST['email'];
                $passwd = $_POST['passwd'];

                $sql = "INSERT INTO Users (Username, Email, Passwd) VALUES ('$username', '$email', '$passwd')"; 
                
                if ($conn->query($sql) === TRUE) {
                    echo "Added User";
                } else {
                    echo "Error adding entity: " . $conn->error;
                }
            }

            // Add User
            if(isset($_POST['users_add'])) {
                $username = $_POST['username'];
                $email = $_POST['email'];
                $passwd = $_POST['passwd'];

                $sql = "INSERT INTO Users (Username, Email, Passwd) VALUES ('$username', '$email', '$passwd')"; 
                
                if ($conn->query($sql) === TRUE) {
                    echo "Added User";
                } else {
                    echo "Error adding entity: " . $conn->error;
                }
            }

            // Add User
            if(isset($_POST['users_add'])) {
                $username = $_POST['username'];
                $email = $_POST['email'];
                $passwd = $_POST['passwd'];

                $sql = "INSERT INTO Users (Username, Email, Passwd) VALUES ('$username', '$email', '$passwd')"; 
                
                if ($conn->query($sql) === TRUE) {
                    echo "Added User";
                } else {
                    echo "Error adding entity: " . $conn->error;
                }
            }

            // Update Users
            else if(isset($_POST['users_update'])) {
                $id = $_POST['id'];
                $username = $_POST['username'];
                $email = $_POST['email'];
                $passwd = $_POST['passwd'];
                $edited = 0;
    
                if ($username != null){
                    $sql = "UPDATE Users SET Username='$username' WHERE UserID=$id";
                    $conn->query($sql);
                    $edited = 1;
                }

                if ($email != null){
                    $sql = "UPDATE Users SET Email='$email' WHERE UserID=$id";
                    $conn->query($sql);
                    $edited = 1;
                }

                if ($passwd != null){
                    $sql = "UPDATE Users SET Passwd='$passwd' WHERE UserID=$id";
                    $conn->query($sql);
                    $edited = 1;
                }

                if ($edited === 1) {
                    echo "Updated User ID = $id";
                } else {
                    echo "Error updating entity: " . $conn->error;
                }
            }

            // Update Users
            else if(isset($_POST['users_update'])) {
                $id = $_POST['id'];
                $username = $_POST['username'];
                $email = $_POST['email'];
                $passwd = $_POST['passwd'];
                $edited = 0;
    
                if ($username != null){
                    $sql = "UPDATE Users SET Username='$username' WHERE UserID=$id";
                    $conn->query($sql);
                    $edited = 1;
                }

                if ($email != null){
                    $sql = "UPDATE Users SET Email='$email' WHERE UserID=$id";
                    $conn->query($sql);
                    $edited = 1;
                }

                if ($passwd != null){
                    $sql = "UPDATE Users SET Passwd='$passwd' WHERE UserID=$id";
                    $conn->query($sql);
                    $edited = 1;
                }

                if ($edited === 1) {
                    echo "Updated User ID = $id";
                } else {
                    echo "Error updating entity: " . $conn->error;
                }
            }

            // Update Users
            else if(isset($_POST['users_update'])) {
                $id = $_POST['id'];
                $username = $_POST['username'];
                $email = $_POST['email'];
                $passwd = $_POST['passwd'];
                $edited = 0;
    
                if ($username != null){
                    $sql = "UPDATE Users SET Username='$username' WHERE UserID=$id";
                    $conn->query($sql);
                    $edited = 1;
                }

                if ($email != null){
                    $sql = "UPDATE Users SET Email='$email' WHERE UserID=$id";
                    $conn->query($sql);
                    $edited = 1;
                }

                if ($passwd != null){
                    $sql = "UPDATE Users SET Passwd='$passwd' WHERE UserID=$id";
                    $conn->query($sql);
                    $edited = 1;
                }

                if ($edited === 1) {
                    echo "Updated User ID = $id";
                } else {
                    echo "Error updating entity: " . $conn->error;
                }
            }

            // Update Users
            else if(isset($_POST['users_update'])) {
                $id = $_POST['id'];
                $username = $_POST['username'];
                $email = $_POST['email'];
                $passwd = $_POST['passwd'];
                $edited = 0;
    
                if ($username != null){
                    $sql = "UPDATE Users SET Username='$username' WHERE UserID=$id";
                    $conn->query($sql);
                    $edited = 1;
                }

                if ($email != null){
                    $sql = "UPDATE Users SET Email='$email' WHERE UserID=$id";
                    $conn->query($sql);
                    $edited = 1;
                }

                if ($passwd != null){
                    $sql = "UPDATE Users SET Passwd='$passwd' WHERE UserID=$id";
                    $conn->query($sql);
                    $edited = 1;
                }

                if ($edited === 1) {
                    echo "Updated User ID = $id";
                } else {
                    echo "Error updating entity: " . $conn->error;
                }
            }

            // Update Users
            else if(isset($_POST['users_update'])) {
                $id = $_POST['id'];
                $username = $_POST['username'];
                $email = $_POST['email'];
                $passwd = $_POST['passwd'];
                $edited = 0;
    
                if ($username != null){
                    $sql = "UPDATE Users SET Username='$username' WHERE UserID=$id";
                    $conn->query($sql);
                    $edited = 1;
                }

                if ($email != null){
                    $sql = "UPDATE Users SET Email='$email' WHERE UserID=$id";
                    $conn->query($sql);
                    $edited = 1;
                }

                if ($passwd != null){
                    $sql = "UPDATE Users SET Passwd='$passwd' WHERE UserID=$id";
                    $conn->query($sql);
                    $edited = 1;
                }

                if ($edited === 1) {
                    echo "Updated User ID = $id";
                } else {
                    echo "Error updating entity: " . $conn->error;
                }
            }


             // Delete User
             else if(isset($_POST['users_delete'])) {
                $id = $_POST['id'];

                $sql = "DELETE FROM Users WHERE UserID = $id"; 
                
                try{
                    if ($conn->query($sql) === TRUE) {
                        echo "Deleted User";
                    } else {
                        echo "Error deleting entity: " . $conn->error;
                    }
                }catch(Exception $e){
                    echo "Cannot delete user.";
                }
                
            }
            
            
             // Delete User
             else if(isset($_POST['users_delete'])) {
                $id = $_POST['id'];

                $sql = "DELETE FROM Users WHERE UserID = $id"; 
                
                try{
                    if ($conn->query($sql) === TRUE) {
                        echo "Deleted User";
                    } else {
                        echo "Error deleting entity: " . $conn->error;
                    }
                }catch(Exception $e){
                    echo "Cannot delete user.";
                }
                
            }
            
            
             // Delete User
             else if(isset($_POST['users_delete'])) {
                $id = $_POST['id'];

                $sql = "DELETE FROM Users WHERE UserID = $id"; 
                
                try{
                    if ($conn->query($sql) === TRUE) {
                        echo "Deleted User";
                    } else {
                        echo "Error deleting entity: " . $conn->error;
                    }
                }catch(Exception $e){
                    echo "Cannot delete user.";
                }
                
            }
            
            
             // Delete User
             else if(isset($_POST['users_delete'])) {
                $id = $_POST['id'];

                $sql = "DELETE FROM Users WHERE UserID = $id"; 
                
                try{
                    if ($conn->query($sql) === TRUE) {
                        echo "Deleted User";
                    } else {
                        echo "Error deleting entity: " . $conn->error;
                    }
                }catch(Exception $e){
                    echo "Cannot delete user.";
                }
                
            }
            
            
             // Delete User
             else if(isset($_POST['users_delete'])) {
                $id = $_POST['id'];

                $sql = "DELETE FROM Users WHERE UserID = $id"; 
                
                try{
                    if ($conn->query($sql) === TRUE) {
                        echo "Deleted User";
                    } else {
                        echo "Error deleting entity: " . $conn->error;
                    }
                }catch(Exception $e){
                    echo "Cannot delete user.";
                }
                
            }
            
            
            $conn->close();
        ?>
    </div>
</body>
</html>