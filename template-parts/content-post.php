<?php
/**
 * Template part for displaying page content on the homepage
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package allmobilevideo-theme
 */
?>
    <!-- Page Content -->
<section class="sectionhero">
  <div class="sectionoverlay">
<div class="col-xl-6 offset-xl-3 pl-md-5 pr-md-5 sectionherotext">
    <h1>the technical expertise of our engineering staff is unmatched</h1>
  <h2 >Chelsea Post is one of the most comprehensively equipped facilities in the country. Post production technology and work flow is constantly changing and we pride ourselves on being at the forefront of this evolution. </h2>
  <div class="pb-xl-5"></div>
</div>
    <div class="sectionherooverlay">
          <h3>Post</h3>
        <h4>Chelsea Post is one of the most comprehensively equipped facilities in the country. </h4>
    </div>
  </div>
</section>
<section class="icons pt-5">
      <div class="container">
                <div class="row">
          <div class="col-sm-6 col-md-4 wow fadeInUp" data-wow-delay=".5s"> 
          <a href="#mobile" class="icon-links page-scroll">
              <div class="homeicons " data-wow-delay=".5s"><img src="<?php echo get_template_directory_uri()?>/img/icons-truck.png" alt="Generic placeholder image"  ></div>
              <h4>Mobile &amp; Rentals</h4>
              <p>The most advanced capabilities and equipment available</p>
            </a>
            </div><!-- /.col-sm-6 col-md-4 -->
            <div class="col-sm-6 col-md-4  wow fadeInUp" data-wow-delay=".6s">
              <a href="#post" class="icon-links page-scroll">            <div class="homeicons"><img src="<?php echo get_template_directory_uri()?>/img/icons-film.png" alt="Generic placeholder image"></div>
              <h4>Post</h4>
              <p>The technical expertise of our engineering staff is unmatched</p>
            </a>
            </div><!-- /.col-sm-6 col-md-4 -->
            <div class="col-sm-6 col-md-4  wow fadeInUp" data-wow-delay=".7s">
              <a href="#sales" class="icon-links page-scroll">           <div class="homeicons"><img src="<?php echo get_template_directory_uri()?>/img/icons-cam.png" alt="Generic placeholder image"></div>
              <h4>Sales</h4>
              <p>Top production equipment at competitive prices</p>
            </a>
            </div><!-- /.col-sm-6 col-md-4 -->
            <div class="col-sm-6 col-md-4  wow fadeInUp" data-wow-delay=".8s">
              <a href="#stages" class="icon-links page-scroll">            <div class="homeicons"><img src="<?php echo get_template_directory_uri()?>/img/icons-stages.png" alt="Generic placeholder image"  ></div>
              <h4>Stages</h4>
              <p>Cutting edge technology, effortless load-in access and ample support space</p>
            </a>
            </div><!-- /.col-sm-6 col-md-4 -->
            <div class="col-sm-6 col-md-4  wow fadeInUp" data-wow-delay=".9s">
              <a href="#digitalmedia" class="icon-links page-scroll">
                <div class="homeicons"><img src="<?php echo get_template_directory_uri()?>/img/icons-digitalmedia.png" alt="Generic placeholder image"></div>
                <h4>Digital Media</h4>
                <p>The only glass-to-glass live video provider with the experience to ensure that your live event is a success</p>
              </a>
              </div><!-- /.col-sm-6 col-md-4 -->
              <div class="col-sm-6 col-md-4  wow fadeInUp" data-wow-delay="1s""> <a href="#transport" class="icon-links page-scroll">
                <div class="homeicons"><img src="<?php echo get_template_directory_uri()?>/img/icons-videotransport.png" alt="Generic placeholder image"></div>
                <h4>Video Transport / IP</h4>
                <p>Westar provides your station the efficiencies of scale and expense savings once available to only the largest of broadcast groups.</p>
              </a>
              </div><!-- /.col-sm-6 col-md-4 -->
            </div>
          </div>
          <!-- /.container -->
        </section>
        <section class="featured-pages">
          <div class="container">
            <div class="row">
      <div class="col-4">
      <?php get_featured_section('FeaturedSection1', $post); ?>
      </div>
      <div class="col-4">
      <?php get_featured_section('FeaturedSection2', $post); ?>
      </div>
            <div class="col-4">
      <?php get_featured_section('FeaturedSection3', $post); ?>
      </div>
            </div>
           </div>
          </div>
        </section>
