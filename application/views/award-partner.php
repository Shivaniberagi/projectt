<!-- recent-project section -->
    <section class="recent-project">
        <div class="container">
            <div class="project-top-title">
                <div class="row">
                    <div class="col-md-5 col-sm-6 col-xs-12">
                        <div class="project-title">
                            <div class="title-head">Our Works</div>
                            <div class="section-title"><h2>Recent Projects</h2></div>
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
   $conn=mysqli_query($con,"select * from `crane_gallery` LIMIT 4 ");
   while($fetch=mysqli_fetch_array($conn))
   {
            ?>

                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="single-item">
                            <div class="img-box"><figure><img height="350px"src="<?php echo base_url(); ?>/gallery/<?php echo  $fetch['gallery_image'];?>" alt=""></figure></div>
                           
                        </div>
                    </div>

                    <?php } ?>
                   
              
                
                </div>
                <div class="button">
                    <a href="<?php echo base_url();?>index.php/FineThing/portfolio" class="btn-one">view more</a>
                </div>
            </div>
        </div>
    </section>
    <!-- rectnt-project section end -->



