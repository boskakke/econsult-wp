<?php

namespace App;

use Roots\Sage\Container;
use Roots\Sage\Assets\JsonManifest;
use Roots\Sage\Template\Blade;
use Roots\Sage\Template\BladeProvider;





/**
 * Theme assets
 */
add_action('wp_enqueue_scripts', function () {
    wp_enqueue_style('sage/main.css', asset_path('styles/main.css'), false, null);
    wp_enqueue_style('sage/googlefonts', 'https://fonts.googleapis.com/css2?family=Rubik:wght@400;500;700&display=swap', false, null);
    wp_enqueue_script('sage/main.js', asset_path('scripts/main.js'), ['jquery'], null, true);
}, 100);

/**
 * Theme setup
 */
add_action('after_setup_theme', function () {
    /**
     * Enable features from Soil when plugin is activated
     * @link https://roots.io/plugins/soil/
     */
    add_theme_support('soil-clean-up');
    add_theme_support('soil-jquery-cdn');
    add_theme_support('soil-nav-walker');
    add_theme_support('soil-nice-search');
    add_theme_support('soil-relative-urls');

    /**
     * Enable plugins to manage the document title
     * @link https://developer.wordpress.org/reference/functions/add_theme_support/#title-tag
     */
    add_theme_support('title-tag');

    /**
     * Register navigation menus
     * @link https://developer.wordpress.org/reference/functions/register_nav_menus/
     */
    register_nav_menus([
        'primary_navigation' => __('Primary Navigation', 'sage')
    ]);

    /**
     * Enable post thumbnails
     * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
     */
    add_theme_support('post-thumbnails');

    /**
     * Enable HTML5 markup support
     * @link https://developer.wordpress.org/reference/functions/add_theme_support/#html5
     */
    add_theme_support('html5', ['caption', 'comment-form', 'comment-list', 'gallery', 'search-form']);

    /**
     * Enable selective refresh for widgets in customizer
     * @link https://developer.wordpress.org/themes/advanced-topics/customizer-api/#theme-support-in-sidebars
     */
    add_theme_support('customize-selective-refresh-widgets');

    /**
     * Use main stylesheet for visual editor
     * @see resources/assets/styles/layouts/_tinymce.scss
     */
    add_editor_style(asset_path('styles/main.css'));
}, 20);

/**
 * Register sidebars
 */
add_action('widgets_init', function () {
    $config = [
    'before_widget' => '<section class="widget %1$s %2$s">',
    'after_widget'  => '</section>',
    'before_title'  => '<h3 class="footer__header">',
    'after_title'   => '</h3>'
    ];
    $configMobileNav = [
    'before_widget' => '',
    'after_widget'  => '',
    'before_title'  => '',
    'after_title'   => ''
    ];
    register_sidebar([
    'name'          => __('Footer-1', 'sage'),
    'id'            => 'sidebar-footer-1'
    ] + $config);
  register_sidebar([
    'name'          => __('Footer-2', 'sage'),
    'id'            => 'sidebar-footer-2'
    ] + $config);
  register_sidebar([
    'name'          => __('Footer-3', 'sage'),
    'id'            => 'sidebar-footer-3'
    ] + $config);
  register_sidebar([
    'name'          => __('Footer-4', 'sage'),
    'id'            => 'sidebar-footer-4'
    ] + $config);
  register_sidebar([
    'name'          => __('Sidebar', 'sage'),
    'id'            => 'sidebar-other',
    'before_widget' => '<section class="sidebar__widget %1$s %2$s">',
    'after_widget'  => '</section>',
    'before_title'  => '<h3 class="sidebar__header">',
    'after_title'   => '</h3>']);
  register_sidebar([
    'name'          => __('Kontakt', 'sage'),
    'id'            => 'contact',
    'before_widget' => '<section class="sidebar__contact %1$s %2$s">',
    'after_widget'  => '</section>',
    'before_title'  => '<h3 class="section__header">',
    'after_title'   => '</h3>']);

   register_sidebar([
    'name'          => __('MobileNavTop', 'sage'),
    'id'            => 'sidebar-mobile-nav-top'
    ] + $configMobileNav);
   register_sidebar([
    'name'          => __('MobileNavBottom', 'sage'),
    'id'            => 'sidebar-mobile-nav-bottom'
    ] + $configMobileNav);
});

