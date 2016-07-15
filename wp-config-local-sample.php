<?php

// ==============================================================
// Copy and rename contents of wp-config-local-sample.php to wp-config-local.php
//
// ** DO NOT DEPLOY wp-config-local.php to production ** 
// ==============================================================

// ==============================================================
// Load development database info
// Values will likely not need to be changed
// ==============================================================
define( 'DB_NAME', 'scotchbox' );
define( 'DB_USER', 'root' );
define( 'DB_PASSWORD', 'root' );
define( 'DB_HOST', 'localhost' );