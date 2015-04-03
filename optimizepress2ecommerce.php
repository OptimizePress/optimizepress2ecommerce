<?php

/*
Plugin Name: OptimizePress 2 fix e-commerce template loading
Plugin URI: http://www.optimizepress.com
Description: Catches all "index_template" hooks and loads OP templating system
Version: 1.0
Author: OptimizePress
Author URI: http://www.optimizepress.com
*/

function fix_op_template()
{
	if (defined('OP_VERSION') && version_compare(OP_VERSION, '2.1.5', '<')) {
		add_action('index_template', 'op_template_include');
	}	
}

add_action('template_redirect', 'fix_op_template');