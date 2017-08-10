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
$args=array(
  'name' => 'rentals'
);
$output = 'objects'; // or names
$taxonomies=get_taxonomies($args,$output); 
if  ($taxonomies) {
  foreach ($taxonomies  as $taxonomy ) {
   // echo '<p>' . $taxonomy->name . '</p>';
  };
  
}
else {
    echo "<p>Didnt work</p>";
  };
 

$taxonomies = get_taxonomies(); 
foreach ( $taxonomies as $taxonomy ) {
  //  echo '<p>' . $taxonomy . '</p>';
}


$args=array(
  none, rentals
);

    $args = array(
      'taxonomy' => 'rentals',
        'hierarchical' => true,
    'depth' => 1,
      // 'orderby' => 'id',
      'hide_empty'=> 1,
      // 'child_of' => 5, //Child From Boxes Category 
  );
  $categories = get_terms($args);


//echo get_the_term_list( null , 'rentals', '<p>', '</p><p>', '</p>');


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


?>

    <!-- Page Content -->
   
<?php echo do_shortcode( '[rev_slider alias="homeslider"]' ); ?>

<section class="rental-products container">
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
 <div class="card col-sm-4">




<?php  $myid = get_queried_object()->term_id;
 if (function_exists('z_taxonomy_image_url')){  
                         
   $valuee = z_taxonomy_image_url($cat->term_id, 'amv-slider-full');
   echo '<a href="../rentals/'.$cat->slug.'">';
      if(!empty($valuee)){ ?>
  <img class="img-responsive" src="<?php echo $valuee ?>">

      <?php
      } else {
       
         echo '<img class="img-responsive" src="http://via.placeholder.com/275x178">';  
       }
                               
      }else{
        echo 'fuck';
      };
      echo '</a>'?>





 
       
       
        <?php echo '<h4 class="valignmiddle uppercase text-center card-title "><a href="../rentals/'.$cat->slug.'">'.$cat->name.'<img src="'.$cat->term_icon.'" alt=""  class="alignleft"/>'.'<br />'.'<span class="solutions">'.$cat->description.'</span>'.'</a></h4>';
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






















  < 
 
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
