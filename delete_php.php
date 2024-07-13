<?php
require 'config.php';

$ID = $_POST["did"];

$sql = "DELETE FROM student1 WHERE id='$ID'";

if($con->query($sql))
{
   //echo "Data Deleted!";
   header("Location:read.php");
}
else
{
   echo "Data Not Deleted!";
}

?>