<?php
require 'config.php';

$studentName = $_POST["sname"];
$studentContact = $_POST["scontact"];
$studentEmail = $_POST["semail"];

$sql = "INSERT INTO student1 (name, contact, email) 
        VALUES ('$studentName', '$studentContact', '$studentEmail')";

if($con->query($sql))
{
    //echo "Insert Successful from read page";
    header("Location:read.php");
}
else{
    echo "Error".$con->error;
}

$con->close();

?>