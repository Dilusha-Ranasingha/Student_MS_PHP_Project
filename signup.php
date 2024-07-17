<head>
    <title>signup</title>
    <link rel="stylesheet" href="./CSS/signupcss.css">
</head>
<body>
        <div class="background">
            <div class="shape"></div>
            <div class="shape"></div>
        </div>
        
        <form method="post" action="signup_php.php" id="signupForm" onsubmit="return validateForm();">
            <h3>Sign up</h3>
            <label for="username">ID</label>
            <input type="text" placeholder="Enter the ID" disabled>

            <label for="name">First Name</label>
            <input type="text" placeholder="Enter the Name" name="fname">

            <label for="contact">Last Name</label>
            <input type="text" placeholder="Enter the Last Name" name="lname">

            <label for="name">Age</label>
            <input type="text" placeholder="Enter the Age" name="age">

            <label for="name">Date Of Birth</label>
            <input type="date" placeholder="Enter the Birthday" name="dob">

            <label for="name">Contact</label>
            <input type="text" placeholder="Enter the Contact" name="contact">

            <label for="name">Email</label>
            <input type="email" placeholder="Enter the Email" name="email">

            <label for="name">Password</label>
            <input type="password" placeholder="Enter own Password" name="password">

            <button type="submit" >Sign in</button>

        </form>
    
    <script>
        function validateForm() {
            var fname = document.forms["signupForm"]["fname"].value;
            var lname = document.forms["signupForm"]["lname"].value;
            var age = document.forms["signupForm"]["age"].value;
            var dob = document.forms["signupForm"]["dob"].value;
            var contact = document.forms["signupForm"]["contact"].value;
            var email = document.forms["signupForm"]["email"].value;
            var password = document.forms["signupForm"]["password"].value;

            var nameRegex = /^[A-Za-z\s]+$/;
            var numberRegex = /^[0-9]+$/;
            var emailRegex = /^[a-z0-9]+@[a-z0-9]+\.[a-z]+$/i;
            var passwordRegex = /^[A-Za-z0-9!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?]+$/;

            if (fname == "" || lname == "" || age == "" || dob == "" || contact == "" || email == "" || password == "") {
                alert("All fields must be filled out");
                return false;
            }

            if (!nameRegex.test(fname)) {
                alert("First name should contain only letters and spaces");
                return false;
            }

            if (!nameRegex.test(lname)) {
                alert("Last name should contain only letters and spaces");
                return false;
            }

            if (!numberRegex.test(age)) {
                alert("Age should contain only numbers");
                return false;
            }

            if (!numberRegex.test(contact)) {
                alert("Contact number should contain only numbers");
                return false;
            }

            if (!email.endsWith("@gmail.com")) {
                alert("Email should end with @gmail.com");
                return false;
            }

            if (!passwordRegex.test(password) || /\s/.test(password)) {
                alert("Password should contain only letters, numbers, and symbols, and should not contain spaces");
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