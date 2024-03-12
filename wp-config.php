<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'slider-test' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

if ( !defined('WP_CLI') ) {
    define( 'WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
    define( 'WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
}



/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'c7jYwpYovlgNNXlsth4BqNxG2t4q47RE2EEynUZ8aBzrcNixL0AYpxnRn3wyJZX3' );
define( 'SECURE_AUTH_KEY',  'En3oiSItjU4biQ8fwJhJcMyJBW1e2B78xjtp4IgkYA2FXt5rZZya2iFQ72PHjJDg' );
define( 'LOGGED_IN_KEY',    'wJCyUGiL9EMRWNHNtRzcl2Zm0WUDPtlxCeEYBB5nK96Beo4ckyPOevAsoeYBxtla' );
define( 'NONCE_KEY',        'p5cIvvS4YpvwAJhmpZQFuhp1IWN2DkAXI0Ox0uRpwHayuj4WG88sqJu5Hq9wLc56' );
define( 'AUTH_SALT',        'FnTIT6zSr2XlsiEpL1LAo2UUiA5mSDP6KTqisEZTkxumLqz8hSbNAjFVXOIUeBqw' );
define( 'SECURE_AUTH_SALT', '4ZWZSfDw9hXxqKXWVDTYTfKfwMs2WJK8rAR7kzSS9NTrGzAMD2Q3nkAcbWMsrUju' );
define( 'LOGGED_IN_SALT',   'NKK4exZupKiiRBQl3K7qZ65ZAtr3Z518FBwBzPTaYZ3Oc0eLiwDvcl6n8OEIc0tm' );
define( 'NONCE_SALT',       'QMXOAiKzdLy11E5ZEVQzyFhikwdRzrVm2uegKtPGPLnTTmEXlvVJ9Yt7v2JRPDuw' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
