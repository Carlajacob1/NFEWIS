<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        #myform{
            display: none;
        }
        #myform1{
            display: none;
        }
        .button-row{
            display: inline-block;
        }
        </style>
</head>
<body>
    <div class="button-row">
        <button onclick="toggleForm()">Show Form</button>
        <button onclick="toggleForm1()">Show Form1</button>


        <form id="myform" method="post" action="add_entity.php">
        <input type="text" name="first_name" placeholder="First Name" required>
        <input type="text" name="last_name" placeholder="Last Name" required>
        <input type="date" name="date_of_birth" placeholder="Date of Birth" required>
        <input type="text" name="email" placeholder="Email" required>
        <input type="text" name="phone" placeholder="Phone" required>
        <input type="submit" name="student_add" value="Add Student">
    </form>


    <form id="myform1" method="post" action="add_entity.php">
            <input type="text" name="first_name" placeholder="First Name" required>
            <input type="text" name="last_name" placeholder="Last Name" required>
            <input type="text" name="email" placeholder="Email" required>
            <input type="text" name="phone" placeholder="Phone" required>
            <input type="submit" name="instructor_add" value="Add Instructor">
        </form>

        <script>
            functionm toggleForm(){
                var form = document.getElemementById("myform");
                var form1 = document.getElementById("myform1");
                if (form.style.display ==="none") {
                    form.style.display = "block";
                    form1.style.display = "none";
                } else {
                    form.style.display = "none";
                }
            }

            function toggleForm1() {
                var form = document.getElementById("myform");
                var form1 = document.getElementById("myform1");
                if (form1.style.display === "none") {
                    form.style.display = "none";
                    form1.style.display = "block";
                } else {
                    form1.style.display = "none";
                }
            }
            </scripy>
</body>
</html>