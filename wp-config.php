<?php


// ==============================================================
// Define production database info
// ==============================================================
if ( file_exists( dirname( __FILE__ ) . '/wp-config-local.php' ) ) {
	define( 'WP_LOCAL_DEV', true );
	include( dirname( __FILE__ ) . '/wp-config-local.php');
} else {
	define( 'WP_LOCAL_DEV', false );
	define( 'DB_NAME', 'wpstackjustinchickcom' );
	define( 'DB_USER', '808heartbreak' );
	define( 'DB_PASSWORD', 'outside is nice' );
	define( 'DB_HOST', 'mysql.wp-stack.justinchick.com' ); 
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
// Change location of uploads
// ==============================================================
define( 'UPLOADS', 'wp-content/media' );


// ==============================================================
// Bootstrap WordPress
// ==============================================================
require_once( ABSPATH . 'wp-settings.php');