<?php
require 'config.php';

$studentName = $_POST["sname"];
$studentContact = $_POST["scontact"];
$studentEmail = $_POST["semail"];

$sql = "INSERT INTO student1 VALUES ('','$studentName','$studentContact','$studentEmail')";

if($con->query($sql))
{
    echo "Insert Successful";
}
else{
    echo "Error".$con->error;
}

$con->close();

?>



<!DOCTYPE html>
<html>
<head>
    <title>Manage Data</title>
</head>
<body>
    <button onclick="goToTable()">Go to Table</button>

    <script>
        function goToTable() {
            window.location = 'read.php';
        }
    </script>
</body>
</html>