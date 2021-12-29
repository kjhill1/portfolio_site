<?php 
include('includes/header.php');


?>
            
<!--Main Start-->
     <div id="main" class="site-main">

                <!--Contact Section Start-->
                <section id="contact" class="contact-section pt-page">
                    <div class="section-container">

                        <!--Page Heading-->
                        <div class="page-heading">
                            <span class="icon"><i class="lnr lnr-envelope"></i></span>
                            <h2>Contact Me.</h2>
                        </div>

                        <!--Form Row-->
                        <div class="row mb-70">
                            <div class="col-lg-8  offset-lg-2">
                                <div class="subheading">
                                    <h3>Let's Talk</h3>
                                </div>

                                <!--Form Start-->
                                <form id="contact-form" method="post" action="phpmailer/mail.php">
                                    <div class="row">


                                        <!--Name Field-->
                                        <div class="col-md-6 mb-50">
                                            <span class="input">
                                                <input class="input__field cf-validate" type="text" id="cf-name" name="name" />
                                                <label class="input__label" for="cf-name">Name</label>
                                            </span>
                                        </div>

                                        <!--Email Field-->
                                        <div class="col-md-6 mb-50">
                                            <span class="input">
                                                <input class="input__field cf-validate" type="text" id="cf-email" name="email" />
                                                <label class="input__label" for="cf-email">Email</label>
                                            </span>
                                        </div>

                                        <!--Message Box-->
                                        <div class="col-md-12 mb-30">
                                            <span class="input">
                                                <textarea  class="input__field cf-validate" id="cf-message" name="message" rows="5" ></textarea>
                                                <label class="input__label" for="cf-message">How can we help you?</label>
                                            </span>
                                        </div>

                                        <div class="alert-container col-md-12"></div>

                                        <!--Submit Button-->
                                        <div class="col-md-12 text-center">
                                            <button id="cf-submit" class="btn-main">Send Message</button>
                                        </div>


                                    </div>
                                </form>
                                <!--Form End-->

                            </div>
                        </div>

                        <!--Contact Info Row Start-->
                        <div class="row contact-info mb-70">

                            <!--Contact Info Item-->
                            <div class="col-md-4 info-item">
                                <span class="icon"><i class="fas fa-paper-plane"></i></span>
                                <h5><a href="mailto:kjhilldesigns7@gmail.com">Email Me</a></h5>
                            </div>

                            <!--Contact Info Item-->
                            <div class="col-md-4 info-item">
                                <span class="icon"><i class="fas fa-map-marker-alt"></i></span>
                                <h5>Seattle, WA., USA</h5>
                            </div>

                            <!--Contact Info Item-->
                            <div class="col-md-4 info-item">
                                <span class="icon"><i class="fas fa-phone"></i></span>
                                <h5>(+1) 206 578 1565</h5>
                            </div>

                        </div>
                        <!--Contact Info Row End-->

                    </div>
                    <!-- end Section container -->
                  
                </section>
                <!--Contact Section End-->


            </div>
            <!--Main End-->         


        <?php 
include('includes/footer.php');
?>


      

