<?php
require 'config.php';

$AdminFName = $_POST["fname"];
$AdminLName = $_POST["lname"];
$AdminAge = $_POST["age"];
$AdminDOB = $_POST["dob"];
$AdminContact = $_POST["contact"];
$AdminEmail = $_POST["email"];
$AdminPassword = $_POST["password"];


$sql = "INSERT INTO admin1 (FName, LName, Age, Dob, Contact, Email, Password) 
        VALUES ('$AdminFName', '$AdminLName', '$AdminAge', '$AdminDOB', '$AdminContact', '$AdminEmail', '$AdminPassword')";


if($con->query($sql))
{
    //echo "Insert Successful";
    header("Location:login.php");
}
else{
    echo "Error".$con->error;
}

$con->close();

?>