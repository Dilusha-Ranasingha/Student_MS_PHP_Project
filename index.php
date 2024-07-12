<head>
    <title>Add student</title>
</head>
<body>
    <fieldset>
        <legend><b>Student Info</b></legend>
        <form method="post" action="insert.php" id="studentForm">
            ID : <input type="text" disabled><br>
            Name : <input type="text" name="sname"><br>
            Contact Number : <input type="text" name="scontact"><br>
            Email : <input type="email" name="semail"><br> 

            <input type="submit" value="Add student">  
            <input type="reset">

        </form>
    </fieldset>
    
</body>
</html>