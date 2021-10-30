<?php
/**
 * @package myList_Plugin
 */
/*
Plugin Name: myList_Plugin
Plugin URI: http://wordpress.org/
Description:user or admin can add items to the list, the List can be simply , When you add widgets to any page, it will be replaced by a list of items inserted from widgets list. Simply display the list of items.
Author: Remon Romany
Version: 1.0.0
Author URI: https://remon-romany.info/
Text Domain: myList-Plugin
*/

// Die if accessed directly
/*defined('ABSPATH') or die("hey you can/t access this file");
*/

// Exit if accessed directly
if(!defined('ABSPATH')){
  exit;
}

// Load Scripts
require_once(plugin_dir_path(__FILE__).'/includes/myList_Plugin-scripts.php');


// Load Class
require_once(plugin_dir_path(__FILE__).'/includes/myList_Plugin-class.php');

// Register Widget
function register_myList_Plugin(){
  register_widget('myList_Plugin_Widget');
}

// Hook in function
add_action('widgets_init', 'register_myList_Plugin');




// add menu and submenu pages 
add_action("admin_menu","addMenu");
function addMenu()
{
	add_menu_page("MyList-Plugin","MyList-Plugin",4,"example-option","exampleMenu");
	add_submenu_page("example-option","option one","option one", 4,"example-option-1","option1");
}

// display addmenu 

function exampleMenu()
{
	echo <<<'EOD'

	<h1>My List </h1>
	<h4>You can add, arrange, edit and delete items by entering the widgets and search for (My List) in list of widgets . <h4>
	<p>item 1 <p>
	<p>item 2 <p>
	<p>item 3 <p>

	EOD;

}


// display submenu 
function option1()
{
	echo <<<'EOD'

	<h1>Option One</h1>
	<h4>This list is under construction <h4>

	EOD;
}


