<?php
/**
 * Template part for displaying page content on the homepage
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package allmobilevideo-theme
 */


		 


?>

    <?php 








$cate = get_queried_object();
    if ($cate->term_id){
      $cateID = $cate->term_id;
    }
    else{
      $cateID = 0;
    }
echo '<h1>'.$cateID.'</h1>';

if ($cateID === 0){
  echo 'THIS IS RENTALS HOME';
  $current = 'rentals_home';
 
}

elseif (get_term_children( $cateID, 'rentals' )){
  echo 'THIS IS SUBCATEGORY INDEX';
 $current = 'rentals_sub';
?>

<?php 

}
 
else{
  echo 'THIS IS A PRODUCT INDEX';
  $current = 'rentals_product';


};


 $args = array(
      'taxonomy' => 'rentals',
      'parent' => $cateID,
        'hierarchical' => 0,
 
      // 'orderby' => 'id',
      'hide_empty'=> 0
      // 'child_of' => $cateID //Child From Boxes Category 
  );



 




  $categories = get_terms($args);


//echo get_the_term_list( null , 'rentals', '<p>', '</p><p>', '</p>');





?>

    <!-- Page Content -->
   
<?php echo do_shortcode( '[rev_slider alias="rentalslider"]' ); ?>
<div class="rental-text">
  <div class="container">
    <div class="row">
      <div class="col-12">
      <h3>Trusted Since 1976.</h3>
      <p>As the original and longest standing department of All Mobile Video, the Rentals Division personifies AMV’s approach to business. Everything we rent is carefully tested and maintained by a meticulous team of engineers and technicians. Customers are supported every step of the way from the budgeting phase, prep, and check- out straight through shoots and post production.</p>
        <p>
Since 1976, AMV Rentals has built a solid reputation as New York’s definitive source for high-end, high- quality production and editorial equipment. One call from you gets unparalleled response from us. That’s the AMV way.</p>
      </div>
    </div>
  </div>
</div>
<section class="rental-product-categories container">
<div class="row">
<div class="col-sm-12 col-md-3 col-lg-2">
 <section class="mobile-filter widget">
       <ul class="row">
       <?php foreach ($categories as $cat) { 

echo '<li><a href="../rentals/'.$cat->slug.'">'.$cat->name.'<img src="'.$cat->term_icon.'" alt=""  class="alignleft"/>'.'<br />'.'<span class="solutions">'.$cat->description.'</span>'.'</a></li>';

        };  ?>
      
       </ul>
        
    </section><!-- .filter .widget -->
 
  </div>

<div class="col-sm-12 col-md-9 col-lg-10">   
<div class="row">
 <?php 

  foreach ($categories as $cat) { ?>
 <div class=" col-sm-4 product">
<div class="imgholder mx-auto">



<?php  $myid = get_queried_object()->term_id;
 if (function_exists('z_taxonomy_image_url')){  
                         
   $valuee = z_taxonomy_image_url($cat->term_id, 'amv-slider-full');
   echo '<a href="../rentals/'.$cat->slug.'">';
      if(!empty($valuee)){ ?>
  <img class="img-responsive center-block" src="<?php echo $valuee ?>">

      <?php
      } else {
       
         echo '<img class="img-responsive center-block" src="http://via.placeholder.com/275x178">';  
       }
                               
      } ;
      echo '</a>'?>
</div>




 
       
       
        <?php echo '<a class="description" href="../rentals/'.$cat->slug.'">'.$cat->name.'<img src="'.$cat->term_icon.'" alt=""  class="alignleft"/>'.'<br />'.'<span class="solutions">'.$cat->description.'</span>'.'</a>';
        //echo '<br />';
        $args2= array("orderby"=>'name', "category" => $cat->cat_ID); // Get Post from each Sub-Category
        $posts_in_category = get_posts($args2);
        foreach($posts_in_category as $current_post) {
            echo '<span>';
            ?>
            <li type='none' style='list-style-type: none !important;'><a href="<?=$current_post->guid;?>"><?='+ '.$current_post->post_title;?></a></li>
            <?php
            echo '</span>';
        }?>
      </div><!--card-->
  <?php  }
?>
</div><!--row-->




















 
  </div>
  </div>
</section>
<section class="rental-products"> THIS IS RENTAL PRODUCTS
<?php

$the_query = new WP_Query( array(
    'post_type' => 'Adverts',
    'tax_query' => array(
        array (
            'taxonomy' => 'rentals',
            'field' => 'slug',
            'terms' => $cateID,
        )
    ),
) );

while ( $the_query->have_posts() ) :
    $the_query->the_post();
   echo the_title(); 
endwhile;

/* Restore original Post Data 
 * NB: Because we are using new WP_Query we aren't stomping on the 
 * original $wp_query and it does not need to be reset.
*/
wp_reset_postdata();






 $query = new WP_query(
    array(
        'post_type' => array('rental'),
        'post_status' => 'publish',
        'orderby' => 'title',
        'order' => 'ASC',
        'posts_per_page' => '-1',
        'taxonomy' => 'rentals',
           'field' => 'slug',
            'terms' => $cate
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
 
       
            
          </div>
        </div>


 

   
    <?php
} 





?>
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
