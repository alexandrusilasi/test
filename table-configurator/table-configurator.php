<?php

/*
 Plugin Name: Table configurator
*/

 function theme_enqueue_scripts() {
        if(is_page("table-configurator"))
        {
            wp_enqueue_style( 'Font_Awesome', 'https://use.fontawesome.com/releases/v5.6.1/css/all.css' );
            wp_enqueue_style( 'Bootstrap_css', '/autoinstalator/wordpressplugins4/wp-content/plugins/table-configurator/css/bootstrap.min.css' );
            wp_enqueue_script( 'Bootstrap', '/autoinstalator/wordpressplugins4/wp-content/plugins/table-configurator/js/bootstrap.min.js', array(), '1.0.0', true );
        }

}
add_action( 'wp_enqueue_scripts', 'theme_enqueue_scripts' );

function table_configurator() { 

    ob_start();
    include 'table_configurator.php';
    return ob_get_clean(); 
 
} 
add_shortcode('table_configurator', 'table_configurator'); 