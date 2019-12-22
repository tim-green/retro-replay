<?php
if ( ! class_exists( 'Kirki' ) ) {
	return;
}

/*  Add Config
/* ------------------------------------ */
Kirki::add_config( 'retro', array(
	'capability'    => 'edit_theme_options',
	'option_type'   => 'theme_mod',
) );

/*  Add Links
/* ------------------------------------ */
Kirki::add_section( 'morelink', array(
	'title'       => esc_html__( 'Retro Options', 'retro' ),
	'type'        => 'link',
	'button_text' => esc_html__( 'View More Themes', 'retro' ),
	'button_url'  => 'https://www.timgreen.ws/retro-replay/',
	'priority'    => 13,
) );
Kirki::add_section( 'reviewlink', array(
	'title'       => esc_html__( 'Like This Theme?', 'retro' ),
	'panel'       => 'options',
	'type'        => 'link',
	'button_text' => esc_html__( 'Write a Review', 'retro' ),
	'button_url'  => 'https://wordpress.org/support/theme/retro/reviews/?filter=5#new-post',
	'priority'    => 1,
) );

/*  Add Panels
/* ------------------------------------ */
Kirki::add_panel( 'options', array(
    'priority'    => 10,
    'title'       => esc_html__( 'Theme Options', 'retro' ),
) );

/*  Add Sections
/* ------------------------------------ */
Kirki::add_section( 'general', array(
    'priority'    => 10,
    'title'       => esc_html__( 'General', 'retro' ),
	'panel'       => 'options',
) );
Kirki::add_section( 'blog', array(
    'priority'    => 20,
    'title'       => esc_html__( 'Blog', 'retro' ),
	'panel'       => 'options',
) );
Kirki::add_section( 'header', array(
    'priority'    => 30,
    'title'       => esc_html__( 'Header', 'retro' ),
	'panel'       => 'options',
) );
Kirki::add_section( 'footer', array(
    'priority'    => 40,
    'title'       => esc_html__( 'Footer', 'retro' ),
	'panel'       => 'options',
) );
Kirki::add_section( 'layout', array(
    'priority'    => 50,
    'title'       => esc_html__( 'Layout', 'retro' ),
	'panel'       => 'options',
) );
Kirki::add_section( 'sidebars', array(
    'priority'    => 60,
    'title'       => esc_html__( 'Sidebars', 'retro' ),
	'panel'       => 'options',
) );
Kirki::add_section( 'social', array(
    'priority'    => 70,
    'title'       => esc_html__( 'Social Links', 'retro' ),
	'panel'       => 'options',
) );
Kirki::add_section( 'styling', array(
    'priority'    => 80,
    'title'       => esc_html__( 'Styling', 'retro' ),
	'panel'       => 'options',
) );

/*  Add Fields
/* ------------------------------------ */

