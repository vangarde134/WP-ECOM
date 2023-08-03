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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

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


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}


define('AUTH_KEY',         'lIsr+5pw+orWruTpngXoAFQBmO265nXWXTJc6d5ikehvmj+nWxOFLm4UAORGTAE9pCxRhRP04rr8Q3cu6LTyqA==');
define('SECURE_AUTH_KEY',  'xN2WSF1PQNS+R+q53u0KVF/tIAH+mDItlYUmin5i14Q8NPJsL2uPdlgf20nmaBq5OhWZO24djSb+R93g3qfLhQ==');
define('LOGGED_IN_KEY',    '7erbTlG4kAeZVawiP7CwRda2v8LSq1eii3vGuLluVA6QzbBme4z+6+zSUt8KCJYsmmgwLYZF7ybwPlUoWHdvaw==');
define('NONCE_KEY',        'pOdS9kPuc3GQZJ3PiqntJ3Nz1SmnFZTOxnTPffpIVi4rqJTrT16zuQ2W0Kv5p1mT874yz/KVZRYpBydZyZKDPQ==');
define('AUTH_SALT',        'vWz/S+1AKgXjn2hOVX7t+1/IA2hgAcayFN4mkebo3a+LvWyoWvqBpoyg/nsVNay/YpW1LvuaiSHgMb+x52T35Q==');
define('SECURE_AUTH_SALT', 'rPLV5pgRwaePVslY/HCXoO4N/9s5w+VXetYxZTiofNJ2azuoiMgKgILIywCIsIW6GXy0OVaoPapb/aSDt56drg==');
define('LOGGED_IN_SALT',   'Jbv7Jd6ce/1iMKNWwT6Gc2VLOBDuaEtsHHp8hkMsj5ZseWZzZV0h4Bs/+1abuyyN26tBcU4mfcfkdKp2i4VbLg==');
define('NONCE_SALT',       '+EL8rvbYcTeoD1Siq89TPvntMnyjtxWjMbb4R/Fze7bQb1lrHqnQF4YuC9kLf/7likShqDKOjxDZpHy0uMVEzQ==');
define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
