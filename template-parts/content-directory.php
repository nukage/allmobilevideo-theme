<?php
/**
 * Template part for displaying the directory

 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package allmobilevideo-theme
 */


		 


?>


    <!-- Page Content -->
   <div class="col-lg-4 rtborder"></div>
    <div class="col-lg-4 rtborder">
     <?php the_field('main_text');  ?>
    </div>
     <div class="col-lg-4 "></div>
<div class="col-lg-4 rtborder">

<?php while( have_rows('contact_group_col1') ): the_row();  

the_sub_field('contact_section_text');

endwhile; ?>
 
</div>
<div class="col-lg-4 rtborder">
<?php while( have_rows('contact_group_col2') ): the_row();  

the_sub_field('contact_section_text');

endwhile; ?>
</div>
<div class="col-lg-4 nortborder">
<?php while( have_rows('contact_group_col3') ): the_row();  

the_sub_field('contact_section_text');

endwhile; ?>
</div>
