<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package allmobilevideo-theme
 */

?>

	   <footer class="main-footer">
          <div class="container">
            <div class="row">
              <div class="col-xl-3 col-lg-3 col-md-5  col-sm-6    footercontactinfo  offset-3 offset-sm-0 col-8">
                <ul>
                  <li><a class="mobile" href="tel:2127271234" target="_blank"> <span class="hidden-lg-down">Contact Us: </span>(212) 727-1234</a></li>
                  <li><a class="envelope" href="mailto:contact@amvchelsea.com" target="_blank"><span class="hidden-lg-down">  Email:</span> Contact@AmvChelsea.com</a></li>
                  <li><a class="fax" href="tel:2122556644" target="_blank"> <span class="hidden-lg-down"> Fax: </span>(212)255-6644</a></li>
                </ul>
              </div>
              <div class="col-md-3 col-sm-6 col-lg-2 text-sm-left text-left col-5   offset-sm-0">
                <h6>Mobile &amp; Rentals</h6>
                <ul>
                  <li><a href="<?php echo get_home_url(); ?>/mobile/#mputype=mputype-production">Production</a></li>
                  <li><a href="<?php echo get_home_url(); ?>/mobile/#mputype=mputype-carry-pack">Carry-Packs</a></li>
                  <li><a href="<?php echo get_home_url(); ?>/mobile/#mputype=mputype-uplink">KU Trucks</a></li>
                   <li><a href="<?php echo get_home_url(); ?>/rental">Rentals</a></li>
                </ul>
               
                <h6>BROADCAST SALES</h6>
                <ul>
                  <li><a href="<?php echo get_home_url(); ?>/sales">Equipment Sales</a></li>
                  <li><a href="<?php echo get_home_url(); ?>/sales">Integrations</a></li>
                </ul>
              </div>
              <div class="col-md-2 col-sm-6 col-lg-2 text-sm-left text-left col-5 offset-1 offset-sm-0 ">
                 <h6>Sound Stages</h6>
                <ul>
                  <li><a href="<?php echo get_home_url(); ?>/stage/">Chelsea Television Studios </a></li>
                  <li><a href="<?php echo get_home_url(); ?>/stage/unitel-57/">Unitel Studios</a></li>
                </ul>
                 <h6>Video Transport / IP</h6>
                <ul>
                  <li><a href="<?php echo get_home_url(); ?>/gateway/">AMV Gateway</a></li>
                  <li><a href="<?php echo get_home_url(); ?>/satellite-services/">AMV Satellite Services</a></li>
                  <li><a href="<?php echo get_home_url(); ?>/master-control/">AMV Master Control</a></li>
                  <li><a href="<?php echo get_home_url(); ?>http://amvdm.com/" target="_blank">AMV Digital Media</a></li>
                </ul>
                 
              </div>
              <div class="offset-md-5 offset-lg-0 col-md-3 col-sm-6 col-lg-2 text-sm-left text-left col-5  offset-sm-0">
               
                <h6>Post-Production</h6>
                <ul>
                  <li><a href="<?php echo get_home_url(); ?>/post">Editorial</a></li>
                  <li><a href="<?php echo get_home_url(); ?>/post">Audio</a></li>
                  <li><a href="<?php echo get_home_url(); ?>/post">Deliverables/Duplication</a></li>
                  <li><a href="<?php echo get_home_url(); ?>/post">Capture/Export/Transcode</a></li>
                  <li><a href="<?php echo get_home_url(); ?>/post">Large File Transfer</a></li>
                  <li><a href="<?php echo get_home_url(); ?>/post">Digital Assets</a></li>
                </ul>
              </div>
              <div class="col-md-4 col-sm-12  footersocialinfo text-sm-left text-left text-md-left pt-sm-3 pt-md-0 col-lg-3 offset-3 offset-sm-0 pt-4 pt-sm-0 ">
                <h6>Follow Us:</h6>
                <ul><li><a href="http://www.facebook.com"><span>Facebook</span></a></li>
                <li><a href="http://www.twitter.com"><span>Twitter</span></a></li>
                <li><a href="http://www.linkedin.com"><span>LinkedIn</span></a></li></ul>
                <div class="clearfix"></div>
                <form class="customsearchbar1 form-inline my-2 my-lg-0 hidden-md-down">
                  <input class="form-control footersearch" type="text" placeholder="Search">
                  <button class="btn  my-2 my-sm-0" type="submit">Search</button>
                </form>
              </div>
            </div>
             <div class="row">
            <div class="col-lg-12 pr-5 text-right">
              <ul>
                <li><a href="">Privacy Policy</a></li>
                <li><a href="">Terms &amp; Conditions</a></li>
                <li>© 2017 • All Mobile Video • All Rights Reserved</li>
              </ul>
              
            </div>
          </div>
          <!-- /.row -->
          </div>
         
        </footer>

<?php wp_footer(); ?>

</body>
</html>
