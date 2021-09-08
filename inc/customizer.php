<?php

function cbhbois_customizer( $cbhbois_customize ){ 

    //
    // Header E-mail
    //
    $cbhbois_customize->add_section(
        'sec_header', array(
            'title' => __('Header E-mail', 'cbhbois'),
            'description' => __('Header E-mail', 'cbhbois')
        )
    );
    $cbhbois_customize->add_setting(
        'set_header_email', array(
            'type' => 'theme_mod',
            'default' => 'E-mail',
            'sanitize_callback' => 'wp_kses_post'            
        )
    );
    $cbhbois_customize->add_control(
        'set_header_email', array(
            'label' => __('E-mail', 'cbhbois'),
            'description' => __('Type your e-mail', 'cbhbois'),
            'section' => 'sec_header',
            'type' => 'text'
        )
    );

    //
    // Banner
    //
    $cbhbois_customize->add_section(
        'sec_banner', array(
            'title' => __('Banner', 'cbhbois'),
            'description' => __('Banner', 'cbhbois')
        )
    );
    $cbhbois_customize->add_setting(
        'set_banner', array(
            'type' => 'theme_mod',
            'default' => 'Shortcode',
            'sanitize_callback' => 'wp_kses_post'            
        )
    );
    $cbhbois_customize->add_control(
        'set_banner', array(
            'label' => __('Shortcode', 'cbhbois'),
            'description' => __('Insert your shortcode', 'cbhbois'),
            'section' => 'sec_banner',
            'type' => 'text'
        )
    );


    //
    // Footer Contact
    //
    $cbhbois_customize->add_section(
        'sec_contact', array(
            'title' => __('Footer Contact', 'cbhbois'),
            'description' => __('Footer Contact Section', 'cbhbois')
        )
    );
    //Title
    $cbhbois_customize->add_setting(
        'set_contact_title', array(
            'type' => 'theme_mod',
            'default' => 'Title',
            'sanitize_callback' => 'wp_kses_post'            
        )
    );
    $cbhbois_customize->add_control(
        'set_contact_title', array(
            'label' => __('Title', 'cbhbois'),
            'description' => __('Type your title', 'cbhbois'),
            'section' => 'sec_contact',
            'type' => 'text'
        )
    );
    //Text
    $cbhbois_customize->add_setting(
        'set_contact_text', array(
            'type' => 'theme_mod',
            'default' => 'Text',
            'sanitize_callback' => 'wp_kses_post'            
        )
    );
    $cbhbois_customize->add_control(
        'set_contact_text', array(
            'label' => __('Text', 'cbhbois'),
            'description' => __('Type your text', 'cbhbois'),
            'section' => 'sec_contact',
            'type' => 'textarea'
        )
    );
    //Logo
    $cbhbois_customize->add_setting(
        'set_logo', array(
            'type' => 'theme_mod',
            'default' => get_theme_file_uri('images/default.jpg'), // Add Default Image URL 
            'sanitize_callback' => 'esc_url_raw'
        )
    );
    
    $cbhbois_customize->add_control( new WP_Customize_Image_Control( $cbhbois_customize, 'logo_control', array(
        'label' => __('Upload Logo', 'cbhbois'),
        'priority' => 1,
        'section' => 'sec_contact',
        'settings' => 'set_logo',
        'width' => 280,        
        'button_labels' => array(// All These labels are optional
                    'select' => __('Select Logo', 'cbhbois'),
                    'remove' => __('Remove Logo', 'cbhbois'),
                    'change' => __('Change Logo', 'cbhbois'),
                    )
        ))
    );
    //Social
    $cbhbois_customize->add_setting(
        'set_facebook_link', array(
            'type' => 'theme_mod',
            'default' => '',
            'sanitize_callback' => 'wp_filter_nohtml_kses',
            'transport' => 'refresh'
        )
    );
    $cbhbois_customize->add_control(
        'set_facebook_link', array(
            'label' => __('Link', 'cbhbois'),
            'description' => __('Type your Facebook link', 'cbhbois'),
            'section' => 'sec_contact',
            'type' => 'text'
        )
    );

    $cbhbois_customize->add_setting(
        'set_instagram_link', array(
            'type' => 'theme_mod',
            'default' => '',
            'sanitize_callback' => 'wp_filter_nohtml_kses',
            'transport' => 'refresh'
        )
    );
    $cbhbois_customize->add_control(
        'set_instagram_link', array(
            'label' => __('Link', 'cbhbois'),
            'description' => __('Type your Instagram link', 'cbhbois'),
            'section' => 'sec_contact',
            'type' => 'text'
        )
    );

    $cbhbois_customize->add_setting(
        'set_twitter_link', array(
            'type' => 'theme_mod',
            'default' => '',
            'sanitize_callback' => 'wp_filter_nohtml_kses',
            'transport' => 'refresh'
        )
    );
    $cbhbois_customize->add_control(
        'set_twitter_link', array(
            'label' => __('Link', 'cbhbois'),
            'description' => __('Type your Twitter link', 'cbhbois'),
            'section' => 'sec_contact',
            'type' => 'text'
        )
    );

    $cbhbois_customize->add_setting(
        'set_linkedin_link', array(
            'type' => 'theme_mod',
            'default' => '',
            'sanitize_callback' => 'wp_filter_nohtml_kses',
            'transport' => 'refresh'
        )
    );
    $cbhbois_customize->add_control(
        'set_linkedin_link', array(
            'label' => __('Link', 'cbhbois'),
            'description' => __('Type your Linkedin link', 'cbhbois'),
            'section' => 'sec_contact',
            'type' => 'text'
        )
    );

    //
    // Utilities Section
    //
    $cbhbois_customize->add_section(
        'sec_utilities', array(
            'title' => __('Section Utilities', 'cbhbois'),
            'description' => __('Utilities Section', 'cbhbois')
        )
    );
    //Utilities 1
    $cbhbois_customize->add_setting(
        'set_utilities_text_1', array(
            'type' => 'theme_mod',
            'default' => 'Text',
            'sanitize_callback' => 'wp_kses_post'            
        )
    );
    $cbhbois_customize->add_control(
        'set_utilities_text_1', array(
            'label' => __('Events', 'cbhbois'),
            'description' => __('Type your text', 'cbhbois'),
            'section' => 'sec_utilities',
            'type' => 'textarea'
        )
    );    
    $cbhbois_customize->add_setting(
        'set_utilities_link_1', array(
            'type' => 'theme_mod',
            'default' => 'http://www.url.com',
            'sanitize_callback' => 'wp_filter_nohtml_kses'
        )
    );
    $cbhbois_customize->add_control(
        'set_utilities_link_1', array(
            'label' => __('Link for Events', 'cbhbois'),
            'description' => __('Type your link', 'cbhbois'),
            'section' => 'sec_utilities',
            'type' => 'text',
            'input_attrs' => array(
                'placeholder' => __( 'http://www.url.com', 'cbhbois' ),
            )
        )
    );
    //Utilities 2
    $cbhbois_customize->add_setting(
        'set_utilities_text_2', array(
            'type' => 'theme_mod',
            'default' => 'Text',
            'sanitize_callback' => 'wp_kses_post'            
        )
    );
    $cbhbois_customize->add_control(
        'set_utilities_text_2', array(
            'label' => __('Meets', 'cbhbois'),
            'description' => __('Type your text', 'cbhbois'),
            'section' => 'sec_utilities',
            'type' => 'textarea'
        )
    );    
    $cbhbois_customize->add_setting(
        'set_utilities_link_2', array(
            'type' => 'theme_mod',
            'default' => 'http://www.url.com',
            'sanitize_callback' => 'wp_filter_nohtml_kses'
        )
    );
    $cbhbois_customize->add_control(
        'set_utilities_link_2', array(
            'label' => __('Link for Meets', 'cbhbois'),
            'description' => __('Type your link', 'cbhbois'),
            'section' => 'sec_utilities',
            'type' => 'text',
            'input_attrs' => array(
                'placeholder' => __( 'http://www.url.com', 'cbhbois' ),
            )
        )
    );
    //Utilities 3
    $cbhbois_customize->add_setting(
        'set_utilities_text_3', array(
            'type' => 'theme_mod',
            'default' => 'Text',
            'sanitize_callback' => 'wp_kses_post'            
        )
    );
    $cbhbois_customize->add_control(
        'set_utilities_text_3', array(
            'label' => __('Documents', 'cbhbois'),
            'description' => __('Type your text', 'cbhbois'),
            'section' => 'sec_utilities',
            'type' => 'textarea'
        )
    );    
    $cbhbois_customize->add_setting(
        'set_utilities_link_3', array(
            'type' => 'theme_mod',
            'default' => 'http://www.url.com',
            'sanitize_callback' => 'wp_filter_nohtml_kses'
        )
    );
    $cbhbois_customize->add_control(
        'set_utilities_link_3', array(
            'label' => __('Link for Documents', 'cbhbois'),
            'description' => __('Type your link', 'cbhbois'),
            'section' => 'sec_utilities',
            'type' => 'text',
            'input_attrs' => array(
                'placeholder' => __( 'http://www.url.com', 'cbhbois' ),
            )
        )
    );
    
    //
    // About
    //
    $cbhbois_customize->add_section(
        'sec_about', array(
            'title' => __('Section: About', 'cbhbois'),
            'description' => __('About Section', 'cbhbois')
        )
    );
    $cbhbois_customize->add_setting(
        'set_about_text', array(
            'type' => 'theme_mod',
            'default' => 'Text',
            'sanitize_callback' => 'wp_kses_post'            
        )
    );
    $cbhbois_customize->add_control(
        'set_about_text', array(
            'label' => __('Text', 'cbhbois'),
            'description' => __('Type your text', 'cbhbois'),
            'section' => 'sec_about',
            'type' => 'textarea'
        )
    ); 
    $cbhbois_customize->add_setting(
        'set_about_link', array(
            'type' => 'theme_mod',
            'default' => 'http://www.url.com',
            'sanitize_callback' => 'wp_filter_nohtml_kses'
        )
    );
    $cbhbois_customize->add_control(
        'set_about_link', array(
            'label' => __('Link', 'cbhbois'),
            'description' => __('Type your link', 'cbhbois'),
            'section' => 'sec_about',
            'type' => 'text',
            'input_attrs' => array(
                'placeholder' => __( 'http://www.url.com', 'cbhbois' ),
            )
        )
    );
    $cbhbois_customize->add_setting(
        'set_about_img', array(
            'type' => 'theme_mod',
            'default' => get_theme_file_uri('images/default.jpg'), // Add Default Image URL 
            'sanitize_callback' => 'esc_url_raw'
        )
    );
    
    $cbhbois_customize->add_control( new WP_Customize_Image_Control( $cbhbois_customize, 'image_control', array(
        'label' => __('Upload Image', 'cbhbois'),        
        'section' => 'sec_about',
        'settings' => 'set_about_img',
        'width' => 280,        
        'button_labels' => array(// All These labels are optional
                    'select' => __('Select Image', 'cbhbois'),
                    'remove' => __('Remove Image', 'cbhbois'),
                    'change' => __('Change Image', 'cbhbois'),
                    )
        ))
    );

    //
    // Comites
    //
    $cbhbois_customize->add_section(
        'sec_comites', array(
            'title' => __('Section: Comitês', 'cbhbois'),
            'description' => __('Comitês Section', 'cbhbois')
        )
    );
    //Comite 1
    $cbhbois_customize->add_setting(
        'set_comites_title_1', array(
            'type' => 'theme_mod',
            'default' => 'Title 1',
            'sanitize_callback' => 'wp_kses_post'            
        )
    );
    $cbhbois_customize->add_control(
        'set_comites_title_1', array(
            'label' => __('Title 1', 'cbhbois'),
            'description' => __('Type your title', 'cbhbois'),
            'section' => 'sec_comites',
            'type' => 'text'
        )
    );
    $cbhbois_customize->add_setting(
        'set_comites_link_1', array(
            'type' => 'theme_mod',
            'default' => 'http://www.url.com',
            'sanitize_callback' => 'wp_filter_nohtml_kses'
        )
    );
    $cbhbois_customize->add_control(
        'set_comites_link_1', array(
            'label' => __('Link for Logo 1', 'cbhbois'),
            'description' => __('Type your link', 'cbhbois'),
            'section' => 'sec_comites',
            'type' => 'text',
            'input_attrs' => array(
                'placeholder' => __( 'http://www.url.com', 'cbhbois' ),
            )
        )
    );
    $cbhbois_customize->add_setting(
        'set_comites_img_1', array(
            'type' => 'theme_mod',
            'default' => get_theme_file_uri('images/default.jpg'), // Add Default Image URL 
            'sanitize_callback' => 'esc_url_raw'
        )
    );
    
    $cbhbois_customize->add_control( new WP_Customize_Image_Control( $cbhbois_customize, 'image_comite_1', array(
        'label' => __('Upload Logo 1', 'cbhbois'),        
        'section' => 'sec_comites',
        'settings' => 'set_comites_img_1',
        'width' => 280,        
        'button_labels' => array(// All These labels are optional
                    'select' => __('Select Logo', 'cbhbois'),
                    'remove' => __('Remove Logo', 'cbhbois'),
                    'change' => __('Change Logo', 'cbhbois'),
                    )
        ))
    );
    //Comite 2
    $cbhbois_customize->add_setting(
        'set_comites_title_2', array(
            'type' => 'theme_mod',
            'default' => 'Title 2',
            'sanitize_callback' => 'wp_kses_post'            
        )
    );
    $cbhbois_customize->add_control(
        'set_comites_title_2', array(
            'label' => __('Title 2', 'cbhbois'),
            'description' => __('Type your title', 'cbhbois'),
            'section' => 'sec_comites',
            'type' => 'text'
        )
    );
    $cbhbois_customize->add_setting(
        'set_comites_link_2', array(
            'type' => 'theme_mod',
            'default' => 'http://www.url.com',
            'sanitize_callback' => 'wp_filter_nohtml_kses'
        )
    );
    $cbhbois_customize->add_control(
        'set_comites_link_2', array(
            'label' => __('Link for Logo 2', 'cbhbois'),
            'description' => __('Type your link', 'cbhbois'),
            'section' => 'sec_comites',
            'type' => 'text',
            'input_attrs' => array(
                'placeholder' => __( 'http://www.url.com', 'cbhbois' ),
            )
        )
    );
    $cbhbois_customize->add_setting(
        'set_comites_img_2', array(
            'type' => 'theme_mod',
            'default' => get_theme_file_uri('images/default.jpg'), // Add Default Image URL 
            'sanitize_callback' => 'esc_url_raw'
        )
    );
    
    $cbhbois_customize->add_control( new WP_Customize_Image_Control( $cbhbois_customize, 'image_comite_2', array(
        'label' => __('Upload Logo 2', 'cbhbois'),        
        'section' => 'sec_comites',
        'settings' => 'set_comites_img_2',
        'width' => 280,        
        'button_labels' => array(// All These labels are optional
                    'select' => __('Select Logo', 'cbhbois'),
                    'remove' => __('Remove Logo', 'cbhbois'),
                    'change' => __('Change Logo', 'cbhbois'),
                    )
        ))
    );
    //Comite 3
    $cbhbois_customize->add_setting(
        'set_comites_title_3', array(
            'type' => 'theme_mod',
            'default' => 'Title 3',
            'sanitize_callback' => 'wp_kses_post'            
        )
    );
    $cbhbois_customize->add_control(
        'set_comites_title_3', array(
            'label' => __('Title 3', 'cbhbois'),
            'description' => __('Type your title', 'cbhbois'),
            'section' => 'sec_comites',
            'type' => 'text'
        )
    );
    $cbhbois_customize->add_setting(
        'set_comites_link_3', array(
            'type' => 'theme_mod',
            'default' => 'http://www.url.com',
            'sanitize_callback' => 'wp_filter_nohtml_kses'
        )
    );
    $cbhbois_customize->add_control(
        'set_comites_link_3', array(
            'label' => __('Link for Logo 3', 'cbhbois'),
            'description' => __('Type your link', 'cbhbois'),
            'section' => 'sec_comites',
            'type' => 'text',
            'input_attrs' => array(
                'placeholder' => __( 'http://www.url.com', 'cbhbois' ),
            )
        )
    );
    $cbhbois_customize->add_setting(
        'set_comites_img_3', array(
            'type' => 'theme_mod',
            'default' => get_theme_file_uri('images/default.jpg'), // Add Default Image URL 
            'sanitize_callback' => 'esc_url_raw'
        )
    );
    
    $cbhbois_customize->add_control( new WP_Customize_Image_Control( $cbhbois_customize, 'image_comite_3', array(
        'label' => __('Upload Logo 3', 'cbhbois'),        
        'section' => 'sec_comites',
        'settings' => 'set_comites_img_3',
        'width' => 280,        
        'button_labels' => array(// All These labels are optional
                    'select' => __('Select Logo', 'cbhbois'),
                    'remove' => __('Remove Logo', 'cbhbois'),
                    'change' => __('Change Logo', 'cbhbois'),
                    )
        ))
    );

    //
    // Partners
    //
    $cbhbois_customize->add_section(
        'sec_partners', array(
            'title' => __('Section: Partners', 'cbhbois'),
            'description' => __('Partners Section', 'cbhbois')
        )
    );

    $cbhbois_customize->add_setting(
        'set_partners_img_1', array(
            'type' => 'theme_mod',
            'default' => get_theme_file_uri('images/default.jpg'), // Add Default Image URL 
            'sanitize_callback' => 'esc_url_raw'
        )
    );
    
    $cbhbois_customize->add_control( new WP_Customize_Image_Control( $cbhbois_customize, 'image_partners_1', array(
        'label' => __('Upload Logo 1', 'cbhbois'),        
        'section' => 'sec_partners',
        'settings' => 'set_partners_img_1',
        'width' => 280,        
        'button_labels' => array(// All These labels are optional
                    'select' => __('Select Logo', 'cbhbois'),
                    'remove' => __('Remove Logo', 'cbhbois'),
                    'change' => __('Change Logo', 'cbhbois'),
                    )
        ))
    );

    $cbhbois_customize->add_setting(
        'set_partners_img_2', array(
            'type' => 'theme_mod',
            'default' => get_theme_file_uri('images/default.jpg'), // Add Default Image URL 
            'sanitize_callback' => 'esc_url_raw'
        )
    );
    
    $cbhbois_customize->add_control( new WP_Customize_Image_Control( $cbhbois_customize, 'image_partners_2', array(
        'label' => __('Upload Logo 2', 'cbhbois'),        
        'section' => 'sec_partners',
        'settings' => 'set_partners_img_2',
        'width' => 280,        
        'button_labels' => array(// All These labels are optional
                    'select' => __('Select Logo', 'cbhbois'),
                    'remove' => __('Remove Logo', 'cbhbois'),
                    'change' => __('Change Logo', 'cbhbois'),
                    )
        ))
    );
    $cbhbois_customize->add_setting(
        'set_partners_link', array(
            'type' => 'theme_mod',
            'default' => 'http://www.url.com',
            'sanitize_callback' => 'wp_filter_nohtml_kses'
        )
    );
    $cbhbois_customize->add_control(
        'set_partners_link', array(
            'label' => __('Link for Page', 'cbhbois'),
            'description' => __('Type your link', 'cbhbois'),
            'section' => 'sec_partners',
            'type' => 'text',
            'input_attrs' => array(
                'placeholder' => __( 'http://www.url.com', 'cbhbois' ),
            )
        )
    );

    //
    // News
    //
    $cbhbois_customize->add_section(
        'sec_news', array(
            'title' => __('News Link', 'cbhbois'),
            'description' => __('News Link', 'cbhbois')
        )
    );
    $cbhbois_customize->add_setting(
        'set_news_link', array(
            'type' => 'theme_mod',
            'default' => 'Link',
            'sanitize_callback' => 'wp_kses_post'            
        )
    );
    $cbhbois_customize->add_control(
        'set_news_link', array(
            'label' => __('Link', 'cbhbois'),
            'description' => __('Type your link', 'cbhbois'),
            'section' => 'sec_news',
            'type' => 'text',
            'input_attrs' => array(
                'placeholder' => __( 'http://www.url.com', 'cbhbois' ),
            )
        )
    );
    
}

add_action( 'customize_register', 'cbhbois_customizer' );