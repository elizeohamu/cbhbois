<?php

require get_template_directory() . '/inc/customizer.php';
require_once get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php';

// Carregando scripts e folhas de estilos
function load_scripts(){ 
    global $ARB_ATTRIB_PREFIX;
    wp_enqueue_script('popper-js', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js', array( 'jquery' ), '1.16.0', true);
    wp_enqueue_script('bootstrap-js', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js', array( 'jquery', 'popper-js' ), '4.5.2', true);    
    wp_enqueue_style( 'bootstrap-css', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css', array(), '5.4.2', 'all' );
    wp_enqueue_style( 'fontawasome-css', 'https://use.fontawesome.com/releases/v5.6.3/css/all.css', array(), '5.6.3', 'all' );
    wp_enqueue_style( 'template', get_template_directory_uri() . '/css/template.css', array(), '1.0', 'all' );     
}
add_action( 'wp_enqueue_scripts', 'load_scripts' );

// Função de Configuração do tema
function bibliodata_config(){
    
    // Registrando menus
    register_nav_menus(
        array(
            'header-menu' => __('Header Menu', 'cbhbois'), 
            'footer-menu' => __('Footer Menu', 'cbhbois'),       
        )
    );

    // Background do Header    
    
    add_theme_support( 'post-thumbnails' );
    //add_theme_support( 'post-formats', array( 'video', 'image') );
    add_theme_support( 'custom-logo', array('height' => 105, 'width' => 315) );
    add_theme_support( 'title-tag' );


    // Suporte ao Gutenberg
    add_theme_support( 'align-wide' );
    add_theme_support( 'responsive-embeds' );
    add_theme_support( 'editor-color-palette', array(   
        array(
            'name' => __('Green', 'cbhbois'),
            'slug' => 'green',
            'color' => '#085919'
        ), 
        array(
            'name' => __('Blue', 'cbhbois'),
            'slug' => 'blue',
            'color' => '#0097CC'
        ),  
        array(
            'name' => __('Light Gray', 'cbhbois'),
            'slug' => 'light-gray',
            'color' => '#F2F2F2'
        ), 
        array(
            'name' => __('Orange', 'cbhbois'),
            'slug' => 'orange',
            'color' => '#FB9D01'
        ),     
        array(
            'name' => __('Black', 'cbhbois'),
            'slug' => 'black',
            'color' => '#000000'
        ),
        array(
            'name' => __('White', 'cbhbois'),
            'slug' => 'white',
            'color' => '#FFFFFF'
        )
    ));
    add_theme_support( 'wp-block-styles' );

    // Habilitando suporte à tradução
    $textdomain = 'cbhbois';
    load_theme_textdomain( $textdomain, get_template_directory() . '/languages/');    

}

add_action( 'after_setup_theme', 'bibliodata_config', 0 );

