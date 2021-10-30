<?php
  // Add Scripts
  function myList_Plugin_add_scripts(){
    // Add Main CSS
    wp_enqueue_style('myList_Plugin-main-style', plugins_url(). '/myList_Plugin/css/style.css');
    // Add Main JS
    wp_enqueue_script('myList_Plugin-main-script', plugins_url(). '/myList_Plugin/js/main.js');

    // Add Google Script
    wp_register_script('google', 'https://apis.google.com/js/platform.js');
    wp_enqueue_script('google');
  }

  add_action('wp_enqueue_scripts', 'myList_Plugin_add_scripts');