// General: Responsive Layout
Kirki::add_field( 'retro_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'responsive',
	'label'			=> esc_html__( 'Responsive Layout', 'retro' ),
	'description'	=> esc_html__( 'Mobile and tablet optimizations (responsive.css)', 'retro' ),
	'section'		=> 'general',
	'default'		=> 'on',
) );
// General: Mobile Sidebar
Kirki::add_field( 'retro_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'mobile-sidebar-hide',
	'label'			=> esc_html__( 'Mobile Sidebar Content', 'retro' ),
	'description'	=> esc_html__( 'Sidebar content on low-resolution mobile devices (320px)', 'retro' ),
	'section'		=> 'general',
	'default'		=> 'on',
) );
// General: Recommended Plugins
Kirki::add_field( 'retro_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'recommended-plugins',
	'label'			=> esc_html__( 'Recommended Plugins', 'retro' ),
	'description'	=> esc_html__( 'Enable or disable the recommended plugins notice', 'retro' ),
	'section'		=> 'general',
	'default'		=> 'on',
) );
// Blog: Blog Layout
Kirki::add_field( 'retro_theme', array(
	'type'			=> 'radio',
	'settings'		=> 'blog-layout',
	'label'			=> esc_html__( 'Blog Layout', 'retro' ),
	'section'		=> 'blog',
	'default'		=> 'blog-list',
	'choices'		=> array(
		'blog-standard'	=> esc_html__( 'Standard', 'retro' ),
		'blog-list'		=> esc_html__( 'List', 'retro' ),
	),
) );
// Blog: Heading
Kirki::add_field( 'retro_theme', array(
	'type'			=> 'text',
	'settings'		=> 'blog-heading',
	'label'			=> esc_html__( 'Heading', 'retro' ),
	'description'	=> esc_html__( 'Your blog heading', 'retro' ),
	'section'		=> 'blog',
	'default'		=> '',
) );
// Blog: Subheading
Kirki::add_field( 'retro_theme', array(
	'type'			=> 'text',
	'settings'		=> 'blog-subheading',
	'label'			=> esc_html__( 'Subheading', 'retro' ),
	'description'	=> esc_html__( 'Your blog subheading', 'retro' ),
	'section'		=> 'blog',
	'default'		=> '',
) );
// Blog: Excerpt Length
Kirki::add_field( 'retro_theme', array(
	'type'			=> 'slider',
	'settings'		=> 'excerpt-length',
	'label'			=> esc_html__( 'Excerpt Length', 'retro' ),
	'description'	=> esc_html__( 'Max number of words. Set it to 0 to disable.', 'retro' ),
	'section'		=> 'blog',
	'default'		=> '26',
	'choices'     => array(
		'min'	=> '0',
		'max'	=> '100',
		'step'	=> '1',
	),
) );
// Blog: Featured Posts Include
Kirki::add_field( 'retro_theme', array(
	'type'			=> 'checkbox',
	'settings'		=> 'featured-posts-include',
	'label'			=> esc_html__( 'Featured Posts', 'retro' ),
	'description'	=> esc_html__( 'To show featured posts in the slider AND the content below. Usually not recommended.', 'retro' ),
	'section'		=> 'blog',
	'default'		=> false,
) );
// Blog: Featured Category
Kirki::add_field( 'retro_theme', array(
	'type'			=> 'select',
	'settings'		=> 'featured-category',
	'label'			=> esc_html__( 'Featured Category', 'retro' ),
	'description'	=> esc_html__( 'By not selecting a category, it will show your latest post(s) from all categories', 'retro' ),
	'section'		=> 'blog',
	'default'		=> '',
	'choices'		=> Kirki_Helper::get_terms( 'category' ),
	'placeholder'	=> esc_html__( 'Select a category', 'retro' ),
) );
// Blog: Featured Post Count
Kirki::add_field( 'retro_theme', array(
	'type'			=> 'slider',
	'settings'		=> 'featured-posts-count',
	'label'			=> esc_html__( 'Featured Post Count', 'retro' ),
	'description'	=> esc_html__( 'Max number of featured posts to display. Set it to 0 to disable', 'retro' ),
	'section'		=> 'blog',
	'default'		=> '0',
	'choices'     => array(
		'min'	=> '0',
		'max'	=> '10',
		'step'	=> '1',
	),
) );
// Blog: Frontpage Widgets Top
Kirki::add_field( 'retro_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'frontpage-widgets-top',
	'label'			=> esc_html__( 'Frontpage Widgets Top', 'retro' ),
	'description'	=> esc_html__( '2 columns of widgets', 'retro' ),
	'section'		=> 'blog',
	'default'		=> 'off',
) );
// Blog: Frontpage Widgets Bottom
Kirki::add_field( 'retro_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'frontpage-widgets-bottom',
	'label'			=> esc_html__( 'Frontpage Widgets Bottom', 'retro' ),
	'description'	=> esc_html__( '2 columns of widgets', 'retro' ),
	'section'		=> 'blog',
	'default'		=> 'off',
) );
// Blog: Comment Count
Kirki::add_field( 'retro_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'comment-count',
	'label'			=> esc_html__( 'Comment Count', 'retro' ),
	'section'		=> 'blog',
	'default'		=> 'on',
) );
// Blog: Post Format Icon
Kirki::add_field( 'retro_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'format-icon',
	'label'			=> esc_html__( 'Post Format Icons', 'retro' ),
	'description'	=> esc_html__( 'Icons bottom right corner', 'retro' ),
	'section'		=> 'blog',
	'default'		=> 'on',
) );
// Blog: Single - Authorbox
Kirki::add_field( 'retro_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'author-bio',
	'label'			=> esc_html__( 'Single - Author Bio', 'retro' ),
	'description'	=> esc_html__( 'Shows post author description, if it exists', 'retro' ),
	'section'		=> 'blog',
	'default'		=> 'on',
) );
// Blog: Single - Related Posts
Kirki::add_field( 'retro_theme', array(
	'type'			=> 'radio',
	'settings'		=> 'related-posts',
	'label'			=> esc_html__( 'Single - Related Posts', 'retro' ),
	'description'	=> esc_html__( 'Shows randomized related articles below the post', 'retro' ),
	'section'		=> 'blog',
	'default'		=> 'categories',
	'choices'		=> array(
		'disable'	=> esc_html__( 'Disable', 'retro' ),
		'categories'=> esc_html__( 'Related by categories', 'retro' ),
		'tags'		=> esc_html__( 'Related by tags', 'retro' ),
	),
) );
// Blog: Single - Post Navigation
Kirki::add_field( 'retro_theme', array(
	'type'			=> 'radio',
	'settings'		=> 'post-nav',
	'label'			=> esc_html__( 'Single - Post Navigation', 'retro' ),
	'description'	=> esc_html__( 'Shows links to the next and previous article', 'retro' ),
	'section'		=> 'blog',
	'default'		=> 's1',
	'choices'		=> array(
		'disable'	=> esc_html__( 'Disable', 'retro' ),
		's1'		=> esc_html__( 'Sidebar Primary', 'retro' ),
		'content'	=> esc_html__( 'Below content', 'retro' ),
	),
) );
// Header: Search
Kirki::add_field( 'retro_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'header-search',
	'label'			=> esc_html__( 'Header Search', 'retro' ),
	'description'	=> esc_html__( 'Header search button', 'retro' ),
	'section'		=> 'header',
	'default'		=> 'on',
) );
// Header: Social Links
Kirki::add_field( 'retro_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'header-social',
	'label'			=> esc_html__( 'Header Social Links', 'retro' ),
	'description'	=> esc_html__( 'Social link icon buttons', 'retro' ),
	'section'		=> 'header',
	'default'		=> 'on',
) );
// Footer: Ads
Kirki::add_field( 'retro_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'footer-ads',
	'label'			=> esc_html__( 'Footer Ads', 'retro' ),
	'description'	=> esc_html__( 'Footer widget ads area', 'retro' ),
	'section'		=> 'footer',
	'default'		=> 'off',
) );
// Footer: Widget Columns
Kirki::add_field( 'retro_theme', array(
	'type'			=> 'radio-image',
	'settings'		=> 'footer-widgets',
	'label'			=> esc_html__( 'Footer Widget Columns', 'retro' ),
	'description'	=> esc_html__( 'Select columns to enable footer widgets. Recommended number: 3', 'retro' ),
	'section'		=> 'footer',
	'default'		=> '0',
	'choices'     => array(
		'0'	=> get_template_directory_uri() . '/functions/images/layout-off.png',
		'1'	=> get_template_directory_uri() . '/functions/images/footer-widgets-1.png',
		'2'	=> get_template_directory_uri() . '/functions/images/footer-widgets-2.png',
		'3'	=> get_template_directory_uri() . '/functions/images/footer-widgets-3.png',
		'4'	=> get_template_directory_uri() . '/functions/images/footer-widgets-4.png',
	),
) );
// Footer: Social Links
Kirki::add_field( 'retro_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'footer-social',
	'label'			=> esc_html__( 'Footer Social Links', 'retro' ),
	'description'	=> esc_html__( 'Social link icon buttons', 'retro' ),
	'section'		=> 'footer',
	'default'		=> 'on',
) );
// Footer: Custom Logo
Kirki::add_field( 'retro_theme', array(
	'type'			=> 'image',
	'settings'		=> 'footer-logo',
	'label'			=> esc_html__( 'Footer Logo', 'retro' ),
	'description'	=> esc_html__( 'Upload your custom logo image', 'retro' ),
	'section'		=> 'footer',
	'default'		=> '',
) );
// Footer: Copyright
Kirki::add_field( 'retro_theme', array(
	'type'			=> 'text',
	'settings'		=> 'copyright',
	'label'			=> esc_html__( 'Footer Copyright', 'retro' ),
	'description'	=> esc_html__( 'Replace the footer copyright text', 'retro' ),
	'section'		=> 'footer',
	'default'		=> '',
) );
// Footer: Credit
Kirki::add_field( 'retro_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'credit',
	'label'			=> esc_html__( 'Footer Credit', 'retro' ),
	'description'	=> esc_html__( 'Footer credit text', 'retro' ),
	'section'		=> 'footer',
	'default'		=> 'on',
) );
// Layout: Global
Kirki::add_field( 'retro_theme', array(
	'type'			=> 'radio-image',
	'settings'		=> 'layout-global',
	'label'			=> esc_html__( 'Global Layout', 'retro' ),
	'description'	=> esc_html__( 'Other layouts will override this option if they are set', 'retro' ),
	'section'		=> 'layout',
	'default'		=> 'col-2cl',
	'choices'     => array(
		'col-1c'	=> get_template_directory_uri() . '/functions/images/col-1c.png',
		'col-2cl'	=> get_template_directory_uri() . '/functions/images/col-2cl.png',
	),
) );
// Layout: Home
Kirki::add_field( 'retro_theme', array(
	'type'			=> 'radio-image',
	'settings'		=> 'layout-home',
	'label'			=> esc_html__( 'Home', 'retro' ),
	'description'	=> esc_html__( '(is_home) Posts homepage layout', 'retro' ),
	'section'		=> 'layout',
	'default'		=> 'inherit',
	'choices'     => array(
		'inherit'	=> get_template_directory_uri() . '/functions/images/layout-off.png',
		'col-1c'	=> get_template_directory_uri() . '/functions/images/col-1c.png',
		'col-2cl'	=> get_template_directory_uri() . '/functions/images/col-2cl.png',
	),
) );
// Layout: Single
Kirki::add_field( 'retro_theme', array(
	'type'			=> 'radio-image',
	'settings'		=> 'layout-single',
	'label'			=> esc_html__( 'Single', 'retro' ),
	'description'	=> esc_html__( '(is_single) Single post layout - If a post has a set layout, it will override this.', 'retro' ),
	'section'		=> 'layout',
	'default'		=> 'inherit',
	'choices'     => array(
		'inherit'	=> get_template_directory_uri() . '/functions/images/layout-off.png',
		'col-1c'	=> get_template_directory_uri() . '/functions/images/col-1c.png',
		'col-2cl'	=> get_template_directory_uri() . '/functions/images/col-2cl.png',
	),
) );
// Layout: Archive
Kirki::add_field( 'retro_theme', array(
	'type'			=> 'radio-image',
	'settings'		=> 'layout-archive',
	'label'			=> esc_html__( 'Archive', 'retro' ),
	'description'	=> esc_html__( '(is_archive) Category, date, tag and author archive layout', 'retro' ),
	'section'		=> 'layout',
	'default'		=> 'inherit',
	'choices'     => array(
		'inherit'	=> get_template_directory_uri() . '/functions/images/layout-off.png',
		'col-1c'	=> get_template_directory_uri() . '/functions/images/col-1c.png',
		'col-2cl'	=> get_template_directory_uri() . '/functions/images/col-2cl.png',
	),
) );
// Layout : Archive - Category
Kirki::add_field( 'retro_theme', array(
	'type'			=> 'radio-image',
	'settings'		=> 'layout-archive-category',
	'label'			=> esc_html__( 'Archive - Category', 'retro' ),
	'description'	=> esc_html__( '(is_category) Category archive layout', 'retro' ),
	'section'		=> 'layout',
	'default'		=> 'inherit',
	'choices'     => array(
		'inherit'	=> get_template_directory_uri() . '/functions/images/layout-off.png',
		'col-1c'	=> get_template_directory_uri() . '/functions/images/col-1c.png',
		'col-2cl'	=> get_template_directory_uri() . '/functions/images/col-2cl.png',
	),
) );
// Layout: Search
Kirki::add_field( 'retro_theme', array(
	'type'			=> 'radio-image',
	'settings'		=> 'layout-search',
	'label'			=> esc_html__( 'Search', 'retro' ),
	'description'	=> esc_html__( '(is_search) Search page layout', 'retro' ),
	'section'		=> 'layout',
	'default'		=> 'inherit',
	'choices'     => array(
		'inherit'	=> get_template_directory_uri() . '/functions/images/layout-off.png',
		'col-1c'	=> get_template_directory_uri() . '/functions/images/col-1c.png',
		'col-2cl'	=> get_template_directory_uri() . '/functions/images/col-2cl.png',
	),
) );
// Layout: Error 404
Kirki::add_field( 'retro_theme', array(
	'type'			=> 'radio-image',
	'settings'		=> 'layout-404',
	'label'			=> esc_html__( 'Error 404', 'retro' ),
	'description'	=> esc_html__( '(is_404) Error 404 page layout', 'retro' ),
	'section'		=> 'layout',
	'default'		=> 'inherit',
	'choices'     => array(
		'inherit'	=> get_template_directory_uri() . '/functions/images/layout-off.png',
		'col-1c'	=> get_template_directory_uri() . '/functions/images/col-1c.png',
		'col-2cl'	=> get_template_directory_uri() . '/functions/images/col-2cl.png',
	),
) );
// Layout: Default Page
Kirki::add_field( 'retro_theme', array(
	'type'			=> 'radio-image',
	'settings'		=> 'layout-page',
	'label'			=> esc_html__( 'Default Page', 'retro' ),
	'description'	=> esc_html__( '(is_page) Default page layout - If a page has a set layout, it will override this.', 'retro' ),
	'section'		=> 'layout',
	'default'		=> 'inherit',
	'choices'     => array(
		'inherit'	=> get_template_directory_uri() . '/functions/images/layout-off.png',
		'col-1c'	=> get_template_directory_uri() . '/functions/images/col-1c.png',
		'col-2cl'	=> get_template_directory_uri() . '/functions/images/col-2cl.png',
	),
) );


