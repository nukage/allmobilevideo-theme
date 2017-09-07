<?php
/**
 * The template for displaying the contact page
 * Template Name: Contact
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package allmobilevideo-theme
 */

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
			 

get_header(); ?>
<div id="primary" class="content-area container">
	<main id="main" class="site-main" role="main">
		<section class="sectionhero">
			<div class="sectionoverlay row">
				<div class="col-md-6">
					<h1>Contact Us</h1>
					<ul>
						<li>(212) 727-1234</li>
						<li>contact@amvchelsea.com</li>
						<li>(212) 255-6644</li>
					</ul>
					MAP GOES HERE...
				</div>
				<div class="col-md-6">
					<h2>Send us a Message</h2>
					<p>Simply fill out the quick form below with your contact info and a member of our team will be back in touch with you ASAP, usually within 1 business day. Thank you for visiting us.</p>




					<?php
			while ( have_posts() ) : the_post();  ?>

				<div class="entry-content">
						<?php
							the_content();
							wp_link_pages( array(
								'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'allmobilevideo-theme' ),
								'after'  => '</div>',
							) );
						?>
						</div><!-- .entry-content --> <?php

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>

					</div>
					
				</div>
			</section>

<section id="directory">
	<h2>Directory</h2>
      <?php get_template_part( 'template-parts/content', 'directory' ); ?>
	
</section>
			</main><!-- #main -->
			</div><!-- #primary -->
			<?php
			
			get_footer();
			?>