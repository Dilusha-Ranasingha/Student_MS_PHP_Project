<?php
require 'config.php';

$ID = $_POST["did"];

$sql = "DELETE FROM student1 WHERE id='$ID'";

if($con->query($sql))
{
   //echo "Data Deleted!";
   //header("Location:read.php");
   echo "<script>alert('Student Delete Successfull!');</script>";
   echo "<script>window.location.href = 'read.php';</script>";
}
else
{
   echo "Data Not Deleted!";
}

?>