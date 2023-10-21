<?php
/**
 * Plugin Name: Foresty Addon Elementor
 * Version:     1.0.0
 * Text Domain: foresty-addon-elementor
 */

function register_foresty_widget( $widgets_manager ) {

	require_once( __DIR__ . '/widgets/foresty-button.php' );
	$widgets_manager->register( new \Elementor_Foresty_Button() );

}
add_action( 'elementor/widgets/register', 'register_foresty_widget' );