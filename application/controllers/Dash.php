<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dash extends CI_Controller{
  function __construct(){

  	parent::__construct();
  	$this->load->helper('url');
  	//$this->load->database();
 
  }
  function index()
  {

  	$this->load->view('admin/index');
  }

  function login()
  {

  require_once('connection.php');
  extract($_POST);
   if(isset($sub))
   {
  $cwt_query=mysqli_query($con,"select * from `crane_user` where citi_username='$username' and citi_password='$password'");
      if(mysqli_fetch_array($cwt_query))
	  {
	   $_SESSION['username']=$username;
	   $_SESSION['password']=$password;
	echo "<script>alert('ok Details');</script>";
echo "<script>location.replace('../dash/dashboard');</script>";
	}
	else
	{
		echo "<script>alert('incorrect Details');</script>";
		echo "<script>location.replace('../dash');</script>";
	}
		
   }

  }

  function dashboard()
  {

 $this->load->view('admin/dashboard.php');

  }

  function view_gallery()
  {
     $this->load->view('admin/event');
  }
  function gallery()
  {
   $this->load->view('admin/event_gallery');
  }

   function add_gallery()
   {
$this->load->library('upload');
include('connection.php');
   	extract($_POST);
 @$images=$_FILES['img']['name'];
     if(isset($submit))
     {

       $cwt_sql="insert into crane_gallery(gallery_parents,gallery_image)
        values('$cat','$images')";

             //var_dump($cwt_sql);
        $conn=mysqli_query($con,$cwt_sql);
       if($conn)
       {

     
		   move_uploaded_file($_FILES['img']['tmp_name'],"gallery/".$_FILES['img']['name']);
    echo "<script>alert('Event Gallery save to Database successfully');</script>";
    echo "<script>location.replace('../dash/gallery');</script>";

       }
       else
       {

    echo "<script>alert('error!!');</script>";
     }
    }
   }

   function delete_gallery()
   {

   $id=func_get_args();
  $data=$id[0];
  echo $data;

  include('connection.php');
  $query=mysqli_query($con,"Delete From `crane_gallery` where gallery_id='$data'");
  if($query)
  {
    echo "<script>alert('delete Successfully');</script>";

    echo "<script>location.replace('../view_gallery');</script>";
  }
  else
  {
    echo"<script>alert('something wqrong');</script>"; 
}
   }



  function portfolio()
  {
$this->load->view('admin/add_portfolio');
  }



    function add_portfolio()
   {
$this->load->library('upload');
include('connection.php');
   	extract($_POST);
 @$images=$_FILES['img']['name'];
 @$images2=$_FILES['img2']['name'];
     if(isset($submit))
     {

       $cwt_sql="insert into portfolio(doc,port_img)
        values('$images','$images2')";

             //var_dump($cwt_sql);
        $conn=mysqli_query($con,$cwt_sql);
       if($conn)
       {

     
	move_uploaded_file($_FILES['img']['tmp_name'],"gallery/".$_FILES['img']['name']);
	move_uploaded_file($_FILES['img2']['tmp_name'],"gallery/".$_FILES['img2']['name']);
    echo "<script>alert('Event Gallery save to Database successfully');</script>";
    echo "<script>location.replace('../dash/portfolio');</script>";

       }
       else
       {

    echo "<script>alert('error!!');</script>";
     }
    }
   }

   function view_port(){


    $this->load->view('admin/view_ppt');
   }

   function delete_port()
   {
$id=func_get_args();
  $data=$id[0];
  echo $data;

  include('connection.php');
  $query=mysqli_query($con,"Delete From `portfolio` where id='$data'");
  if($query)
  {
    echo "<script>alert('delete Successfully');</script>";

    echo "<script>location.replace('../view_port');</script>";
  }
  else
  {
    echo"<script>alert('something wqrong');</script>"; 
}


   }

    function logout()
    {
      session_start();
      $a=session_destroy();
        if($a)
        {
      echo "<script>location.replace('index');</script>";
}


    }

}

?>