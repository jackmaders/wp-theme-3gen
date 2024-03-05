<?php

function threeGen_theme_support()
{
    add_theme_support("title-tag");
    add_theme_support("custom-logo");
    add_theme_support("post-thumbnails");
}

function threeGen_register_styles()
{
    $version = wp_get_theme()->get("Version");

    wp_enqueue_style(
        "main",
        get_template_directory_uri() . "/assets/css/style.css",
        [],
        $version,
    );
}

function threeGen_register_scripts()
{
    $version = wp_get_theme()->get("Version");

    wp_enqueue_script(
        "main",
        get_template_directory_uri() . "/assets/js/index.js",
        [],
        $version,
    );
}

function threeGen_meta_viewport()
{
    echo '<meta name="viewport" content="width=device-width, initial-scale=1">';
}

function threeGen_customize_register($wp_customize)
{
    $wp_customize->add_section("threeGen_hero", [
        "title" => __("Hero", "threeGen"),
        "priority" => 120,
    ]);

    $wp_customize->add_setting("hero_image", [
        "default" => "",
        "transport" => "refresh",
    ]);

    $wp_customize->add_control(
        new WP_Customize_Image_Control($wp_customize, "hero_image", [
            "label" => __("Upload Hero Image", "threeGen"),
            "section" => "threeGen_hero",
            "settings" => "hero_image",
        ]),
    );
    
    $wp_customize->add_setting('hero_heading', [
        'default' => 'Default text',
    ]);

    $wp_customize->add_control('hero_heading', [
        'label' => 'Hero Text',
        'section' => 'threeGen_hero',
        'settings' => 'hero_heading',
        'type' => 'text',
    ]);

    $wp_customize->add_setting('hero_subheading', [
        'default' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas efficitur nisl dolor, in porttitor augue luctus eget. Quisque vulputate elementum.',
    ]);
    
    $wp_customize->add_control('hero_subheading', [
        'label' => 'Hero Subheading',
        'section' => 'threeGen_hero',
        'settings' => 'hero_subheading',
        'type' => 'textarea',
    ]);
}

add_action("init", "threeGen_theme_support");
add_action("wp_enqueue_scripts", "threeGen_register_styles");
add_action("wp_enqueue_scripts", "threeGen_register_scripts");
add_action("wp_head", "threeGen_meta_viewport", 1);
add_action("customize_register", "threeGen_customize_register");
add_filter('wpcf7_autop_or_not', '__return_false');