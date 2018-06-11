<?php
	include_once("config.php");
	$rollno=$_GET['rollno'];
	$result=mysqli_query($mysqli,"DELETE FROM hello WHERE rollno='$rollno'");
	header('location:index.php');
?>