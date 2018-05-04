<?php
include('connection.php');
 $id=$_GET['page'];
 $del_query=mysqli_Query($con,"delete from `citiyano_event` where citi_id='$id'");
//var_dump($del_query);
 if($del_query)
 {
	 echo "<script>alert('product successfully deleted');</script>";
	 echo"<script>location.replace('event.php');</script>";
 }
 else
 {
	 echo "<script>alert('somethign error');</script>";
 }
?>