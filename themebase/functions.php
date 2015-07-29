<?php
/**
 * themebase functions and definitions
 *
 * @package themebase
 */

if ( ! function_exists( 'themebase_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function themebase_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on themebase, use a find and replace
	 * to change 'themebase' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'themebase', get_template_directory() . '/languages' );

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
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary Menu', 'themebase' ),
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

	/*
	 * Enable support for Post Formats.
	 * See http://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'themebase_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif; // themebase_setup
add_action( 'after_setup_theme', 'themebase_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function themebase_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'themebase_content_width', 640 );
}
add_action( 'after_setup_theme', 'themebase_content_width', 0 );

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function themebase_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'themebase' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
    
    register_sidebar( array(
		'name'          => esc_html__( 'Sidebar2', 'themebase' ),
		'id'            => 'sidebar-2',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
    
    register_sidebar( array(
		'name'          => esc_html__( 'Sidebar3', 'themebase' ),
		'id'            => 'sidebar-3',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
    
    register_sidebar( array(
		'name'          => esc_html__( 'About', 'themebase' ),
		'id'            => 'about',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
    
    register_sidebar( array(
		'name'          => esc_html__( 'Excess', 'themebase' ),
		'id'            => 'excess',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
    
    register_sidebar( array(
		'name'          => esc_html__( 'Content-bottom', 'themebase' ),
		'id'            => 'content-bottom',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
    
    register_sidebar( array(
		'name'          => esc_html__( 'Content-abstract', 'themebase' ),
		'id'            => 'content-abstract',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
    
    register_sidebar( array(
		'name'          => esc_html__( 'About-largeright', 'themebase' ),
		'id'            => 'about-largeright',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
    
    register_sidebar( array(
		'name'          => esc_html__( 'Excess-largeright', 'themebase' ),
		'id'            => 'excess-largeright',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
    
    register_sidebar( array(
		'name'          => esc_html__( 'Search-manytiles', 'themebase' ),
		'id'            => 'search-manytiles',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
    
    register_sidebar( array(
		'name'          => esc_html__( 'Bottom-manytiles', 'themebase' ),
		'id'            => 'bottom-manytiles',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
}
add_action( 'widgets_init', 'themebase_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function themebase_scripts() {
	wp_enqueue_style( 'themebase-style', get_stylesheet_uri() );
    
    wp_enqueue_style( 'style-layoutleft', get_template_directory_uri() . '/layouts/css/style-layoutleft.css' );
    wp_enqueue_style( 'style-layoutright', get_template_directory_uri() . '/layouts/css/style-layoutright.css' );
    wp_enqueue_style( 'style-layouttop', get_template_directory_uri() . '/layouts/css/style-layouttop.css' );
    wp_enqueue_style( 'style-layoutmid', get_template_directory_uri() . '/layouts/css/style-layoutmid.css' );
    wp_enqueue_style( 'style-layoutcenter', get_template_directory_uri() . '/layouts/css/style-layoutcenter.css' );
    wp_enqueue_style( 'style-layoutabstract', get_template_directory_uri() . '/layouts/css/style-layoutabstract.css' );
    wp_enqueue_style( 'style-layouttiles', get_template_directory_uri() . '/layouts/css/style-layouttiles.css' );
    wp_enqueue_style( 'style-layoutlargeright', get_template_directory_uri() . '/layouts/css/style-layoutlargeright.css' );
    wp_enqueue_style( 'style-layoutmanytiles', get_template_directory_uri() . '/layouts/css/style-layoutmanytiles.css' );
    
	wp_enqueue_script( 'themebase-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );
	
    wp_enqueue_script( 'themebase-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
    
    wp_enqueue_script( 'themebase-bigtiles-js', get_template_directory_uri() . '/js/bigtiles.js', array(), '', true );
}
add_action( 'wp_enqueue_scripts', 'themebase_scripts' );



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



// register skn-admin options
    add_action( 'admin_menu', 'admin_base_theme' );

/** 
  * skn-admin function
  * add_menu_page( $page_title, $menu_title, $capability, $menu_slug, $function, $icon_url, $position ); ?>
  */
function admin_base_theme() {
    add_menu_page( 'A.D.A.M. Options', 'A.D.A.M. Options', 'manage_options', 'admin_base_theme', 'admin_base_theme_options', '', 21 );
}

// Function to display custom skn-admin html
function admin_base_theme_options() {
    if ( !current_user_can( 'manage_options' ) ) {
            wp_die( __( 'You do not have the required permissions to access this knowledge' ) );
    }
    
    $logo_img = get_option( 'logo_img' ) ? get_the_guid( get_option( 'logo_img' ) ) : '';
    $favicon_img = get_option( 'favicon_img' ) ? get_the_guid( get_option( 'favicon_img' ) ) : '';
    $title_tag = get_option( 'title_tag' ) ? get_the_guid( get_option( 'title_tag' ) ) : '';
    $meta_tag = get_option( 'meta_tag' ) ? get_the_guid( get_option( 'meta_tag' ) ) : '';
    $home_tag = get_option( 'site_title' ) ? get_the_guid( get_option( 'site_title' ) ) : '';
    $layout_main = get_option( 'layout_main' ) ? get_the_guid( get_option( 'layout_main' ) ) : '';
    ?>

    <div id="response"></div>
    <form action="#" id="adminForm">
        <div class="adminform">

            <fieldset>
                
                <legend>Logo and Favicon</legend>
                
                    <h4>Logo:</h4>
                    <br />
                    <input id="logo_img" type="text" value="<?php echo $logo_img ? $logo_img : ''; ?>" disabled />
                    <input type="hidden" id="logo_img_id" name="logo_img" value="<?php echo get_option('logo_img') ? get_option('logo_img') : ''; ?>" />
                    <br />
                    <div class="optbtn">
                        <input class="reset" reset-id="logo_img" type="button" name="resetbtn" value="Reset" />               
                        <input type="button" name="uploadbtn" value="Upload" class="upload_image_button" upload-id="logo_img" />
                    </div>
                    <br />
                
                    <h4>Favicon:</h4>
                    <br />
                    <input id="favicon_img" type="text" value="<?php echo $favicon_img ? $favicon_img : ''; ?>" disabled />
                    <input type="hidden" id="favicon_img_id" name="favicon_img" value="<?php echo get_option('favicon_img') ? get_option('favicon_img') : ''; ?>" />
                    <br />
                    <div class="optbtn">
                        <input class="reset" reset-id="favicon_img" type="button" name="resetbtn" value="Reset" />               
                        <input type="button" name="uploadbtn" value="Upload" class="upload_image_button" upload-id="favicon_img" />
                    </div>
                    <br />
            </fieldset>
            
            <fieldset>
                <legend>Title and Meta Tags</legend>
                    <h4> Site Title:</h4>
                    <br />
                    <input type="text" name="site_title" class="admin_input" value="<?php echo get_option( 'site_title' ) ? get_option( 'site_title' ) : ''; ?>"/>
                    <br />
                    <h4>Title Tag:</h4>
                    <br />
                    <input type="text" name="title_tag" class="admin_input" value="<?php echo get_option( 'title_tag' ) ? get_option( 'title_tag' ) : ''; ?>"/>
                    <br />
                    <h4>Meta Tag:</h4>
                    <br />
                    <input type="text" name="meta_tag" class="admin_input" value="<?php echo get_option( 'meta_tag' ) ? get_option( 'meta_tag' ) : ''; ?>"/>
                    <br />
            </fieldset>
            
            <fieldset>
                <legend>Site Layout</legend>
                    <h4>Blog layout:</h4>
                    <br />
                    <select class="admin_layout" name="layout_main">
                        <option selected value="<?php echo get_option( 'layout_main' ) ? get_option( 'layout_main' ) : ''; ?>"><?php echo get_option( 'layout_main' ) ?></option>
                        <option value="Content-left">Content-Left</option>
                        <option value="Content-right">Content-Right</option>
                        <option value="Content-top">Content-Top</option>
                        <option value="Content-mid">Content-Mid</option>
                        <option value="Content-center">Content-Center</option>
                        <option value="Content-abstract">Content-Abstract</option>
                        <option value="Content-tiles">Content-Tiles</option> 
                        <option value="Content-largeright">Content-Largeright</option>
                        <option value="Content-manytiles">Content-Manytiles</option>
                    </select>
                    <br />
            </fieldset>
          <?php wp_nonce_field( 'admin_base_theme_handler', '_skin_walker' ); ?>
            
            <div class="adminsave">
                <input type="button" name="savebtn" value="Submit" id="admin_base_theme_submit"/>
            </div>

        </div>
    </form>
    <?php  
}

// register admin_base_theme stylesheet
add_action( 'admin_enqueue_scripts', 'admin_base_theme_styles' );

// call admin_base_theme stylsheet
function admin_base_theme_styles() {
    if ( 'admin_base_theme' == $_GET[ 'page' ] ) {
        wp_enqueue_media();
        wp_register_style( 'admin_base_theme_css', get_template_directory_uri() . '/css/admin_base_theme.css' );
        wp_enqueue_style( 'admin_base_theme_css' );
        wp_register_script( 'admin_base_theme_handler-js', get_template_directory_uri() . '/js/admin_base_theme.js' );
        wp_enqueue_script( 'admin_base_theme_handler-js' );
    }
}

add_action( 'wp_enqueue_scripts', 'custom_post_styles' );

function custom_post_styles() {
        wp_register_style( 'custom_post_styles_css', get_template_directory_uri() . '/css/custom_post_styles.css' );
        wp_enqueue_style( 'custom_post_styles_css' );
}


add_action( 'wp_ajax_admin_base_theme_handler', 'admin_base_theme_handler' );

function admin_base_theme_handler() {
    if( isset( $_POST[ '_skin_walker' ] ) && wp_verify_nonce( $_POST[ '_skin_walker' ], 'admin_base_theme_handler' ) ) {
        unset( $_POST[ 'action' ] );
        unset( $_POST[ '_skin_walker' ] );
        unset( $_POST[ '_wp_http_referer' ] );
        if ( $_POST[ 'author_nickname' ] ) {
            wp_update_user( array( 'ID' => 1, 'user_nicename' => $_POST[ 'author_nickname' ], 'display_name' => $_POST[ 'author_nickname' ], 'nickname' => $_POST[ 'author_nickname' ] ));
            update_user_meta( 1, 'nickname',  $_POST[ 'author_nickname' ]);
            unset( $_POST[ 'author_nickname' ] );
        }
        $options = array();
        $option_data = '<p>These options were not updated:<br />';
        foreach ( $_POST as $k => $v ) {
            if ( update_option( $k, $v ) ) {
                array_push( $options, true );
            } else {
                array_push( $options, false );
                $option_data .= "$k: $v <br /> ";
            }
        }
        if ( in_array( $options, false ) ) {
            echo $option_data . '</p>';
        } else { 
            echo '<p>Options have updated successfully</p>';
        }
    } else {
        echo '<p>Authentication Failed</p>';
    }
    die();
}

add_action( 'wp_head', 'prefix_meta_tag' );

function prefix_meta_tag() {
   echo '<meta name="description" content="' . get_option( 'meta_tag' ) . '" />';
}


/**
 * Global variables for layouts.
 */

$layout = get_option( 'layout_main' );
$layoutleft = 'Content-left';
$layoutright = 'Content-right';
$layouttop = 'Content-top';
$layoutmid = 'Content-mid';
$layoutcenter = 'Content-center';
$layoutabstract = 'Content-abstract';
$layouttiles = 'Content-tiles';
$layoutlargeright = 'Content-largeright';
$layoutmanytiles = 'Content-manytiles';