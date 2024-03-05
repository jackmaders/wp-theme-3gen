<?php
function threeGen_theme_support()
{
    add_theme_support("title-tag");
    add_theme_support("custom-logo");
    add_theme_support("post-thumbnails");
}

add_action("init", "threeGen_theme_support");