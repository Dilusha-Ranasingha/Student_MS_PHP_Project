<?php

$con=new mysqli("localhost","root","Nim@123","studentms","3308");

if($con->connect_error)
{
    die("connection fail".$con->connect_error);
}

?>  