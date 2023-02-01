<?php register_nav_menus(
  array(
    'primary' => __('primary menu'),
    'extra-menu' => __('Extra Menu')
  )
);
require get_template_directory() . '/customizer-repeater/functions.php';
require_once get_template_directory() . '/inc/customizer.php';

?>