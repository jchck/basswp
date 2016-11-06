<?php


// ==============================================================
// Define production database info
// ==============================================================
if ( file_exists( dirname( __FILE__ ) . '/wp-config-local.php' ) ) {
	define( 'WP_LOCAL_DEV', true );
	include( dirname( __FILE__ ) . '/wp-config-local.php');
} else {
	define( 'WP_LOCAL_DEV', false );
	define( 'DB_NAME', 'production_db_name_here' );
	define( 'DB_USER', 'production_db_username_here' );
	define( 'DB_PASSWORD', 'production_db_password_here' );
	define( 'DB_HOST', 'production_db_host_here' ); 
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
// Turn on/off multisite
// ==============================================================
define( 'WP_ALLOW_MULTISITE', true );


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
// Set the site & home URL's
// ==============================================================
if ( ! defined( 'WP_SITEURL' ) ) {
	define( 'WP_SITEURL', 'http://' . $_SERVER['HTTP_HOST'] . '/wp' );
	if ( ! defined( 'WP_HOME' ) ) {
		define('WP_HOME', 'http://' . $_SERVER['HTTP_HOST']);
	}
}

// ==============================================================
// Absolute path to WP directory
// ==============================================================
if ( ! defined( 'ABSPATH' )) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/wp/' );
}


// ==============================================================
// Rename /wp-content/ to /app/
// Load that from outside WP directory
// ==============================================================
define( 'WP_CONTENT_DIR', dirname( __FILE__ ) . '/app' );
define( 'WP_CONTENT_URL', 'http://' . $_SERVER['HTTP_HOST'] . '/app' );


// ==============================================================
// Set Basswp Thesis to default theme
// ==============================================================
//define( 'WP_DEFAULT_THEME', 'basswp-thesis' );


// ==============================================================
// Change location of uploads
// ==============================================================
define( 'UPLOADS', 'wp-content/media' );


// ==============================================================
// Bootstrap WordPress
// ==============================================================
require_once( ABSPATH . 'wp-settings.php');