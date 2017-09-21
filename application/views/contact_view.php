<!-- PAGE TITLE SECTION -->
<div class="page-title black-bg typo-white parallax-bg" data-background="<?php echo base_url(); ?>assets/images/bg/5.jpg"  data-stellar-background-ratio="0.5">
    <!-- OVERLAY -->
    <div class="gradient-black-overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <!-- PAGE TITLE WRAPPER -->
                <div class="page-title-wrapper">
                    <!-- PAGE TITLE -->
                    <h1>Contact Us</h1>
                    <!-- BREADCRUMB -->
                    <ol class="breadcrumb">
                        <li><a href="<?php echo site_url('pages/') ?>">Home</a></li>
                        <li class="active">Contact</li>
                    </ol>
                    <!-- /. BREADCRUMB -->
                </div>
                <!-- PAGE TITLE WRAPPER -->
            </div>
        </div>
    </div>
</div>
<!-- PAGE TITLE SECTION -->
<!-- SECTION -->
<section class="map_section">
    <div class="row" id="maprow">
        <div class="col-md-12" id="map">
            <script>
              function initMap() {
                var saimbot = {lat: -4.040249, lng: 39.615873};
                var map = new google.maps.Map(document.getElementById('map'), {
                  zoom: 15,
                  center: saimbot
                });
                var marker = new google.maps.Marker({
                  position: saimbot,
                  map: map,
                  title:"Saimbot Ship Conctactors Limited",
                  label:"Saimbot Ship Contractors Limited"
                });
              }
            </script>
            <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC-H5oZHmJFbQzUkNEQdq1voBFfeDDbSL4&callback=initMap">
            </script>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div data-animation-delay="300" data-animation="fadeInUp" class="section-title clearfix animated">
                    <h3>CONTACT US</h3>
                    <p>We are located in Mombasa and Nairobi. Our headquarters is in Mombasa, Kenya a place called Portreiz</p>
                    <p>In Nairobi we are located at Ruai along the Eastern bypass next to Gulf Energy petrol station. You can get to us via mobile through +254722388954 or +254725633204. You also get through us by filling your details in the form and we shall get to you immediately.</p>
                </div>
            </div>
            <div class="col-md-8">
                <!-- Form Begins -->
                <div class="contact-form typo-black animated" data-animation="fadeInUp" data-animation-delay="200">
                    <p class="form-message"></p>
                    <form name="contactform2" id="contactform2" method="post" action="#">
                        <!-- Field 1 -->
                        <div class="row">
                            <div class="col-md-6">
                                <div class="input-text form-group">
                                    <label>YOUR NAME<span class="text-color">*</span></label>
                                    <input type="text" name="contact_name" class="input-name form-control" placeholder="Enter your name" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <!-- Field 3 -->
                                <div class="input-email form-group">
                                    <label>YOUR EMAIL<span class="text-color">*</span></label>
                                    <input type="email" name="contact_email" class="input-email form-control" placeholder="Enter your email"/>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <!-- Field 4 -->
                                <div class="textarea-message form-group">
                                    <label>MESSAGE<span class="text-color">*</span></label>
                                    <textarea name="contact_message" class="textarea-message form-control" rows="3" placeholder="Enter your message" ></textarea>
                                </div>
                            </div>
                        </div>
                        <!-- Button -->
                        <div>
                            <button class="btn btn-default btn-theme text-uppercase" type="submit">Submit</button>
                        </div>
                    </form>
                    <!-- Form Ends -->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /. SECTION -->