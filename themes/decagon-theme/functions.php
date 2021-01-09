<?php

function dec_scripts()
{
  wp_enqueue_style('dec-main-style', esc_url(get_stylesheet_uri()));
  wp_enqueue_style('dec-google-font', '//fonts.googleapis.com/css2?family=Mulish:wght@400;600;700;800&display=swap');
  wp_enqueue_style('dec-bootstrap5', '//cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css');
  wp_enqueue_style('dec-carousel', '//cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css');
  wp_enqueue_style('dec-slick-carousel', '//cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css');
  wp_enqueue_script('dec-tag-manager', 'https://www.googletagmanager.com/gtag/js?id=UA-167189023-1', NULL, '1.0', false);
  wp_enqueue_script('dec-tag-script', esc_url(get_theme_file_uri('/js/tag-script.js')), NULL, 1.0, false);
  wp_enqueue_script('dec-bootstrap5', '//cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js', NULL, 1.0, true);
  wp_enqueue_script('dec-jquery', '//ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js', NULL, 1.0, true);
  wp_enqueue_script('dec-slick-carousel', '//cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js', NULL, 1.0, true);

  wp_enqueue_script('dec-script', esc_url(get_theme_file_uri('/js/script.js')), NULL, 1.0, true);
}

add_action('wp_enqueue_scripts', 'dec_scripts');

function dec_tag_manager_async($tag, $handle, $src)
{
  if ($handle === 'dec-tag-manager') {
    if (false === stripos($tag, 'async')) {
      $tag = str_replace('src', ' async="async" src', $tag);
    }
  }
  return $tag;
}

add_filter('script_loader_tag', 'dec_tag_manager_async', 10, 3);

function my_walker_nav_menu_start_el($item_output, $item, $depth, $args)
{

  $pos = stripos($item_output, ">");
  $str = rtrim(substr($item_output, $pos + 1), '</a>');
  $str = trim($str);
  if ($str === 'Get Started') {
    $classes = 'nav-link nav-btn';
  } else {
    $classes = 'nav-link';
  }

  $item_output = preg_replace('/<a /', '<a class="' . $classes . '"', $item_output, 1);
  return $item_output;
}
add_filter('walker_nav_menu_start_el', 'my_walker_nav_menu_start_el', 10, 4);

function dec_misc_files()
{
  echo '
        <meta name="description" content="Decagon trains software engineers in fullstack Javascript (Node JS/React JS), C# (.NET Core), Java ( Spring framework), Mobile app development (React Native) in Nigeria. We build high-performing engineering teams that are agile, work ready and outcome-oriented. Find and hire verified Nigerian software engineers to join your team full-time or remotely." />
        <meta property="og:title" content="Hire software engineering talent | Decagonhq.com" />
        <meta property="og:url" content="https://decagonhq.com/" />
        <meta property="og:description" content="Decagon trains software engineers in fullstack Javascript (Node JS/React JS), C# (.NET Core), Java ( Spring framework), Mobile app development (React Native) in Nigeria. We build high-performing engineering teams that are agile, work ready and outcome-oriented. Find and hire verified Nigerian software engineers to join your team full-time or remotely." />
        <meta property="og:type" content="article" /><meta name="description" content="Decagon trains software engineers in fullstack Javascript (Node JS/React JS), C# (.NET Core), Java ( Spring framework), Mobile app development (React Native) in Nigeria. We build high-performing engineering teams that are agile, work ready and outcome-oriented. Find and hire verified Nigerian software engineers to join your team full-time or remotely." />
        <meta property="og:title" content="Hire software engineering talent | Decagonhq.com" />
        <meta property="og:url" content="https://decagonhq.com/" />
        <meta property="og:description" content="Decagon trains software engineers in fullstack Javascript (Node JS/React JS), C# (.NET Core), Java ( Spring framework), Mobile app development (React Native) in Nigeria. We build high-performing engineering teams that are agile, work ready and outcome-oriented. Find and hire verified Nigerian software engineers to join your team full-time or remotely." />
        <meta property="og:type" content="article" />

        <link rel="preconnect" href="https://fonts.gstatic.com" />';
}
add_action('wp_head', 'dec_misc_files', 0);


function dec_features()
{
  // register_nav_menu('headerMenuLocation', 'Header Menu Location');
  // register_nav_menu('footerLocationMenuOne', 'Footer Menu One');
  // register_nav_menu('footerLocationMenuTwo', 'Footer Menu Two');
  $arg = [
    'default-image' => esc_url(get_theme_file_uri('/img/hero.jpg')),
    'header-text' => true,
    'default-text-color' => '000',
    'random-default' => false,
    'uploads'       => true,
    'admin-head-callback' => 'adminhead_cb',
    'admin-preview-callback' => 'adminpreview_cb',
    'width' => 1920,
    'height' => 1279,
    'flex-width' => true,
    'flex-height' => true,
  ];
  register_nav_menu('header-menu', 'Header Menu');
  add_theme_support('custom-header', $arg);
  add_theme_support('title-tag');
  add_theme_support('custom-logo');
}

add_action('after_setup_theme', 'dec_features');
