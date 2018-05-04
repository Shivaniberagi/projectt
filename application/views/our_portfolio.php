 <div class="about-bg centered">
        <div class="container">
            <div class="text">Our Gallery</div>
        </div>
    </div><!-- recent-project section -->
   

    <section class="recent-project">
        <div class="container">
            <div class="project-top-title">
                <div class="row">
                    <div class="col-md-5 col-sm-6 col-xs-12">
                        <div class="project-title">
                            <div class="title-head">Our Gallery</div>
                   
                        </div>
                    </div>
                   
                </div>
            </div>
        </div>
        <div class="project-content centered">
            <div class="container">
                <div class="row">
                    <?php 
   include('admin/connection.php');
   $conn=mysqli_query($con,"select * from `crane_gallery`");
   while($fetch=mysqli_fetch_array($conn))
   {
            ?>

                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="single-item">
                            <div class="img-box"><figure><img height="350px"src="<?php echo base_url();?>/gallery/<?php echo  $fetch['gallery_image'];?>" alt="photo "></figure></div>
                           
                        </div>
                    </div>

                    <?php } ?>
                   
                  
                   
                    </div>
</div>

              
            </div>
        </div>
    </section>
    <!-- rectnt-project section end -->


<br>

<br>
