<?php
/**
 * The template for displaying archive pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package allmobilevideo-theme
 */

get_header(); ?>

	<div id="primary" class="content-area container">
		<main id="main" class="site-main" role="main">

		<?php 
$args=array(
  'name' => 'rentals'
);
$output = 'objects'; // or names
$taxonomies=get_taxonomies($args,$output); 
if  ($taxonomies) {
  foreach ($taxonomies  as $taxonomy ) {
    echo '<p>' . $taxonomy->name . '</p>';
  };
  
}
else {
  	echo "<p>Didnt work</p>";
  };
?>


<?php

$taxonomies = get_taxonomies(); 
foreach ( $taxonomies as $taxonomy ) {
    echo '<p>' . $taxonomy . '</p>';
}


$args=array(
  none, rentals
);

echo get_the_term_list( null , 'rentals', '<p>', '</p><p>', '</p>');

?>

<div class="row">
 <?php 
    $args = array(
    	'taxonomy' => 'rentals',
    	  'hierarchical' => true,
    'depth' => 1,
      // 'orderby' => 'id',
      'hide_empty'=> 1,
      // 'child_of' => 5, //Child From Boxes Category 
  );
  $categories = get_terms($args);
  foreach ($categories as $cat) { ?>
 <div class="card col-sm-4">
 <?php
  	if (function_exists('z_taxonomy_image')) {
  		 
  		
  	 
  			$attr = array(
  			'class' => 'img-responsive, card-img-top',
  			);
  		z_taxonomy_image($cat->term_id, 'full', $attr);
  		 
 
 
  	};?>
  		 
       
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
		<?php
		if ( have_posts() ) : ?>
			<div class="row">
			<header class="page-header">
				<?php
					the_archive_title( '<h1 class="page-title">', '</h1>' );
					the_archive_description( '<div class="archive-description">', '</div>' );
				?>
			</header><!-- .page-header -->
</div>
<div class="row">
			<?php
			/* Start the Loop */
			while ( have_posts() ) : the_post(); ?>
				

			<?php
				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', 'rental' ); ?>
				


			<?php endwhile; ?>
</div>
			<?php the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();