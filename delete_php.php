<?php
require 'config.php';

$ID = $_POST["did"];

$sql = "DELETE FROM student1 WHERE id='$ID'";

if($con->query($sql))
{
   echo "Data Deleted!";
}
else
{
   echo "Data Not Deleted!";
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Delete Data</title>
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