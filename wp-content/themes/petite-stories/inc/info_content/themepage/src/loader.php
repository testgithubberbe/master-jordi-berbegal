<?php
defined("ABSPATH") || exit();


add_action('admin_menu', 'petite_stories_themepage');
function petite_stories_themepage()
{
    add_menu_page(__('Theme Settings', 'petite-stories'), __('Theme Settings', 'petite-stories'), 'manage_options', 'petite_stories_themepage', 'petite_stories_themepage_content', get_template_directory_uri() . '/inc/info_content/themepage/src/wp-icon-superb.svg', 61);
}

function petite_stories_themepage_content()
{
    require_once(trailingslashit(get_template_directory()) . 'inc/info_content/themepage/src/themepage.php');
}

function petite_stories_comparepage_css($hook)
{
    if ('toplevel_page_petite_stories_themepage' != $hook) {
        return;
    }
    wp_enqueue_style('petite-stories-custom-style', get_template_directory_uri() . '/inc/info_content/themepage/src/compare.css');
}
add_action('admin_enqueue_scripts', 'petite_stories_comparepage_css');

// Theme page end
