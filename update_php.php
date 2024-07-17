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
        //echo "Data Updated!";
        //header("Location:read.php");
        echo "<script>alert('Update Successful!');</script>";
        echo "<script>window.location.href = 'read.php';</script>";
    }
    else
    {
        echo "Data Not Updated!";
    }
}

?>