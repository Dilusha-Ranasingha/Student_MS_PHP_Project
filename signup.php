<head>
    <title>signup</title>
</head>
<body>
    <fieldset>
        <legend><b>SIGN-UP</b></legend>
        <form method="post" action="signup_php.php" id="signupForm" onsubmit="return validateForm();">
            ID : <input type="text" disabled><br>
            First Name : <input type="text" name="fname"><br>
            Last Name : <input type="text" name="lname"><br>
            Age : <input type="text" name="age"><br>
            Date Of Birth : <input type="date" name="dob"><br>
            Contact Number : <input type="text" name="contact"><br>
            Email : <input type="email" name="email"><br>
            Password : <input type="password" name="password"><br>

            <button type="submit" >Sign in</button>
            <input type="reset">

        </form>
    </fieldset>
    
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
    
</body>
</html>