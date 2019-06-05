<?php
/**
 * Divi child enhanced basic
 * functions
 */
function set_child_theme_styles() {

    $parent_style = 'divi-style';

    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'divi-child-enhanced-basic-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );

}
add_action( 'wp_enqueue_scripts', 'set_child_theme_styles' );

function dce_basic_add_theme_menu_item()
{
	add_menu_page("DCE Basic Panel", "DCE Basic", "manage_options", "theme-panel", "dce_basic_theme_settings_page", null, 99999);
}
add_action("admin_menu", "dce_basic_add_theme_menu_item");

function dce_basic_theme_settings_page()
{
    ?>
	    <div class="wrap">
	       <h1>DCE Basic Theme Panel</h1>
            <p>
            The Divi Child Enhanced Basic Theme adds customized options to your Wordpress Divi theme installation.
            </p>
		</div>
	<?php
}
