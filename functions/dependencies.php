<?php 
//LOAD SCRIPTS
function enqueue_dtha_scripts() {
    wp_enqueue_script('Ajax-Popper', 'https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js', false, null, true, null);
    wp_enqueue_script('Bootstrap-4.5.3', 'https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js', array('jquery'), null, true, null);
    wp_enqueue_script('font-awesome', 'https://use.fontawesome.com/releases/v5.6.3/js/all.js', false, null, null, false);
    wp_enqueue_script('dtha-scripts', get_template_directory_uri() . '/assets/js/siteScripts.min.js', array('jquery'), null, true, null);
}
add_action('wp_enqueue_scripts', 'enqueue_dtha_scripts');
//LOAD CSS
function enqueue_dtha_styles() {
    wp_enqueue_style('bootstrap-4.5.3', 'https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css', array(), null);
    wp_enqueue_style('dtha-styles', get_template_directory_uri() . '/assets/styles/siteStyles.min.css');
}
add_action('wp_enqueue_scripts', 'enqueue_dtha_styles');
