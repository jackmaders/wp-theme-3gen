<?php
function threeGen_customize_register_hero($wp_customize)
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

add_action("customize_register", "threeGen_customize_register_hero");
