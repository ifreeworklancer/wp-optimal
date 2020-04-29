<?php
// Theme setup
function theme_setup()
{
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
    register_nav_menus(
        [
            'header_menu' => 'Header menu',
        ]
    );
}

add_action('after_setup_theme', 'theme_setup');
// Cleanup header
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');
add_filter('the_generator', '__return_empty_string');
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wp_resource_hints', 2);
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'rest_output_link_wp_head');
show_admin_bar(false);
// Enqueue scripts
function theme_scripts()
{
    wp_deregister_script('wp-embed');
//    wp_deregister_script('jquery');
//    wp_deregister_script('jquery-migrate');
    wp_enqueue_script('app', get_theme_file_uri('dist/app.js'), null, '', true);
}

add_action('wp_enqueue_scripts', 'theme_scripts');
// Enqueue styles
function theme_styles()
{
    wp_enqueue_style('theme-app', get_theme_file_uri('dist/app.css'), null, null);
}

add_action('wp_enqueue_scripts', 'theme_styles');

// Debug
function dd($value)
{
    echo "<pre>";
    var_dump($value);
    echo "</pre>";
    die();
}

if (!function_exists('phone_filter')) {
    function phone_filter($phone)
    {
        return str_replace([' ', '(', ')', '-'], '', trim($phone));
    }
}
function theme_customize_register($wp_customize)
{
    $wp_customize->add_section('contacts', [
        'title' => 'Контактная информация',
        'priority' => 30,
    ]);
    $wp_customize->add_setting('phone1');
    $wp_customize->add_control('phone1', [
        'section' => 'contacts',
        'label' => 'Телефон 1',
        'type' => 'text',
    ]);
    $wp_customize->add_setting('phone2');
    $wp_customize->add_control('phone2', [
        'section' => 'contacts',
        'label' => 'Телефон 2',
        'type' => 'text',
    ]);
    $wp_customize->add_setting('email');
    $wp_customize->add_control('email', [
        'section' => 'contacts',
        'label' => 'Email',
        'type' => 'text',
    ]);
    $wp_customize->add_setting('address');
    $wp_customize->add_control('address', [
        'section' => 'contacts',
        'label' => 'Адрес',
        'type' => 'text',
    ]);
    $wp_customize->add_setting('address_link');
    $wp_customize->add_control('address_link', [
        'section' => 'contacts',
        'label' => 'Ссылка адреса',
        'type' => 'text',
    ]);
    $wp_customize->add_section('about', [
        'title' => 'О сайте',
        'priority' => 40,
    ]);
    $wp_customize->add_setting('link_catalog');
    $wp_customize->add_control('link_catalog', [
        'section' => 'about',
        'label' => 'Ссылка на каталог',
        'type' => 'text',
    ]);
    $wp_customize->add_setting('footer_info');
    $wp_customize->add_control('footer_info', [
        'section' => 'about',
        'label' => 'Информация в футере',
        'type' => 'text',
    ]);
}

add_action('customize_register', 'theme_customize_register');


/**
 * Custom func
 */
function phone_link($phone)
{
    return str_replace([' ', '(', ')', '-'], '', $phone);
}

function generateRandomString($length = 10)
{
    return substr(str_shuffle(str_repeat($x = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ',
        ceil($length / strlen($x)))), 1, $length);
}

// Video attr
function get_video_id($url)
{
    if (!$url) {
        return null;
    }
    preg_match("/^(?:http(?:s)?:\/\/)?(?:www\.)?(?:m\.)?(?:youtu\.be\/|youtube\.com\/(?:(?:watch)?\?(?:.*&)?v(?:i)?=|(?:embed|v|vi|user)\/))([^\?&\"'>]+)/",
        $url, $matches);
    return $matches[1];
}

function getVideoImageLinkAttribute($url)
{
    return 'https://img.youtube.com/vi/' . get_video_id($url) . '/maxresdefault.jpg';
}

function getVideoLinkAttribute($url)
{
    return 'https://www.youtube.com/embed/' . get_video_id($url);
}
