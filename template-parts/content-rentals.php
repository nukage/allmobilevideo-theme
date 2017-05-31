<?php
/**
 * The template for displaying archive pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package allmobilevideo-theme
 */

get_header(); 
    $cate = get_queried_object();
$cateID = $cate->term_id;
 ?>


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


 echo $cateID;
if (is_page()){
	echo 'THIS IS RENTALS HOME';
	 get_template_part( 'template-parts/content', 'rentalcategories' );
}

elseif (get_term_children( $cateID, 'rentals' )){
	echo 'THIS IS SUBCATEGORY INDEX';
	 get_template_part( 'template-parts/content', 'rentalcategories' );
?>

<?php 

}
 
else{
	echo 'THIS IS A PRODUCT INDEX';


};
?>
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
