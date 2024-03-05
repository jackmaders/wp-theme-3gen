<?php

function threeGen_customize_register_footer($wp_customize)
{
    $wp_customize->add_section("threeGen_footer", [
        "title" => __("Footer", "threeGen"),
        "priority" => 120,
    ]);

    $wp_customize->add_setting('footer_email', [
        'default' => '',
    ]);

    $wp_customize->add_control('footer_email', [
        'label' => 'Footer Email',
        'section' => 'threeGen_footer',
        'settings' => 'footer_email',
        'type' => 'email',
    ]);

    $wp_customize->add_setting('footer_phone', [
        'default' => '',
    ]);
    
    $wp_customize->add_control('footer_phone', [
        'label' => 'Footer Phone Number',
        'section' => 'threeGen_footer',
        'settings' => 'footer_phone',
        'type' => 'number',
    ]);

    $wp_customize->add_setting('footer_facebook_link', [
        'default' => '',
    ]);
    
    $wp_customize->add_control('footer_facebook_link', [
        'label' => 'Footer Facebook Link',
        'section' => 'threeGen_footer',
        'settings' => 'footer_facebook_link',
        'type' => 'url',
    ]);

    $wp_customize->add_setting('footer_instagram_link', [
        'default' => '',
    ]);
    
    $wp_customize->add_control('footer_instagram_link', [
        'label' => 'Footer Instagram Link',
        'section' => 'threeGen_footer',
        'settings' => 'footer_instagram_link',
        'type' => 'url',
    ]);

    $wp_customize->add_setting('footer_x_link', [
        'default' => '',
    ]);
    
    $wp_customize->add_control('footer_x_link', [
        'label' => 'Footer X Link',
        'section' => 'threeGen_footer',
        'settings' => 'footer_x_link',
        'type' => 'url',
    ]);

    $wp_customize->add_setting('footer_linkedin_link', [
        'default' => '',
    ]);
    
    $wp_customize->add_control('footer_linkedin_link', [
        'label' => 'Footer LinkedIn Link',
        'section' => 'threeGen_footer',
        'settings' => 'footer_linkedin_link',
        'type' => 'url',
    ]);
}

add_action("customize_register", "threeGen_customize_register_footer");
