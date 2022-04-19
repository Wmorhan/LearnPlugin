<?php

/*
Plugin Name: Learn Plugin
Plugin URI: http://URI_Of_Page_Describing_Plugin_and_Updates
Description: A brief description of the Plugin.
Version: 1.0
Author: wmorhan
Author URI: http://URI_Of_The_Plugin_Author
License: A "Slug" license name e.g. GPL2
*/





if (! defined('ABSPATH')) {
	die;
}
if (! function_exists('add_action')){
	echo 'Silly human, you cant touch me';
	exit;
}

class FirstPlugin
{
	//Default method
	function __construct(){
		// activating the core classes

	}

	function register(){
		// registering assets and other

	}

	function activate(){
		echo 'Still here stupid!';
	}
	function deactivate(){
		echo 'I had enough, im leaving';
	}
	function uninstall(){

	}

}

if (class_exists('FirstPlugin')){
	$firstPlugin = new FirstPlugin();
}


// activation
register_activation_hook( __FILE__, array($firstPlugin, 'activate'));

// deactivation
register_activation_hook( __FILE__, array($firstPlugin, 'deactivate'));

//uninstall

register_activation_hook( __FILE__, array($firstPlugin, 'uninstall'));