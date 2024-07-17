<html>
<head>
    <title>Add student</title>
    <link rel="stylesheet" href="./CSS/indexcss.css">
</head>
<body>
    <div class="background">
        <div class="shape"></div>
        <div class="shape"></div>
    </div>

    <div>
        <form method="post" action="insert.php" id="studentForm" onsubmit="return validateForm();">
            <h3>Student Info</h3>
            <label for="username">ID</label> 
            <input type="text" placeholder="ID defalut" disabled>

            <label for="name">Name</label>
            <input type="text" placeholder="Enter the Name" name="sname">

            <label for="contact">Contact Number</label>
            <input type="text" placeholder="Enter the Contact Numebr" name="scontact">

            <label for="email">Email</label>
            <input type="email" placeholder="Enter the Emial" name="semail">

            <button type="submit" >Add student</button>

        </form>
    </div>
    
    <script>
        function validateForm() {
            var sname = document.forms["studentForm"]["sname"].value;
            var scontact = document.forms["studentForm"]["scontact"].value;
            var semail = document.forms["studentForm"]["semail"].value;

            var nameRegex = /^[A-Za-z\s]+$/;
            var numberRegex = /^[0-9]+$/;
            var emailRegex = /^[a-z0-9]+@[a-z0-9]+\.[a-z]+$/i;

            if (sname == "" || scontact == "" || semail == "") {
                alert("All fields must be filled out");
                return false;
            }

            if (!nameRegex.test(sname)) {
                alert("Name should contain only letters and spaces");
                return false;
            }

            if (!numberRegex.test(scontact)) {
                alert("Contact number should contain only numbers");
                return false;
            }

            if (!semail.endsWith("@gmail.com")) {
                alert("Email should end with @gmail.com");
                return false;
            }

            return true;
        }
    </script>

    <!--navigation bar-->
    <div class="navbar" style="background-color: #333; padding: 10px; position: fixed; top: 0; width: 100%; margin-top: 0px;">
            <a href="home.php" style="color: white; text-decoration: none; margin-right: 10%; margin-left: 10%">Home</a>
            <a href="signup.php" style="color: white; text-decoration: none; margin-right: 10%; margin-left: 10%">Add Admin</a>
            <a href="login.php" style="color: white; text-decoration: none; margin-right: 10%; margin-left: 10%">Manage Student</a>
            <a href="setting.php" style="color: white; text-decoration: none; margin-right: 10%; margin-left: 10%">Setting</a>
    </div>

    <!--footer section-->
    <div class="footer" style="background-color: #333; color: white; padding: 10px; text-align: center; position: fixed; bottom: 0; width: 100%;">
        This is the student management system 2024
    </div>
</body>
</html>