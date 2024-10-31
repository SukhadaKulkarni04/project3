<?php

$connect= mysqli_connect("localhost","id21287486_usergetip","Getip@123","id21287486_getip");


if (!$connect) {


	echo "connection failed please try later";
	# code...
}
else
{
    echo "connected";
}
?>