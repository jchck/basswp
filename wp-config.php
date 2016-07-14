<?php


// ==============================================================
// Load database info and local development parameters
// ==============================================================
if ( file_exists( dirname( __FILE__ ) . '/local-config.php' ) ) {
	define( 'WP_LOCAL_DEV', true );
	include( dirname( __FILE__ ) . '/local-config.php');
} elseif ( ! defined( 'WP_LOCAL_DEV' ) ) {
	define( 'WP_LOCAL_DEV', false );
	define( 'DB_NAME', 'scotchbox' );
	define( 'DB_USER', 'root' );
	define( 'DB_PASSWORD', 'root' );
	define( 'DB_HOST', 'localhost' ); 
}


// ==============================================================
// Salts, for security
// Grab these from: https://api.wordpress.org/secret-key/1.1/salt
// ==============================================================
define( 'AUTH_KEY',         'put your unique phrase here' );
define( 'SECURE_AUTH_KEY',  'put your unique phrase here' );
define( 'LOGGED_IN_KEY',    'put your unique phrase here' );
define( 'NONCE_KEY',        'put your unique phrase here' );
define( 'AUTH_SALT',        'put your unique phrase here' );
define( 'SECURE_AUTH_SALT', 'put your unique phrase here' );
define( 'LOGGED_IN_SALT',   'put your unique phrase here' );
define( 'NONCE_SALT',       'put your unique phrase here' );


// ==============================================================
// Define WordPress Table Prefix
// ==============================================================
if (empty( $table_prefix)) {
	$table_prefix = 'bwp_';
}


// ==============================================================
// Turn on/off debugging
// ==============================================================
if ( 'WP_LOCAL_DEV') {
	define( 'WP_DEBUG', true );
}

// ==============================================================
// Absolute path to WP directory
// ==============================================================
if ( ! defined( 'ABSPATH' )) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/wp/' );
}


// ==============================================================
// Bootstrap WordPress
// ==============================================================
require_once( ABSPATH . 'wp-settings.php');