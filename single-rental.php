<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package allmobilevideo-theme
 */

get_header(); ?>

	<div id="primary" class="content-area container">
		<main id="main" class="site-main" role="main">

	

		 

		 
 

		</main><!-- #main -->
	</div><!-- #primary -->

	<?php
		while ( have_posts() ) : the_post();
?>
<div class="rental-single">
	<div class="container showcase">
		<div class="row">
			<div class="col-sm-6 slideshow">

			<?php 	get_template_part( 'template-parts/sections', 'slider' ); ?>

              </div>

			<div class="col-sm-6 item-title"><?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
			      <?php   if(get_field(model)) : ?>
				  <?php
				  echo '<h3>Model: ';
				   the_field(model); 
				   echo'</h3>'

				   ?>
				<?php endif; ?>
					      <?php   if(get_field(brand)) : ?>
				  <?php
				  echo '<h3>Brand: ';
				   the_field(brand); 
				   echo'</h3>'

				   ?>
				<?php endif; ?>
					      <?php   if(get_field(size)) : ?>
				  <?php
				  echo '<h4>Size: ';
				   the_field(size); 
				   echo'</h4>'

				   ?>
				<?php endif; ?>
						      <?php   if(get_field(weight)) : ?>
				  <?php
				  echo '<h4>Weight: ';
				   the_field(weight); 
				   echo'</h4>'

				   ?>
				<?php endif; ?>


			</div>
		</div>
	</div><!--container -->
	<div class="container itemcontent">
<div class="row">

	<div class="col-sm-12 tabbed-area">
		




		<!-- Nav tabs -->
<ul class="nav nav-tabs" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" data-toggle="tab" href="#overview" role="tab">Overview</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#specifications" role="tab">Specifications</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#manuals" role="tab">Manuals &amp; Support</a>
  </li>
 
</ul>

<!-- Tab panes -->
<div class="tab-content">
  <section class="tab-pane active" id="overview" role="tabpanel">
  	<div class="entry-content">
		<?php
			the_content( sprintf(
				/* translators: %s: Name of current post. */
				wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'allmobilevideo-theme' ), array( 'span' => array( 'class' => array() ) ) ),
				the_title( '<span class="screen-reader-text">"', '"</span>', false )
			) );

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'allmobilevideo-theme' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->
  </section>
 


 
             
      
               
                <section class="tab-pane" id="specifications" role="tabpanel" >
                     
                                <?php echo(types_render_field( 'specs' , array('suppress_filters' => 'true', 'show_name' => 'false', 'output' => 'html'))); ?>
                 
                              
                       
                                
                                   
                                
                 </section> <!--/block client-videos-->
               
  <section class="tab-pane" id="manuals" role="tabpanel">
  	  <?php  
  	  echo do_shortcode( '[my_file_name types_field="manuals"]' );
  	   ?>



  </section>
 
</div>





	</div>
	</div><!-- row -->
	</div> <!--container itemcontent -->
</div>

 <!-- jQuery -->

  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>

  <script>window.jQuery || document.write('<script src="/js/libs/jquery-1.7.min.js">\x3C/script>')</script>
<?php 
		endwhile;
		?>

  <?php
get_sidebar();
get_footer();
?>
