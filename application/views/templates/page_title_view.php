<!-- PAGE TITLE SECTION -->
<div class="page-title black-bg typo-white parallax-bg" data-background="<?php echo base_url(); ?>assets/images/bg/6.jpg"  data-stellar-background-ratio="0.5">
    <!-- OVERLAY -->
    <!-- <div class="gradient-black-overlay"></div> -->
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <!-- PAGE TITLE WRAPPER -->
                <div class="page-title-wrapper">
                    <!-- PAGE TITLE -->
                    <h1><?php 
                         $new_page_name = ($page_name == 'overview') ? "About Us" : $page_name;
                         echo ucwords($new_page_name); 
                    ?></h1>
                    <!-- BREADCRUMB -->
                    <ol class="breadcrumb">
                        <li><a href="<?php echo site_url('pages/') ?>">Home</a></li>
                        <li><a href="<?php echo site_url('pages/aboutus') ?>">About Us</a></li>
                        <li class="active"><?php echo ucwords($page_name); ?></li>
                    </ol>
                    <!-- /. BREADCRUMB -->
                </div>
                <!-- PAGE TITLE WRAPPER -->
            </div>
        </div>
    </div>
</div>
<!-- PAGE TITLE SECTION -->