/**
 * Updates the `$post` variable on each iteration of the loop.
 * Note: updated value is only available for subsequently loaded views, such as partials
 */
add_action('the_post', function ($post) {
    sage('blade')->share('post', $post);
});

/**
 * Setup Sage options
 */
add_action('after_setup_theme', function () {
    /**
     * Add JsonManifest to Sage container
     */
    sage()->singleton('sage.assets', function () {
        return new JsonManifest(config('assets.manifest'), config('assets.uri'));
    });

    /**
     * Add Blade to Sage container
     */
    sage()->singleton('sage.blade', function (Container $app) {
        $cachePath = config('view.compiled');
        if (!file_exists($cachePath)) {
            wp_mkdir_p($cachePath);
        }
        (new BladeProvider($app))->register();
        return new Blade($app['view']);
    });

    /**
     * Create @asset() Blade directive
     */
    sage('blade')->compiler()->directive('asset', function ($asset) {
        return "<?= " . __NAMESPACE__ . "\\asset_path({$asset}); ?>";
    });
});


function custom_post_type() {

// Set UI labels for Custom Post Type
    $labels = array(
        'name'                => _x( 'Cases', 'Post Type General Name', 'sage' ),
        'singular_name'       => _x( 'Case', 'Post Type Singular Name', 'sage' ),
        'menu_name'           => __( 'Cases', 'sage' ),
        'parent_item_colon'   => __( 'Parent Case', 'sage' ),
        'all_items'           => __( 'Alle Cases', 'sage' ),
        'view_item'           => __( 'Se Case', 'sage' ),
        'add_new_item'        => __( 'Tilføj ny case', 'sage' ),
        'add_new'             => __( 'Tilføj ny', 'sage' ),
        'edit_item'           => __( 'Ret case', 'sage' ),
        'update_item'         => __( 'Opdater case', 'sage' ),
        'search_items'        => __( 'Søg case', 'sage' ),
        'not_found'           => __( 'Ikke fundet', 'sage' ),
        'not_found_in_trash'  => __( 'Ikke fundet i skraldespanden', 'sage' ),
    );

// Set other options for Custom Post Type

    $args = array(
        'label'               => __( 'cases', 'sage' ),
        'description'         => __( 'Cases for e-consult', 'sage' ),
        'labels'              => $labels,
        // Features this CPT supports in Post Editor
        'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'revisions', 'custom-fields' ),
        // You can associate this CPT with a taxonomy or custom taxonomy.
        'taxonomies'          => array( 'cases' ),
        /* A hierarchical CPT is like Pages and can have
        * Parent and child items. A non-hierarchical CPT
        * is like Posts.
        */
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'page',
    );

    // Registering your Custom Post Type
    register_post_type( 'cases', $args );

}

/* Hook into the 'init' action so that the function
* Containing our post type registration is not
* unnecessarily executed.
*/

add_action( 'init', __NAMESPACE__ . '\\custom_post_type', 0 );

if( function_exists('acf_add_options_page') ) {
    acf_add_options_page();
}

add_image_size( 'hero_lg', 1420, 1420 * .42, true );
add_image_size( 'hero_md', 1200, 1200 * .42, true );
add_image_size( 'hero_sm', 800, 800 * .42, true );
add_image_size( 'hero', 1000, 1000, true );
add_image_size( 'case', 400, 400, true );
add_image_size( 'case-sm', 300, 300, true );
add_image_size( 'case-lg', 1900, 9999, false );
add_image_size( 'teaser', 800, 500, true );
add_image_size( 'teaser-sm', 600, 600 * .625, true );
add_image_size( 'staff', 400, 400, array( 'center', 'top' ));


function wpdocs_custom_excerpt_length( $length ) {
    return 20;
}
add_filter( 'excerpt_length', __NAMESPACE__ . '\\wpdocs_custom_excerpt_length', 999 );


// allow svg files to be uploaded
function cc_mime_types($mimes) {
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter('upload_mimes', __NAMESPACE__ . '\\cc_mime_types');
