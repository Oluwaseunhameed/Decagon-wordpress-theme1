<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <link rel="apple-touch-icon" sizes="72x72" href="assets/img/favicons/apple-touch-icon-72x72.png" />
  <link rel="apple-touch-icon" href="assets/img/favicons/apple-touch-icon.png" />
  <link rel="shortcut icon" href="assets/img/favicons/favicon.png" type="image/x-icon" />
  <?php
  wp_head()
  ?>
</head>

<body <?php body_class(); ?>>
  <!--Header Section-->
  <header class="<?php
                  if (is_home()) {
                    echo "home-header";
                  } else {
                    echo "other-header";
                  }
                  ?>" style="background-image: linear-gradient(to right bottom, rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.8)), url(<?php
                                                                                                                              if (get_header_image()) {
                                                                                                                                header_image();
                                                                                                                              }
                                                                                                                              ?>);">


    <!-- Navbar Section-->
    <section class="navigation" id="mynav">
      <div class="container">
        <nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-transparent">
          <div class="container-fluid">
            <a class="navbar-brand" href="<?php echo site_url(); ?>">
              <?php
              $custom_logo_id = get_theme_mod('custom_logo');
              $logo = wp_get_attachment_image_src($custom_logo_id, 'full');
              $logoURL = $logo[0];
              if (has_custom_logo()) {
                echo '<img class="header__logo" src="' . esc_url($logoURL) . '" alt="' . get_bloginfo('name') . '">';
              } else {
                echo '<h3>' . get_bloginfo('name') . '</h3>';
              }

              ?>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <?php
              wp_nav_menu([
                'theme_location' => 'header-menu',
                'menu_class' => 'navbar-nav ms-auto mb-2 mb-lg-',
                'container' => null
              ]);
              ?>
            </div>
          </div>
        </nav>
      </div>
    </section>