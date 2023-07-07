
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Safari Boyz</title>


    <?php wp_head();?>
    
    <!-- Font -->
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800&display=swap"
      rel="stylesheet"
    />
  </head>
  <body>
    <!-- Start Header section -->

    <header class="pages-header">
        <div class="container">
          <div class="header-top flex">
            <div class="contact-info">
              <a href="https://wa.me/254793653416" class="wsp" target="_blank">
                <span class="icon"><i class="fa-brands fa-whatsapp"></i></span>
                <span class="name">+254793653416</span>
              </a>
              <a href="mailto:info@safariboyz.com" class="email">
                <span class="icon"><i class="fa-solid fa-envelope"></i></span>
                <span class="name">info@safariboyz.com</span>
              </a>
            </div>

            <a href="/safariboyz/contact-us/" class="btn header-btn"
              >custom tours <i class="fa-solid fa-arrow-right"></i
            ></a>
          </div>

          <nav>
            <div class="nav-wrapper">
              <a href="/safariboyz/" class="logo">
                <img src="<?php bloginfo('template_directory');?>/images/logo1.png" alt="logo" />
                <div class="logo-text">
                  <img src="<?php bloginfo('template_directory');?>/images/logo2.png" alt="logo2" />
                  <span>. . . . . .</span>
                </div>
              </a>


              <!-- Main menu -->
              <!-- Start -->
              <!-- <?php
          wp_nav_menu(

            array(

                'safariboyz-theme_location' => 'top-menu',
                'menu_id' => '',
                'container' => 'ul',
                'menu_class' => 'nav-links flex',
                'walker' => new Custom_Walker_Nav_Menu()

            )
            );
            ?> -->


<?php
// New Route to menu
// Usage example
$menu_args = array(
  'safariboyz-theme_location' => 'top-menu', // Replace with your menu location
  'container'      => 'ul',
  'menu_class'     => 'nav-links flex',
  'walker'         => new Custom_Walker_Nav_Menu(),
);

wp_nav_menu($menu_args);


class Custom_Walker_Nav_Menu extends Walker_Nav_Menu {
  // Override start_lvl() to add a class to sub-menu ul
  public function start_lvl(&$output, $depth = 0, $args = array()) {
      $indent = str_repeat("\t", $depth);
      $output .= "\n$indent<ul class=\"sub-menu\">\n";
  }

  // Override start_el() to modify menu item output
  public function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0) {
      $indent = ($depth) ? str_repeat("\t", $depth) : '';

      $classes = empty($item->classes) ? array() : (array) $item->classes;
      $classes[] = 'menu-item-' . $item->ID;

      $output .= $indent . '<li class="' . implode(' ', $classes) . '">';

      // Check if the current item has children
      $has_children = $args->walker->has_children;

      if ($has_children && $depth === 0) {
        $output .= '<li class="destination">';

          $output .= '<a href="' . esc_url($item->url) . '" class="destination-btn">' . esc_html($item->title) . '</a>';
          $output .= '<div class="dest-dropdown">';
      } else {
          $output .= '<a href="' . esc_url($item->url) . '">' . esc_html($item->title) . '</a>';
      }
  }

  // Override end_el() to modify menu item output
  public function end_el(&$output, $item, $depth = 0, $args = array()) {
      // Check if the current item has children
      $has_children = $args->walker->has_children;

      if ($has_children && $depth === 0) {
          $output .= '</div>';
          $output .= '</li>';
      }

      $output .= "</li>\n";
  }

  // Override end_lvl() to add a closing tag for sub-menu ul
  public function end_lvl(&$output, $depth = 0, $args = array()) {
      $indent = str_repeat("\t", $depth);
      $output .= "$indent</ul>\n";
  }
}

?>

        



              <div class="menu-btn">
                <i class="fa-solid fa-bars"></i>
              </div>
            </div>
          </nav>
        </div>
        <!-- <script src="/js/main.js"></script> -->


      </header>