<?php
/**
 * The template for displaying the IP Services page
 * Template Name: ip-services
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package allmobilevideo-theme
 */

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
			 

get_header(); ?>

 


<section class="sectionhero">
  <div class="sectionoverlay">




<div class="col-xl-6 offset-xl-3 pl-md-5 pr-md-5 sectionherotext" >
    <h1>Connnected Worldwide Through the Cloud</h1>
<!--   <h2>AMV Gateway’s teleport provides a superior mix of data and video service. Both domestic and international antennas are available as well as multi-format global fiber connectivity. </h2> -->
  <a role="button" class="btn btn-outline-secondary custom-btn wow fadeInUp animated page-scroll splashbtn" href="#contactform"   style="visibility: visible; animation-name: fadeInRight;">CONTACT US</a>
  <div class="pb-xl-5"></div>
</div>

    <div class="sectionherooverlay">
          <h3 style="padding-top:.5em;">AMV IP SERVICES</h3>
<!--         <h4>
All services are monitored and controlled via a state-of-the-art control center, which is staffed with experienced technical personnel twenty-four hours a day.</h4> -->
    </div>

  </div>




</section>






<div class="bluebar">
    <div class="container">
        <div class="row">
            
            <div class="col-sm-12" style="height:30px;">  
</div>
 
        </div>
    </div>
</div>




<section class="gatewayinfo">
	<div class="container">
		<div class="row">

        
		<div class="col-md-8 bloglook">
                 
    <h3> AMV offers the IP Transport technology and services you’re looking for :</h3>
   
    <ul class="listy">
        <li>
            Encoding/Decoding
        </li>
        <li>
           Live Streaming Media
        </li>
        <li>
           Muxing/Demuxing
        </li>
        <li>
          Event Management
        </li>
        <li>
           LiveU,TVU and Zixi available
        </li>
        <li>
        	Visit <a href="/digital-media" target="_blank">AMV Digital Media</a> for more IP solutions
        </li>

        </ul><hr style="margin-top:30px;">
         <h3 style="padding-top:30px;"> AMV IP Services features products from:</h3>
        <img style="margin-right:150px;width:auto;" src="<?php echo get_template_directory_uri(); ?>/img/ip-services-content-1.jpg">
      
</div>
		<div class="col-md-4 pb-5 pb-md-0">
<h5 style="padding:30px 0 5px">Introducing the LU600</h5>
<div style="margin-bottom:20px;" class="videoWrapper">
<iframe width="560" height="315" src="https://www.youtube.com/embed/wAdfA2hwK2w?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>

</div>
		 <section class='sidebarcontactinfo hidden-sm-down'>
    <h4>Inquiries</h4>

    <ul>
    <li>
		<ul>
			<li>Lenny Laxer</li>
			<li>o: <a target="_blank" href="tel:6462306996">(646)230-6996</a></li>
			<li>m: <a target="_blank" href="tel:9172990205">(917)299-0205</a></li>
			<li>e: <a target="_blank" href="mailto:llaxer@amvchelsea.com">llaxer@amvchelsea.com</a></li>
		</ul>
	</li>
	 
</ul>
 
    </section></div>
	</div></div>
</section>


<section id="liveu-box">
 
<div class="container" >
  <div class="row">
  <div class="col-md-6 text-center hidden-md-up">
      <a href="#"  target="_blank"><img class="img-responsive  " src="<?php echo get_template_directory_uri()?>/img/live-u.png" alt=""></a>
    </div>
    <div class="col-md-6 descrip wow fadeInLeft" id="overview">
      <h2>LiveU Solo</span></h2>
      
      <ul class="mt-md-4">
      	<p>The LiveU Solo video encoder offers one-touch, wireless streaming, directly from your camera to Facebook Live and delivers professional quality live video streams without a large crew, lots of equipment or steep learning curve. LiveU Solo lets online broadcasters of all sizes live stream HD video content directly to any online video provider - from anywhere.</p>
      	<li>It’s a plug-and-play, end-to-end live video streaming solution</li>
<li>Keep more viewers engaged with a reliable stream</li>
<li>Send a high-quality stream from remote locations or in heavy crowds</li>
<li>Get out of the studio and broadcast in HD from anywhere</li>
<li>One-touch HD streaming to Facebook live and other platforms</li>
<li>Broadcast like a pro for an affordable price</li>
</ul>
      <a role="button"  class="btn btn-primary custom-btn wow fadeInLeft  mt-md-3 " href="<?php echo get_home_url(); ?>/#" data-wow-delay=".3s"  target="_blank">LIVE U SOLO</a>  
    </div>
    <div class="col-md-6 text-center hidden-sm-down">
      <a href="/gateway/"  target="_blank" class="hoverme"><img class="img-responsive wow fadeInRight" data-wow-delay=".5s" src="<?php echo get_template_directory_uri()?>/img/live-u.png" alt=""></a>
    </div>
  </div>
</div>
 
 </section>
 
<section class="featured-pages">
	<div class="other-services">
		<div class="container">
			<h4 class="">Other Services Available</h4>
		</div>
		
	</div>
	<div class="container">
		<div class="row">
			<div class="col-4">
				<?php 
					$postID = $post->ID;
				get_featured_section('FeaturedSection1', $postID);  ?>
			</div>
			<div class="col-4">
				<?php get_featured_section('FeaturedSection2', $postID); ?>
			</div>
			<div class="col-4">
				<?php get_featured_section('FeaturedSection3', $postID); ?>
			</div>
		</div>
	</div>
	
</section>

 
<?php dynamic_contact($postID) ?>
 
	
			</script>
			<?php
			
			get_footer();
			?>
			