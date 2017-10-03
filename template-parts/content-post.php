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
          <div class="col-sm-6 col-md-4 wow fadeInUp iconbox" data-wow-delay=".5s"> 
          <a href="#mobile" class="icon-links page-scroll">
              <div class="homeicons " data-wow-delay=".5s"><img src="<?php echo get_template_directory_uri()?>/img/post-icon-1.png" alt="Generic placeholder image"  ></div>
              <h4>EDITORIAL</h4>
              <p>We have a large complement of editorial tools.</p>
            </a>
            </div><!-- /.col-sm-6 col-md-4 -->
            <div class="col-sm-6 col-md-4  wow fadeInUp iconbox" data-wow-delay=".6s">
              <a href="#post" class="icon-links page-scroll">            <div class="homeicons"><img src="<?php echo get_template_directory_uri()?>/img/post-icon-2.png" alt="Generic placeholder image"></div>
              <h4>AUDIO</h4>
              <p>We’re fully equipped to mix, sweeten, VO and layback your final video project. </p>
            </a>
            </div><!-- /.col-sm-6 col-md-4 -->
            <div class="col-sm-6 col-md-4  wow fadeInUp iconbox" data-wow-delay=".7s">
              <a href="#sales" class="icon-links page-scroll">           <div class="homeicons"><img src="<?php echo get_template_directory_uri()?>/img/post-icon-3.png" alt="Generic placeholder image"></div>
              <h4>DELIVERABLES / DUPLICATION</h4>
              <p>Top production equipment at competitive prices</p>
            </a>
            </div><!-- /.col-sm-6 col-md-4 -->
            <div class="col-sm-6 col-md-4  wow fadeInUp iconbox" data-wow-delay=".8s">
              <a href="#stages" class="icon-links page-scroll">            <div class="homeicons"><img src="<?php echo get_template_directory_uri()?>/img/post-icon-4.png" alt="Generic placeholder image"  ></div>
              <h4>CAPTURE/EXPORT/TRANSCODE</h4>
              <p>We have a myriad of capabilities required to capture, export and transcode digital media.</p>
            </a>
            </div><!-- /.col-sm-6 col-md-4 -->
            <div class="col-sm-6 col-md-4  wow fadeInUp iconbox" data-wow-delay=".9s">
              <a href="#digitalmedia" class="icon-links page-scroll">
                <div class="homeicons"><img src="<?php echo get_template_directory_uri()?>/img/post-icon-5.png" alt="Generic placeholder image"></div>
                <h4>LARGE FILE TRANSFER</h4>
                <p>Utilizing Signiant Media Exchange, we are capable of both sending and receiving large file transfers.</p>
              </a>
              </div><!-- /.col-sm-6 col-md-4 -->
              <div class="col-sm-6 col-md-4  wow fadeInUp iconbox" data-wow-delay="1s""> <a href="#transport" class="icon-links page-scroll">
                <div class="homeicons"><img src="<?php echo get_template_directory_uri()?>/img/post-icon-6.png" alt="Generic placeholder image"></div>
                <h4>DIGITAL ASSETS</h4>
                <p>Digital asset management offers an effective solution to store and organize your library. </p>
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