<section class="mobile-products container-fluid">
<div class="row">
<div class="col-sm-12 col-md-3 col-lg-2">
 <section class="mobile-filter widget">
       <ul class="row">
       <?php amv_list_taxonomies('mpu-type', 'Type') ?>
        <?php amv_list_taxonomies('video-format', 'Video Format') ?>
         <?php amv_list_taxonomies('audio-format', 'Audio Format') ?>
         <?php amv_list_taxonomies('number-of-cameras', 'Number of Cameras') ?>
       </ul>
    </section><!-- .filter .widget -->
    <section class='sidebarcontactinfo hidden-sm-down'>
    <h4>Inquiries</h4>
      <ul><li>
        <ul><h5>Eric Duke</h5>
          <li>t: (212) 727-1234</li>
          <li>e: eduke@amvchelsea.com</li>
        </ul>
      </li>
      <li>
        <ul><h5>Lenny Laxler</h5>
          <li>t: (646)230-6996</li>
          <li>c:(917)299-0205</li>
        </ul>
      </li>
      <li>
        <ul><h5>Tom D'Angelo</h5>
          <li>t: (646)486-8052</li>
          <li>e:tdeangelo@amvchelsea.com</li>
        </ul>
      </li>
      <li>
        <ul><h5>General</h5>
        <li>contact@amvchelsea.com</li>
          <li>t:(212)727-1234</li>
          <li>f:(212)255-6644</li>
        </ul>
      </li></ul>
    </section>
  </div>
<div class="col-sm-12 col-md-9 col-lg-10">   
  <div id="noresults" class="invisible col-sm-6 offset-2"><p>There are no results for this combination of filters, try selecting different options or click below to clear the filters. </p>
  <button role="button" class="btn btn-primary custom-btn" id="clearfilters" href="#">Clear Filters</button></div>
  <div class="row no-gutters isotope-container">
<?php
 $query = new WP_query(
    array(
        'post_type' => array('mobile'),
        'post_status' => 'publish',
        'orderby' => 'title',
        'order' => 'ASC',
        'posts_per_page' => '-1'
      )
    );
 $posts = $query->posts;
                foreach ($posts as $post) {  ?>
<?php $allClasses = get_post_class();   ?>  
 <div class="col-6 col-sm-4 col-md-3   product  <?php foreach ($allClasses as $class) { echo $class . " "; } ?>">
          <div class="">
           <a href="<?php echo get_permalink($post);?>" title="<?php echo the_title();?>"  >
                  <?php echo get_the_post_thumbnail($post, 'amv-isotope-image' , array( 'class' => 'img-responsive' ));?>
                  <div class="caption"><?php echo the_title() ?></div>
                  <span class="description">
                  <h5><?php echo the_title();?></h5>
                    <?php the_excerpt() ?>
                  </span>
            </a>
          </div>
        </div>
    <?php
} 
?>   
  </div>
  </div>
  </div>
</section>
    <!-- Page Content -->
   <!--end page content -->
        <?php if ( get_edit_post_link() ) : ?>
		<footer class="entry-footer">
			<?php
				edit_post_link(
					sprintf(
						/* translators: %s: Name of current post */
						esc_html__( 'Edit %s', 'allmobilevideo-theme' ),
						the_title( '<span class="screen-reader-text">"', '"</span>', false )
					),
					'<span class="edit-link">',
					'</span>'
				);
			?>
		</footer><!-- .entry-footer -->
	<?php endif; ?>