function retro_kirki_sidebars_select() { 
 	$sidebars = array(); 
 	if ( isset( $GLOBALS['wp_registered_sidebars'] ) ) { 
 		$sidebars = $GLOBALS['wp_registered_sidebars']; 
 	} 
 	$sidebars_choices = array(); 
 	foreach ( $sidebars as $sidebar ) { 
 		$sidebars_choices[ $sidebar['id'] ] = $sidebar['name']; 
 	} 
 	if ( ! class_exists( 'Kirki' ) ) { 
 		return; 
 	}
	// Sidebars: Select
	Kirki::add_field( 'retro_theme', array(
		'type'			=> 'select',
		'settings'		=> 's1-home',
		'label'			=> esc_html__( 'Home', 'retro' ),
		'description'	=> esc_html__( '(is_home) Primary', 'retro' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices, 
		'default'		=> '',
		'placeholder'	=> esc_html__( 'Select a sidebar', 'retro' ),
	) );
	Kirki::add_field( 'retro_theme', array(
		'type'			=> 'select',
		'settings'		=> 's1-single',
		'label'			=> esc_html__( 'Single', 'retro' ),
		'description'	=> esc_html__( '(is_single) Primary - If a single post has a unique sidebar, it will override this.', 'retro' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices, 
		'default'		=> '',
		'placeholder'	=> esc_html__( 'Select a sidebar', 'retro' ),
	) );
	Kirki::add_field( 'retro_theme', array(
		'type'			=> 'select',
		'settings'		=> 's1-archive',
		'label'			=> esc_html__( 'Archive', 'retro' ),
		'description'	=> esc_html__( '(is_archive) Primary', 'retro' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices, 
		'default'		=> '',
		'placeholder'	=> esc_html__( 'Select a sidebar', 'retro' ),
	) );
	Kirki::add_field( 'retro_theme', array(
		'type'			=> 'select',
		'settings'		=> 's1-archive-category',
		'label'			=> esc_html__( 'Archive - Category', 'retro' ),
		'description'	=> esc_html__( '(is_category) Primary', 'retro' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices, 
		'default'		=> '',
		'placeholder'	=> esc_html__( 'Select a sidebar', 'retro' ),
	) );
	Kirki::add_field( 'retro_theme', array(
		'type'			=> 'select',
		'settings'		=> 's1-search',
		'label'			=> esc_html__( 'Search', 'retro' ),
		'description'	=> esc_html__( '(is_search) Primary', 'retro' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices, 
		'default'		=> '',
		'placeholder'	=> esc_html__( 'Select a sidebar', 'retro' ),
	) );
	Kirki::add_field( 'retro_theme', array(
		'type'			=> 'select',
		'settings'		=> 's1-404',
		'label'			=> esc_html__( 'Error 404', 'retro' ),
		'description'	=> esc_html__( '(is_404) Primary', 'retro' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices, 
		'default'		=> '',
		'placeholder'	=> esc_html__( 'Select a sidebar', 'retro' ),
	) );
	Kirki::add_field( 'retro_theme', array(
		'type'			=> 'select',
		'settings'		=> 's1-page',
		'label'			=> esc_html__( 'Default Page', 'retro' ),
		'description'	=> esc_html__( '(is_page) Primary - If a page has a unique sidebar, it will override this.', 'retro' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices, 
		'default'		=> '',
		'placeholder'	=> esc_html__( 'Select a sidebar', 'retro' ),
	) );
	
 } 
add_action( 'init', 'retro_kirki_sidebars_select', 999 ); 

// Social Links: List
Kirki::add_field( 'retro_theme', array(
	'type'			=> 'repeater',
	'label'			=> esc_html__( 'Create Social Links', 'retro' ),
	'description'	=> esc_html__( 'Create and organize your social links', 'retro' ),
	'section'		=> 'social',
	'tooltip'		=> esc_html__( 'Font Awesome names:', 'retro' ) . ' <a href="https://fontawesome.com/icons?d=gallery&s=brands&m=free" target="_blank"><strong>' . esc_html__( 'View All', 'retro' ) . ' </strong></a>',
	'row_label'		=> array(
		'type'	=> 'text',
		'value'	=> esc_html__('social link', 'retro' ),
	),
	'settings'		=> 'social-links',
	'default'		=> '',
	'fields'		=> array(
		'social-title'	=> array(
			'type'			=> 'text',
			'label'			=> esc_html__( 'Title', 'retro' ),
			'description'	=> esc_html__( 'Ex: Facebook', 'retro' ),
			'default'		=> '',
		),
		'social-icon'	=> array(
			'type'			=> 'text',
			'label'			=> esc_html__( 'Icon Name', 'retro' ),
			'description'	=> esc_html__( 'Font Awesome icons. Ex: fa-facebook ', 'retro' ) . ' <a href="https://fontawesome.com/icons?d=gallery&s=brands&m=free" target="_blank"><strong>' . esc_html__( 'View All', 'retro' ) . ' </strong></a>',
			'default'		=> 'fa-',
		),
		'social-link'	=> array(
			'type'			=> 'link',
			'label'			=> esc_html__( 'Link', 'retro' ),
			'description'	=> esc_html__( 'Enter the full url for your icon button', 'retro' ),
			'default'		=> 'http://',
		),
		'social-color'	=> array(
			'type'			=> 'color',
			'label'			=> esc_html__( 'Icon Color', 'retro' ),
			'description'	=> esc_html__( 'Set a unique color for your icon (optional)', 'retro' ),
			'default'		=> '',
		),
		'social-target'	=> array(
			'type'			=> 'checkbox',
			'label'			=> esc_html__( 'Open in new window', 'retro' ),
			'default'		=> false,
		),
	)
) );
// Styling: Enable
Kirki::add_field( 'retro_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'dynamic-styles',
	'label'			=> esc_html__( 'Dynamic Styles', 'retro' ),
	'description'	=> esc_html__( 'Turn on to use the styling options below', 'retro' ),
	'section'		=> 'styling',
	'default'		=> 'on',
) );
// Styling: Boxed Layout
Kirki::add_field( 'retro_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'boxed',
	'label'			=> esc_html__( 'Boxed Layout', 'retro' ),
	'description'	=> esc_html__( 'Use a boxed layout', 'retro' ),
	'section'		=> 'styling',
	'default'		=> 'off',
) );
// Styling: Switch
Kirki::add_field( 'retro_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'light-dark-switch',
	'label'			=> esc_html__( 'Light/Dark Theme Switch', 'retro' ),
	'description'	=> esc_html__( 'Do not use with Dark Theme option enabled', 'retro' ),
	'section'		=> 'styling',
	'default'		=> 'off',
) );
// Styling: Sidebar Home Button
Kirki::add_field( 'retro_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'sidebar-home-btn',
	'label'			=> esc_html__( 'Sidebar Home Button', 'retro' ),
	'description'	=> esc_html__( 'Use instead of light/dark switch', 'retro' ),
	'section'		=> 'styling',
	'default'		=> 'off',
) );
// Styling: Dark
Kirki::add_field( 'retro_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'dark',
	'label'			=> esc_html__( 'Dark Theme', 'retro' ),
	'description'	=> esc_html__( 'Use dark instead of light base', 'retro' ),
	'section'		=> 'styling',
	'default'		=> 'off',
) );
// Styling: Font
Kirki::add_field( 'retro_theme', array(
	'type'			=> 'select',
	'settings'		=> 'font',
	'label'			=> esc_html__( 'Font', 'retro' ),
	'description'	=> esc_html__( 'Select font for the theme', 'retro' ),
	'section'		=> 'styling',
	'default'		=> 'roboto',
	'choices'     => array(
		'titillium-web'			=> esc_html__( 'Titillium Web, Latin (Self-hosted)', 'retro' ),
		'titillium-web-ext'		=> esc_html__( 'Titillium Web, Latin-Ext', 'retro' ),
		'droid-serif'			=> esc_html__( 'Droid Serif, Latin', 'retro' ),
		'source-sans-pro'		=> esc_html__( 'Source Sans Pro, Latin-Ext', 'retro' ),
		'lato'					=> esc_html__( 'Lato, Latin', 'retro' ),
		'raleway'				=> esc_html__( 'Raleway, Latin', 'retro' ),
		'ubuntu'				=> esc_html__( 'Ubuntu, Latin-Ext', 'retro' ),
		'ubuntu-cyr'			=> esc_html__( 'Ubuntu, Latin / Cyrillic-Ext', 'retro' ),
		'roboto'				=> esc_html__( 'Roboto, Latin-Ext', 'retro' ),
		'roboto-cyr'			=> esc_html__( 'Roboto, Latin / Cyrillic-Ext', 'retro' ),
		'roboto-condensed'		=> esc_html__( 'Roboto Condensed, Latin-Ext', 'retro' ),
		'roboto-condensed-cyr'	=> esc_html__( 'Roboto Condensed, Latin / Cyrillic-Ext', 'retro' ),
		'roboto-slab'			=> esc_html__( 'Roboto Slab, Latin-Ext', 'retro' ),
		'roboto-slab-cyr'		=> esc_html__( 'Roboto Slab, Latin / Cyrillic-Ext', 'retro' ),
		'playfair-display'		=> esc_html__( 'Playfair Display, Latin-Ext', 'retro' ),
		'playfair-display-cyr'	=> esc_html__( 'Playfair Display, Latin / Cyrillic', 'retro' ),
		'open-sans'				=> esc_html__( 'Open Sans, Latin-Ext', 'retro' ),
		'open-sans-cyr'			=> esc_html__( 'Open Sans, Latin / Cyrillic-Ext', 'retro' ),
		'pt-serif'				=> esc_html__( 'PT Serif, Latin-Ext', 'retro' ),
		'pt-serif-cyr'			=> esc_html__( 'PT Serif, Latin / Cyrillic-Ext', 'retro' ),
		'arial'					=> esc_html__( 'Arial', 'retro' ),
		'georgia'				=> esc_html__( 'Georgia', 'retro' ),
		'verdana'				=> esc_html__( 'Verdana', 'retro' ),
		'tahoma'				=> esc_html__( 'Tahoma', 'retro' ),
	),
) );
// Styling: Container Width
Kirki::add_field( 'retro_theme', array(
	'type'			=> 'slider',
	'settings'		=> 'container-width',
	'label'			=> esc_html__( 'Website Max-width', 'retro' ),
	'description'	=> esc_html__( 'Max-width of the container', 'retro' ),
	'section'		=> 'styling',
	'default'		=> '1024',
	'choices'     => array(
		'min'	=> '720',
		'max'	=> '1600',
		'step'	=> '1',
	),
) );
// Styling: Primary Color
Kirki::add_field( 'retro_theme', array(
	'type'			=> 'color',
	'settings'		=> 'color-1',
	'label'			=> esc_html__( 'Primary Color', 'retro' ),
	'section'		=> 'styling',
	'default'		=> '#e93ead',
) );
// Styling: Angled Style
Kirki::add_field( 'retro_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'angled',
	'label'			=> esc_html__( 'Angled Style', 'retro' ),
	'description'	=> esc_html__( 'Triangles', 'retro' ),
	'section'		=> 'styling',
	'default'		=> 'on',
) );
// Styling: Header Logo Max-height
Kirki::add_field( 'retro_theme', array(
	'type'			=> 'slider',
	'settings'		=> 'logo-max-height',
	'label'			=> esc_html__( 'Header Logo Image Max-height', 'retro' ),
	'description'	=> esc_html__( 'Your logo image should have the double height of this to be high resolution', 'retro' ),
	'section'		=> 'styling',
	'default'		=> '60',
	'choices'     => array(
		'min'	=> '40',
		'max'	=> '200',
		'step'	=> '1',
	),
) );
// Styling: Left Bar Top Color
Kirki::add_field( 'retro_theme', array(
	'type'			=> 'color',
	'settings'		=> 'color-bar-top-left',
	'label'			=> esc_html__( 'Left Bar Top Color', 'retro' ),
	'section'		=> 'styling',
	'default'		=> '#4c5051',
) );
// Styling: Left Bar Color
Kirki::add_field( 'retro_theme', array(
	'type'			=> 'color',
	'settings'		=> 'color-bar-left',
	'label'			=> esc_html__( 'Left Bar Color', 'retro' ),
	'section'		=> 'styling',
	'default'		=> '#383c3d',
) );
// Styling: Left Background Color
Kirki::add_field( 'retro_theme', array(
	'type'			=> 'color',
	'settings'		=> 'color-background-left',
	'label'			=> esc_html__( 'Left Background Color', 'retro' ),
	'section'		=> 'styling',
	'default'		=> '#1e2021',
) );
// Styling: Background Color
Kirki::add_field( 'retro_theme', array(
	'type'			=> 'color',
	'settings'		=> 'color-background',
	'label'			=> esc_html__( 'Background Color', 'retro' ),
	'section'		=> 'styling',
	'default'		=> '',
) );
