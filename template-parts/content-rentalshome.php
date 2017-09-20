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
//echo '<h1>'.$cateID.'</h1>';
if ($cateID === 0){
//echo 'THIS IS RENTALS HOME';
$current = 'rentals_home';

}
elseif (get_term_children( $cateID, 'rentals' )){
//echo 'THIS IS SUBCATEGORY INDEX';
$current = 'rentals_sub';
?>
<?php
}

else{
//echo 'THIS IS A PRODUCT INDEX';
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

<?php
if ($cateID === 0){
echo do_shortcode( '[rev_slider alias="rentalslider"]' ); ?>
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
<?php

};
?>
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
            <?php echo '<a class="description" href="'.get_site_url().'/rentals/'.$cat->slug.'">'.$cat->name.'<img src="'.$cat->term_icon.'" alt=""  class="alignleft"/>'.'<br />'.'<span class="solutions">'.$cat->description.'</span>'.'</a>';
            //echo '<br />';
            $args2= array("orderby"=>'name', "category" => $cat->cat_ID); // Get Post from each Sub-Category
            $posts_in_category = get_posts($args2);



  


            ?>




            </div><!--card-->
            <?php  }
            ?>
            </div><!--row-->
          </div>
        </div>
      </section>
      <?php
      if ($cateID > 0){ ?>
      <section class="rental-products">
        <div class="container">
          <div class="col-md-4">








<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

    <?php
    if ( have_posts() ) : ?>

      <header class="page-header">
        <?php
          the_archive_title( '<h1 class="page-title">', '</h1>' );
          the_archive_description( '<div class="archive-description">', '</div>' );
        ?>
      </header><!-- .page-header -->

      <?php
      /* Start the Loop */
      while ( have_posts() ) : the_post();

        /*
         * Include the Post-Format-specific template for the content.
         * If you want to override this in a child theme, then include a file
         * called content-___.php (where ___ is the Post Format name) and that will be used instead.
         */
        get_template_part( 'template-parts/content', get_post_format() );

      endwhile;

      the_posts_navigation();

    else :

      get_template_part( 'template-parts/content', 'none' );

    endif; ?>

    </main><!-- #main -->
  </div><!-- #primary -->


<h1>The Second Loop</h1>
<hr>



           <a href="<?php echo get_permalink($post);?>" title="<?php echo the_title();?>"  >
                  <?php echo get_the_post_thumbnail($post, 'amv-isotope-image' , array( 'class' => 'img-responsive' ));?>
                  <div class="caption"><?php echo the_title() ?></div>
                  <span class="description">
                  <h5><?php echo the_title();?></h5>
                    <?php the_excerpt() ?>
                  </span>
            </a>
 


            <?php  the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' ); ?>
            
            <?php if (types_render_field( 'subtitle' )){ ?>
            <h3>
            <?php echo (types_render_field( 'subtitle' )) ?>
            </h3>
            <?php } ?>
            <?php   if (types_render_field('model')) : ?>
            <?php
            echo '<span class="field-model">Model: ';
            echo (types_render_field('model'));
            echo'</span>'
            ?>
            <?php endif; ?>
            <?php   if (types_render_field('brand')) : ?>
            <?php
            echo '<span class="field-brand">Brand: ';
            echo types_render_field('brand');
            echo'</span>'
            ?>
            <?php endif; ?>
           
            <?php   if(types_render_field('weight')) : ?>
            <?php
            echo '<span class="field-weight">Weight: ';
            echo types_render_field('weight');
            echo'</span>'
            ?>
            <?php endif; ?>
            
            <a role="button" class="btn btn-primary custom-btn contactbtn" href="#" >Contact</a>
          </div>
        </div>
      </section>
      <?php
      
      };
      ?>
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