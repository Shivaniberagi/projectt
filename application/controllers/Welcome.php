<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FineThing extends CI_Controller {
   function __construct()
   {

    parent::__construct();

   }
	public function index()
	{
      
       $this->load->helper('url');
      $this->load->view('header');
       $this->load->view('slider');
       $this->load->view('feature');
       $this->load->view('service');
       $this->load->view('fact');
       $this->load->view('about');
        $this->load->view('award-partner');
      $this->load->view('partner');
     $this->load->view('footer');
	   }

 public function About()
 {
$this->load->helper('url');
 $this->load->view('header');

 $this->load->view('about_us');
 $this->load->view('footer');
 }
 public function contact_us()
 {

$this->load->helper('url');
 $this->load->view('header');

 $this->load->view('contact_us');
 $this->load->view('footer');
 }

  public function our_service()
  {

$this->load->helper('url');
 $this->load->view('header');
$this->load->view('service');
 $this->load->view('footer');

  }

public function portfolio()
{

 $this->load->helper('url');
 $this->load->view('header');
 $this->load->view('award-partner');
 
 $this->load->view('footer');
}


function sendMail()
{


 echo "<script>alert('Thank You For Contacting');</script>";
    

}
function team(){


 $this->load->helper('url');
 $this->load->view('header');
 $this->load->view('team');
 
 $this->load->view('footer');

}


  function career()
  {
 $this->load->helper('url');
 $this->load->view('header');
 $this->load->view('career');
 
 $this->load->view('footer');
  } 



    function Product()
  {
 $this->load->helper('url');
 $this->load->view('header');
 $this->load->view('product');
 
 $this->load->view('footer');
  } 
}

?>
