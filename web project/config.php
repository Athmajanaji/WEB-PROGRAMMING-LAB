<?php 
session_start();
$con=mysqli_connect('localhost','root','','lab');

if(!$con){
	echo "DB Error";
	die();
}