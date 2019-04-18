<?php
/**
 * @package WordPress
 * @subpackage HTML5-Reset-WordPress-Theme
 * @since HTML5 Reset 2.0
 */
?>
<!-- <footer id="footer" class="source-org vcard copyright" role="contentinfo"> -->

<footer id="footer" class="container-fluid">
    <div class="container-fluid">
        <div class="col-md-4 column1">
        </div>
        <div class="col-md-4 column2 ">
            <div class="ContactInfo">
                <a href="http://maps.apple.com/?address=<?php echo of_get_option('meta_app_address_street'); ?>,<?php echo of_get_option('meta_app_address_city'); ?>,<?php echo of_get_option('meta_app_address_province'); ?>,<?php echo of_get_option('meta_app_address_country'); ?>" class="FooterAddress">
                    <div class="AddressIcon"></div>
                    <div class="AddressText"><?php echo of_get_option('meta_app_address_street'); ?>,<br>
					<?php echo of_get_option('meta_app_address_city'); ?>, <?php echo of_get_option('meta_app_address_province'); ?> <?php echo of_get_option('meta_app_address_postal'); ?>
                    </div>
                    <div class="MobileDescriptor">Map</div>
                </a>
                <a href="tel:<?php echo of_get_option('meta_app_address_phone'); ?>" class="FooterPhone">
                    <div class="PhoneIcon"></div>
                    <div class="PhoneText"><?php echo of_get_option('meta_app_address_phone'); ?></div>
                    <div class="MobileDescriptor">Phone</div>
                </a>
                <a href="mailto:<?php echo of_get_option('meta_app_address_email'); ?>" class="FooterEmail">
                    <div class="EmailIcon"></div>
                    <div class="EmailText"><?php echo of_get_option('meta_app_address_email'); ?></div>
                    <div class="MobileDescriptor">Email</div>
                </a>
            </div>
        </div>
        <div class="col-md-4 column3">
            <div class="SocialMediaLinks">
                <a href="<?php echo of_get_option('meta_app_fb_url'); ?>" target="_blank" class="SocialMediaFooterIcon Facebook">Facebook</a>
                <a href="<?php echo of_get_option('meta_app_twitter_url'); ?>" target="_blank" class="SocialMediaFooterIcon Twitter">Twitter</a>
                <a href="<?php echo of_get_option('meta_app_googleplus_url'); ?>" target="_blank" class="SocialMediaFooterIcon GooglePlus">Google+</a>
                <a href="<?php echo of_get_option('meta_app_instagram_url'); ?>" target="_blank" class="SocialMediaFooterIcon Instagram">Instagram</a>
                <a href="<?php echo of_get_option('meta_app_youtube_url'); ?>" target="_blank" class="SocialMediaFooterIcon YouTube">YouTube</a>
            </div>
        </div>
        <div class="col-md-12">
            <div class="FooterCopyright">&copy; <?php echo date("Y"); echo " "; bloginfo('name'); ?>. All rights reserved.</div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>

<!-- jQuery is called via the WordPress-friendly way via functions.php --> 

<!-- this is where we put our custom functions --> 
<script src="<?php bloginfo('template_directory'); ?>/_/js/functions.js"></script> 
<script src="<?php echo get_template_directory_uri(); ?>/js/wilesjackson.js"></script>
<?php /*?><script src="<?php echo get_template_directory_uri(); ?>/js/jquery.sticky.js"></script> <?php */?>
<!-- Asynchronous google analytics; this is the official snippet.
         Replace UA-XXXXXX-XX with your site's ID and domainname.com with your domain, then uncomment to enable.

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-XXXXXX-XX', 'domainname.com');
  ga('send', 'pageview');

</script>
-->
</body>
</html>
