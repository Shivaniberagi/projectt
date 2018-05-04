<?php   include('header.php'); ?>

<?php    include('side_menu.php'); ?>
			<?php
			  @$page=$_GET['page'];
			  
			  if($page=='body_page')
			  {
				  
				  include('body.php');
			}
		   	
			else
			{
				include('body.php');
				
			}
			
			?>

			
		
		
			
		<?php   include("footer.php"); ?>