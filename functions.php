<?php
/**
 * allmobilevideo-theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package allmobilevideo-theme
 */

if ( ! function_exists( 'allmobilevideo_theme_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function allmobilevideo_theme_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on allmobilevideo-theme, use a find and replace
	 * to change 'allmobilevideo-theme' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'allmobilevideo-theme', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

	add_image_size( 'amv-slider-image', 725, 430, true );

	add_image_size( 'amv-isotope-image', 500, 350, true );

	add_image_size( 'amv-slider-thumb', 75, 50, true );


	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'menu-1' => esc_html__( 'Primary', 'allmobilevideo-theme' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'allmobilevideo_theme_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );
}
endif;
add_action( 'after_setup_theme', 'allmobilevideo_theme_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function allmobilevideo_theme_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'allmobilevideo_theme_content_width', 640 );
}
add_action( 'after_setup_theme', 'allmobilevideo_theme_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function allmobilevideo_theme_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'allmobilevideo-theme' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'allmobilevideo-theme' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'allmobilevideo_theme_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function allmobilevideo_theme_scripts() {
	wp_enqueue_style( 'allmobilevideo-theme-style', get_stylesheet_uri() );
	wp_enqueue_script( 'allmobilevideo-theme-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );
	wp_enqueue_script( 'flexslider', get_template_directory_uri() . '/js/jquery.flexslider-min.js', array() , false, true );
	wp_enqueue_script( 'flexsettings', get_template_directory_uri() . '/js/flex-settings.js', array() , false, true );
	wp_register_script( 'imagesloaded', get_theme_file_uri( '/js/libs/imagesloaded.pkgd.min.js' ), array( 'jquery' ), '4.1.1', true );
	wp_register_script( 'isotope', get_theme_file_uri( '/js/jquery.isotope.js' ), array( 'imagesloaded' ), '3.0.1', true );
	wp_enqueue_script( 'isotope-settings-custom', get_theme_file_uri( '/js/isotope.settings-custom.js' ), array( 'isotope' ), '1.0', true );
	wp_enqueue_script( 'wow', get_template_directory_uri() . '/js/wow.min.js', array() , false, true );
	wp_enqueue_script( 'wow-settings', get_template_directory_uri() . '/js/wow-settings.js', array() , false, true );
	wp_enqueue_script( 'bootstrap-min', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '20151215', true );
		wp_enqueue_script( 'SmoothScroll', get_template_directory_uri() . '/js/SmoothScroll.js', array(), '20151215', true );

	wp_enqueue_script( 'main', get_template_directory_uri() . '/js/main.js', array(), '20151215', true );

	wp_enqueue_script( 'allmobilevideo-theme-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'allmobilevideo_theme_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

function get_term_parents( $id, $taxonomy, $link = false, $separator = '/', $nicename = false, $visited = array() ) {
    $chain = '';
    $parent = &get_term( $id, $taxonomy );
    if ( is_wp_error( $parent ) )
            return $parent;
 
    if ( $nicename )
            $name = $parent->slug;
    else
            $name = $parent->name;
 
    if ( $parent->parent && ( $parent->parent != $parent->term_id ) && !in_array( $parent->parent, $visited ) ) {
            $visited[] = $parent->parent;
            $chain .= get_term_parents( $parent->parent, $link, $separator, $nicename, $visited );
    }
 
    if ( $link )
            $chain .= '<a href="' . get_term_link( $parent->slug, $taxonomy ) . '" title="' . esc_attr( sprintf( __( "View all posts in %s" ), $parent->name ) ) . '">'.$name.'</a>' . $separator;
    else
            $chain .= $name.$separator;
 
    return $chain;
}
/* Shortcode to display linked URLs to files uploaded via Types post meta
* 
* @arg file_url optionally will hold a specific URL to process & display a link to the file directly
* with the link display being the file name & extension
* 
* @arg types_field optionally will hold the field name of a Types field for File uploads
* and dsiplay each (if multiple) as the file name with extension linked to full file download URL
*
*/
 


function amv_list_taxonomies($type, $name){
	?>
	 <li class="filter-list col-md-12 col-3 pr-md-0 pr-3">
        
         <ul class='' data-group='$type'>
            
          <?php
      
          $terms = get_terms($type);

          
            if ( !empty( $terms ) && !is_wp_error( $terms ) ) { ?>
              <h5><?php echo $name ?></h5>
              <?php
                foreach( $terms as $term) {
                    ?>
                    <li>
                        <input type='checkbox' value='.<?php echo $type . '-' . $term->slug; ?>' id='<?php echo $type . '-' . $term->slug; ?>'>
                        <label for='<?php echo $type . '-' . $term->slug; ?>'><?php echo $term->name; ?></label>
                    </li>
                    <?php
                }
            }
            ?>
             
        
        </ul>
         </li>
<?php
}
add_shortcode( 'my_file_name', 'wpml_hard_link'); // Actually activate the shortcode
function wpml_hard_link($atts) {
    global $post; // So we can get the post meta later on
 
    $url = "{$atts['file_url']}";
    $types = "wpcf-{$atts['types_field']}";
     
    if ($types) { // if the types_field argument was provided 
 
        $urls = get_post_meta($post->ID,$types); // let's get the (potentially multiple) values
     
        $content = ''; // Setting up a variable to hold the links so we can return it later
     
        foreach ($urls as $fileurl) { // Let's iterate for each of the multiple values
            $arr = explode('/',$fileurl); // Split it up so that we can just grab the end part, the filename
            $content .= '<a href="'.$fileurl.'">'.end($arr).'</a><br />'; // Create the link and store it in the $content variable
        }
         
        return $content; // Return the content as the shortcode value
     
    } else {  // Else we didn't use the fields_type argument, we just needed one URL we provided explicitly
            $arr = explode('/',$url); // So let's split that URL up so we can grab the end
            return '<a href="'.$url.'">'.end($arr).'</a>'; // And return the resultant link
     
    } // We're done!
     
}
