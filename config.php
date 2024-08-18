<?php

$con=new mysqli("localhost","root","","studentms");

if($con->connect_error)
{
    die("connection fail".$con->connect_error);
}

?>  