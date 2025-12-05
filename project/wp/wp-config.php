<?php
/**ssss
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', getenv('WP_DB_NAME') );

/** Database username */
define( 'DB_USER', getenv('WP_DB_USER') );

/** Database password */
define( 'DB_PASSWORD', getenv('WP_DB_PASSWORD') );

/** Database hostname */
define( 'DB_HOST', getenv('WP_DB_HOST') );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         getenv('WP_AUTH_KEY') );
define( 'SECURE_AUTH_KEY',  getenv('WP_SECURE_AUTH_KEY') );
define( 'LOGGED_IN_KEY',    '&-(WTVHIM:]8>,rb[_h?]yXCP7-2!Orv6H0iEp&I#8v< mP;0XQ`Yuz}g^k^y;{!' );
define( 'NONCE_KEY',        '9ZEI}Y.izYs,Nu0P/$/iCZH-mnRI]r17 ;zu`*?0eGZNF](3V;Wx`r~y]BP{rx-j' );
define( 'AUTH_SALT',        '8yl4gq[d:uxUnfm]1X_FmE%ddLUEhg ]9u%h%_q}uETz -&2%VM0[|$iIVj8B0:?' );
define( 'SECURE_AUTH_SALT', 'P7~0OsFl%p::,PU}Cb(I{@ac^7yaGKYF@7FSk0wjO@)ihE-Qe6-Ub%O+A[}W|[_E' );
define( 'LOGGED_IN_SALT',   '#?#xZmLtQQX.r2T@,D`+8bL}<sQ}?6]M7 A64k[Qu,8>l0z0#e.tWd,Cyt  |?@7' );
define( 'NONCE_SALT',       'rBd$yML@dVYm=z~qFcu9~wanr-#o9<;4;g3Bnxhe2!C,/{`~Zr K jZuk~>9t,[K' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
