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
// echo 'THIS IS SUBCATEGORY INDEX';
$current = 'rentals_sub';

?>
<?php
}

else{
// echo 'THIS IS A PRODUCT INDEX';
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
echo do_shortcode( '[rev_slider alias="sales-slider"]' ); ?>

<?php

};

if ($current === 'rentals_sub' || $current === 'rentals_product'){
?>

<section class="sectionhero">
  <div class="sectionoverlay">
<div class="col-xl-6 offset-xl-3 pl-md-5 pr-md-5 sectionherotext">
    <h1>Rentals</h1>

 
 
 
   <h2><?php echo str_replace('Rental Category: ','',get_the_archive_title( )); ?></h2>

</div>
 

  </div>

</section>
<div class="rental-text">
  <div class="container">
    <div class="row">
      <div class="col-12">
    <?php echo do_shortcode( '[rev_slider alias="sales-logos"]' ); ?> 
        
      </div>
    </div>
  </div>
</div>
<?php }?>


<?php if ($current != 'rentals_product'){ ?>

 <section class="sales-product-categories container " >
  <h1 align="center">AMV Sales</h1>
<h3 class="text-center" style="padding-bottom:20px;">Featured Systems</h3>

            <div class="col-sm-12 rental-products ">
              <div class="row featured-systems">

                <div class="col-sm-3 product">
      <a href="/sales/newtek-tc-1/">
        <div class="imgholder mx-auto">

      
      <img src="/wp-content/uploads/2017/12/tc1-1-360x230.jpg" >
    
  </div>
  <header class="entry-header">
   New Tek TC1                   
    <span class="field-model">Switching, streaming, recording in UHD</span>
  </header><!-- .entry-header -->
  </a>
</div><!-- .product -->

<div class="col-sm-3 product">
      <a href="/sales/panasonic-awhe130/">
  <div class="imgholder mx-auto">

      
      <img src="/wp-content/uploads/2017/12/AWHE130-360x230.jpg" >
    
  </div>
  
  <header class="entry-header">
     Panasonic AWHE130                 <span class="field-model">Pan/Tilt/Zoom Camera</span>
    </header><!-- .entry-header -->
    </a>
    </div>
    <div class="col-sm-3 product">
       <a href="/sales/sony-bvmx300/">
  <div class="imgholder mx-auto">
   
      
      <img src="/wp-content/uploads/2017/12/BVMX300-360x230.jpg" >
    
  </div>
  
  <header class="entry-header">
  Sony BVMX300                 <span class="field-model">4K OLED master monitor </span>
    </header><!-- .entry-header -->
    </a>
    </div>
<div class="col-sm-3 product">
   <a href="/sales/sony-hxcfb80/">
  <div class="imgholder mx-auto">
   
      
      <img src="/wp-content/uploads/2017/12/Sony-HXCFB80-360x230.jpg" >
 
  </div>
  <header class="entry-header">
   Sony HXCFB80                 
    <span class="field-model">HD Portable Camera </span>
  </header><!-- .entry-header -->
     </a>
</div><!-- .product -->





     
 
 
                    
                             
                        
                                            </div><!--row-->
                                          </div>

</section>
<div class="rental-text">
  <div class="container">
    <div class="row">
      <div class="col-12">
    <?php echo do_shortcode( '[rev_slider alias="sales-logos"]' ); ?> 
        
      </div>
    </div>
  </div>
</div>

<section class="sales-icons">
  <div class="container">
    <div class="row">
      <div class="col-md-4 icon"> <img src="<?php echo get_template_directory_uri() . '/img/icon 1.png'; ?>" alt=""></div>
       <div class="col-md-4 icon"> <img src="<?php echo get_template_directory_uri() . '/img/icon 2.png'; ?>" alt=""></div>
        <div class="col-md-4 icon"> <a href="http://stores.ebay.com/AMV-Broadcast-Sales" target="_blank"><img src="<?php echo get_template_directory_uri() . '/img/icon 4.png'; ?>" alt=""></a></div>
    </div>
  </div>
</section>
<div class="container"> 
<div class="row">

  <div class="col-sm-12">
    <img style="margin:80px 0" src="<?php echo get_template_directory_uri() . '/img/comingsoon-rentals-inventory.jpg'; ?>" alt="">
  </div>
</div>
</div>
<section class="rental-product-categories container" style="display: none;">







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

    };
      if ($cateID > 0){ ?>
      <section class="rental-products">
        <div class="container">
          <div class="">

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

    <?php
    if ( have_posts() ) : ?>

      <header class="page-header"><h1 class="page-title">
        <?php
          
           echo str_replace('Rental Category: ','',get_the_archive_title( ));
           echo "</h1>";
          the_archive_description( '<div class="archive-description">', '</div>' );
        ?>
      </header><!-- .page-header -->
<div class=" ">
          <div class="row">
      <?php
      /* Start the Loop */
      while ( have_posts() ) : the_post();
 
      
      ?> 
 


<!--   <article id="post-<php the_ID(); ?>" <php post_class(); ?>> -->
 <div class="col-sm-3 product">
  <div class="imgholder mx-auto">
     <a href="<?php echo get_permalink(); ?>">
  <?php if (has_post_thumbnail()){?>
     

       <?php the_post_thumbnail( 'amv-slider-slide', [ 'class' => 'img-responsive center-block', 'title' => 'Featured image'] ); ?>

    <?php 
     }else { ?>
        <img class="img-responsive center-block" src="http://via.placeholder.com/275x178" alt="Card image cap">
        <?php 
      }
      ?>
         </a>
      </div>
       
  <header class="entry-header">

    <?php
  
  the_title( '<a class="description" href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a>' ); 
 
if (types_render_field( 'subtitle' )){ ?>
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
            <?php endif; 


    if ( 'post' === get_post_type() ) : ?>
    <div class="entry-meta">
    <?php echo get_the_date(); ?>
    </div><!-- .entry-meta -->
    <?php
    endif; ?>
  </header><!-- .entry-header -->
  <div class="entry-content">
    <?php
      excerpt('30')

       
    ?>
  </div><!-- .entry-content -->

   </div><!-- .card-->
         <?php endwhile;  ?>
<!-- </article>#post-## -->

</div>
</div><!--card-group-->




      <?php



      the_posts_navigation();

    else :

      get_template_part( 'template-parts/content', 'none' );

    endif; ?>

    </main><!-- #main -->
  </div><!-- #primary -->

  
 

 
            
          </div>
        </div>
      </section>
      <?php
      
      };
      ?>

      <?php 
      $postID = 69;
      dynamic_contact($postID) ?>
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