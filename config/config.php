<?php
ob_start(); //This turns on output buffering
session_start();

$timezone = date_default_timezone_set("Europe/Dublin");

$con = mysqli_connect("localhost", "root", "", "grandsocialmedia"); //Connection variable

if(mysqli_connect_errno()) {

	echo "Failed to connect: " . mysqli_connect_errno();

}

?>