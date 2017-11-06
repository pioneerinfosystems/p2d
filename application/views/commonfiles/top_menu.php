<?php
$controller_name = $this->uri->segment(1);
$service_array   = array(
                  'psd-to-html-conversion-service',
                  'psd-to-html5-conversion-service',
                  'psd-to-wordpress-conversion-service',
                  'psd-to-responsive-wordpress-conversion-service',
                  'psd-to-megento-conversion-service',
                  'psd-to-email-conversion-service',
                  'psd-to-responsive-email-conversion-service',
                  'psd-to-responsive-conversion-service',
                  'html-to-responsive-conversion-service',
                  'html-to-wordpress-conversion-service',
                  'hire-a-php-programmer',
                  'custom-php-development'
                  );
?>
<div class="top_nav">
  <div class="container">
    <div class="row-fluid">
      <div class="span6">
        <div class="pull-left">
          <div class="one-half">
            <ul style="margin-bottom:0px;">
              <li><i class="fa fa-skype envlope_icon" aria-hidden="true"></i> PSD2HTML4U </li>
              <li><i class="envlope_icon fa fa-envelope" aria-hidden="true"></i> <a href="mailto:info@psd2html4u.com" > EMAIL </a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="span6">
        <div class="pull-right">
          <div id="social_widget-2" class="widget social_widget">
            <div class="row-fluid social_row">
              <div class="span12">
                <ul class="footer_social_icons">
                  <li class="twitter"><a target="_blank" href="https://twitter.com/?request_context=signup"><span></span></a></li>
                  <li class="facebook"><a target="_blank" href="https://www.facebook.com/Psd2html4u-832284870249032/timeline"><span></span></a></li>
                </ul>
              </div>
            </div>
          </div>  
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Header -->
<div id="page-bg"></div>
<header id="header" class="header_2">
  <div class="container">
    <div class="row-fluid">
      <div class="span12">
        <!-- Logo -->
        <div id="logo" class="">
          <a href='index.php'><img src="content/images/all/07/Logo4U.png" alt='' /></a>
          <span class="logo_desc"></span>   
        </div><!-- #logo -->
        <div id="navigation" class="nav_top pull-right  ">
          <!-- Menu Section -->
          <nav>
            <ul id="menu-menu" class="menu">
              <li class="<?php if($controller_name =='home'){ ?> current-menu-item <?php } ?> current_page_item"><a href="home">Home</a></li>
              <li class="<?php if($controller_name =='about-us'){ ?> current-menu-item <?php } ?>"><a href="about-us">About Us</a></li>
              <li class="<?php if(in_array($controller_name, $service_array)) { ?> current-menu-item <?php } ?>"><a href="#">Services</a>
                <ul class="sub-menu">
                 <li title="PSD to HTML Conversion Services"><a href="psd-to-html-conversion-service" >PSD to HTML</a></li>
                  <li title="PSD to HTML5 Conversion Services"><a href="psd-to-html5-conversion-service">PSD to HTML5</a></li>
                  <li  title="PSD to WordPress Conversion Services"><a href="psd-to-wordpress-conversion-service">PSD to WordPress</a></li>
                  <li title="PSD to Responsive WordPress Conversion Services"><a href="psd-to-responsive-wordpress-conversion-service">PSD to Responsive WordPress</a></li>
                  <!-- <li><a href="psd-to-megento-conversion-service">PSD to Magento</a></li> -->
                  <li title="PSD to Email Conversion Services"><a href="psd-to-email-conversion-service">PSD to Email</a></li>

                  <li title="PSD to Responsive Email Conversion Services"><a href="psd-to-responsive-email-conversion-service">PSD to Responsive Email</a></li>
                  <li  title="PSD to Responsive Conversion Services"><a href="psd-to-responsive-conversion-service">PSD to Responsive</a></li>
                  <li title="HTML to Responsive Conversion Services"><a href="html-to-responsive-conversion-service">HTML to Responsive</a></li>
                  <li title="HTML to WordPress Conversion Services"><a href="html-to-wordpress-conversion-service">HTML to WordPress</a></li>
                  <li title="Hire a PHP Programmer"><a href="hire-a-php-programmer">Hire a PHP Programmer</a></li>
                  <li title="Custom PHP Development Services"><a href="custom-php-development">Custom PHP Development</a></li>

                </ul>
              </li>

              <li  title="Portfolio" class="<?php if($controller_name =='portfolio'){ ?> current-menu-item <?php } ?>"><a href="portfolio">Portfolio</a></li>
              <!-- <li class="<?php if($controller_name =='blog'){ ?> current-menu-item <?php } ?>"><a href="blog">Blog</a></li> -->

              <li  title="FAQ" class="<?php if($controller_name =='faq'){ ?> current-menu-item <?php } ?>"><a href="faq">FAQ</a></li>
              <li  title="Testimonials" class="<?php if($controller_name =='testimonial'){ ?> current-menu-item <?php } ?>"><a href="testimonial">Testimonials</a></li>
              <li  title="Contact Us" class="<?php if($controller_name =='contact-us'){ ?> current-menu-item <?php } ?>"><a href="contact-us">Contact Us</a></li>
            </ul>
          </nav>
        </div><!-- End Menu #navigation -->
      </div>
    </div>
  </div>
  <span class="shadow"></span>
</header>