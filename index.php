<head>
    <title>Add student</title>
</head>
<body>
    <fieldset>
        <legend><b>Student Info</b></legend>
        <form method="post" action="insert.php" id="studentForm" onsubmit="return validateForm();">
            ID : <input type="text" disabled><br>
            Name : <input type="text" name="sname"><br>
            Contact Number : <input type="text" name="scontact"><br>
            Email : <input type="email" name="semail"><br> 

            <button type="submit" >Add student</button>
            <input type="reset">

        </form>
    </fieldset>
    
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
</body>
</html>