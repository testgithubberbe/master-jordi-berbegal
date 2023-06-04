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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'Jixun2u1cTs3w2OuDs3q54OmNrYJZad9yiL4vLeuWnJpmsF2jdPBCtTS1tbmyAzy' );
define( 'SECURE_AUTH_KEY',  'aVu0SmjTRrxe6TanqRa4M0kelNZXrdoZqm3mdoY7w4aN9IjqwwwcIp6QaW1DeV0s' );
define( 'LOGGED_IN_KEY',    'qAnpZP5vc4hR2s8wwPYtC1jXTkjIa4zuPu6zynz16BuKooI78JkWkb0GRP8bNWpA' );
define( 'NONCE_KEY',        'XfhxrPoKJA8UxZEf6ts3tGqNhtDdtc7J0xvW7S5QKMa9Jq3H0LJ0kOr5CrD8vzvt' );
define( 'AUTH_SALT',        'oSdcWadCp9c76R29TRzFcMWFPPErVfiB2BMgOvOtksCwuHH7m5qJqKE3MUsocV6n' );
define( 'SECURE_AUTH_SALT', 'kNC1PSvRVbzQYe7ZTMydgQRe3m0WCx04vpjPR0E2XRo4VcmpAYvV7tRGRjcjRPQk' );
define( 'LOGGED_IN_SALT',   'Y3pQZdkc3GJO7qiwFF7zV5qpBEMdjgoTuZnLTA6XMZYHcto3qVmYbpiN4TebyUQk' );
define( 'NONCE_SALT',       'XqWtyGpRJpckH33Vn3KYcUsZ2q1SYdZG2TFoimDeD3hE3a4YBdlfijjNXd4KOW6d' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
