<?php

function companyProRegisterStyles() {
    $version = wp_get_theme()->get('Version');
    wp_enqueue_style('companyProStyle', get_template_directory_uri() . "style.css", array('companyProStyleBootstrap','companyProStyleBootstrapJs'), $version );
    wp_enqueue_style('companyProStyleBootstrap', "https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css", array(), "5.3.3");
    wp_enqueue_style('companyProStyleBootstrapJs', "https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js", array(), "5.3.3");
}
add_action('wp_enqueue_scripts', 'companyProRegisterStyles' );

function companyProRegisterJavascripts() {
    //wp_enqueue_style('companyProStyle', get_template_directory_uri() . "style.css", array('companyProStyleBootstrap','companyProStyleBootstrapJs'), $version );
    //wp_enqueue_script('companyProStyleBootstrap', "https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css", array(), "5.3.3");
    wp_enqueue_script('companyProStyleBootstrapJs', "https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js", array(), "5.3.3", true);
}
add_action('wp_enqueue_scripts', 'companyProRegisterJavascripts' );

?>