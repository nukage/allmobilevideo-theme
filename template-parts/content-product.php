<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package allmobilevideo-theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
 





	<section class="product-top">
	<div class="container">
		<h1>Mobile</h1>
		<div class="product-hero row">
			<div class="col-8"> <?php echo get_the_post_thumbnail($post, 'amv-slider-image' , array( 'class' => 'img-responsive' ));?></div>
			<div class="col-4">
				<h2><?php the_title( '<h1 class="entry-title">', '</h1>' ); ?></h2>
				<h3>Subtitle</h3>
			</div>
		</div>
		</div>
	</section>
<div class="bluebar">
	<div class="container">
		<div class="row">
			<div class="col-4">Contact</div>
			<div class="col-8">General Information | FAQ | Virtual Tour</div>
		</div>
	</div>
</div>

	<section class="entry-content">
	<div class="container">
	<div class="row">
	<div class="col-4">
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
	<div class="col-8">
		<?php
			the_content();

			 
		?></div></div>
		</div>
	</section><!-- .entry-content -->

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
</article><!-- #post-## -->
