<?php 
error_reporting(0);
session_start();
  $hostname="localhost";
  $username="techn7sc_fine";
  $password="hello@123";
  $dbname="techn7sc_fine";
  $con=Mysqli_Connect($hostname,$username,$password,$dbname);

  if(!$con)
  {
	  die("connection not establish".mysqli_connect_error());
	  
  }

?>