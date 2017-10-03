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
    <h1>Fully Customizable to Meet the Needs of Your Production</h1>
  <h2>Providing cutting edge technology, effortless load-in access and ample support space, AMV’s Sound Stages are able to accommodate all of your production needs.</h2>
  <div class="pb-xl-5"></div>
</div>

    <div class="sectionherooverlay">
          <h3>Stages</h3>
        <h4>Conveniently located in Chelsea and Midtown West</h4>
    </div>

  </div>

</section>

<section class="mobile-products container-fluid">
<div class="row">
 

<div class="col-12 no-padding ">   
  <div id="noresults" class="invisible col-sm-6 offset-2"><p>There are no results for this combination of filters, try selecting different options or click below to clear the filters. </p>

  <button role="button" class="btn btn-primary custom-btn" id="clearfilters" href="#">Clear Filters</button></div>

  <div class="row no-gutters isotope-container">

<?php

 $query = new WP_query(
    array(
        'post_type' => array('stage'),
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