<?php
require 'config.php';

$ID = $_POST["uid"];
$Name = $_POST["uname"];
$Contact = $_POST["ucontact"];
$Email = $_POST["uemail"];

if(empty($Name)||empty($Contact)||empty($Email))
{
    echo "All required";
}
else
{
    $sql = "UPDATE student1 set name='$Name' ,contact='$Contact' ,email='$Email' WHERE id='$ID'";

    if($con->query($sql))
    {
        echo "Data Updated!";
    }
    else
    {
        echo "Data Not Updated!";
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Update Data</title>
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