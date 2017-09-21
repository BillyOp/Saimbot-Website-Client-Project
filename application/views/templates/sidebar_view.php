<section class="padding-tb-100">
<div class="container">
<div class="row">
<!-- SIDEBAR -->
<div class="sidebar col-md-3">
    <!-- 	ABOUT MENU WIDGET -->
    <div class="widget about-menu-widget">
       <?php 
            $string = uri_string();
            $string2 = str_ireplace("pages/aboutus/", "", $string);
        ?>
        <ul>
            <li><a href="<?php echo site_url('pages/aboutus/overview'); ?>"
              <?php if($string2 == 'overview' || $string == 'pages/aboutus'){ ?> class="active" <?php } ?>>Overview</a></li>
            <li><a href="<?php echo site_url('pages/aboutus/ourhistory'); ?>"
              <?php if($string2 == 'ourhistory'){ ?> class="active" <?php } ?>>Our History</a></li>
            <li><a href="<?php echo site_url('pages/aboutus/ourteam'); ?>"
              <?php if($string2 == 'ourteam'){ ?> class="active" <?php } ?>>Team</a></li>
            <li><a href="<?php echo site_url('pages/aboutus/faqs'); ?>"
              <?php if($string2 == 'faqs'){ ?> class="active" <?php } ?>>FAQs</a></li>
            <li><a href="<?php echo site_url('pages/aboutus/testimonials'); ?>"
              <?php if($string2 == 'testimonials'){ ?> class="active" <?php } ?>>Testimonial</a></li>
        </ul>
    </div>
    <!-- /. ABOUT MENU WIDGET -->
    <!-- GET QUOTE WIDGET -->
    <div class="widget search-widget">
        <!-- WIDGET TITLE -->
        <h4 class="widget-title">GET FREE QUOTE</h4>
        <p>Feel free to enter your email here to get free quote from us</p>
        <form>
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Your Email*">
                <span class="input-group-btn">
                <button class="btn btn-default" type="button"><span class="ion-ios-arrow-thin-right"></span></button>
                </span>
            </div>
            <!-- /input-group -->
        </form>
    </div>
    <!-- /. GET QUOTE WIDGET -->
    <!-- CONTACT US WIDGET -->
    <div class="widget conatct-widget">
        <!-- WIDGET TITLE -->
        <h4 class="widget-title">CONTACT US</h4>
        <ul class="contact-widget">
            <li class="address">P.O. BOX 40461 - 80100</li>
            <li class="phone">0722388954/0725633204</li>
            <li class="mail">saimbot@yahoo.com</li>
            <li class="time">Mon - Sat: 9.00 am - 5.00 pm</li>
        </ul>
    </div>
    <!-- /. CONTACT US WIDGET -->
</div>
<!-- /. SIDEBAR -->