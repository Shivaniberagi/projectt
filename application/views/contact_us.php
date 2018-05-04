    <!-- page title -->
    <div class="about-bg centered">
        <div class="container">
            <div class="text">contact us</div>
        </div>
    </div>
    <!-- end page title -->

    <!-- bread-crumb -->
    <div class="bread-crumb">
        <div class="container">
            <div class="text"><a href="index.html">Home</a><i class="fa fa-long-arrow-right"></i>Get In Touch</div>
        </div>
    </div>
    <!-- bread crumb end -->

    <!-- contact-section / contact-page -->
    <section class="contact-section">
        <div class="container">
            <div class="contact-title centered">
                <div class="title">Would you like to receive more info about us?</div>
                <div class="title-text">OR you would like to request a proposal from us. Please get in touch with us and our consultant will contact you.</div>
            </div>
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12 contact-colmun">
                    <div class="contact-area">
                        <div class="title-head">Get In Touch</div>
                     
                        <form 
                         action="<?php echo site_url('FineThing/sendMail'); ?>" method="post">
                            <div class="row">
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" name="name" value="" placeholder="First Name" required="">
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" name="subject" value="" placeholder="Last Name" required="">
                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <input type="email" name="email" value="" placeholder="Email Address" required="">
                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <textarea placeholder="Message" name="message" required=""></textarea>
                                </div>
                            </div>
                         <button class="btn btn-info" name="mail" type="submit">Send Message</button>
                        </form>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="contact-info">
                        <div class="single-item">


                            <style type="text/css">
                                

                            


                            </style>
                            <div class="icon-box"><i class="fa fa-map-marker"></i></div>
                            <h4>Fine Things</h4>
                            <div class="text">
                                <p><strong>Address:</strong> B1/601, Green Home CGHS,
        GH Plot Number 4
        Sector – 52, Gurgaon HR
        India 122002
</p>
                                <p><strong>Phone:</strong>+91 9999 0000 33</p>
                                <p><strong>Email:</strong><a href="#">finethings@finethings2source.com , fine.things2source@finethings2source.in , svashist@finethings2source.com
</a></p>
                            
                            </div>
                        </div>
                      
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end contact-section / contact-page -->

    <!-- google map area -->
    <div class="google-map-area">
        <div >
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3508.5390446540723!2d77.08795201411507!3d28.43316269982908!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d18a608f6f07f%3A0xaf7b570c4c0441d5!2sThe+Green+Home+CGHS+Limited!5e0!3m2!1sen!2sin!4v1512547375140" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
    </div>
    <!-- google map area end -->

    