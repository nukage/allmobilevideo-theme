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
    <h1>PREPPED &amp; STAFFED TO ENSURE YOUR SUCCESS</h1>
  <h2 >AMV’s Mobile Division houses a wide range of options offering the most advanced capabilities and equipment available. From single live shots to large-scale multi camera productions – AMV can custom spec any unit or carry-pack to meet your needs.</h2>
  <div class="pb-xl-5"></div>
</div>

    <div class="sectionherooverlay">
          <h3>Mobile Production</h3>
        <h4>Coast-to-Coast Production Coverage</h4>
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
         <?php amv_list_taxonomies('no-of-cameras', 'Number of Cameras') ?>
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
        'order' => 'ASC'
      )
    );
 $posts = $query->posts;

                foreach ($posts as $post) {  ?>
 
<?php $allClasses = get_post_class();   ?>  
 <div class="col-6 col-sm-4 col-md-4 col-lg-4 product  <?php foreach ($allClasses as $class) { echo $class . " "; } ?>">
          <div class="">
           <a href="<?php echo get_permalink($post);?>" title="<?php echo the_title();?>"  >
                  <?php echo get_the_post_thumbnail($post, 'amv-isotope-image' , array( 'class' => 'img-responsive' ));?>
                  <div class="caption"><?php echo the_title() ?></div>
                  <span class="description">
                  <h5><?php echo the_title();?></h5>
                    <?php the_excerpt() ?>
                  </span>
 
       
            
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
