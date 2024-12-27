<?php

/**
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
define('DB_NAME', 'wordpress2_2');

/** Database username */
define('DB_USER', 'root');

/** Database password */
define('DB_PASSWORD', '');

/** Database hostname */
define('DB_HOST', 'localhost');

/** Database charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The database collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

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
define('AUTH_KEY',         '3zUOqku<4@&|V(6s73N3,94uT[_Li2iv&q-=|soRUlnR2DKVN BW[g|jJ[Fc3ar8');
define('SECURE_AUTH_KEY',  'M*o}XWLz6AQ(R,GcO9$YZ[i( t9Vr-}Wq4xFn79`OW6E!X#,!x!UDawn,;6 rN6.');
define('LOGGED_IN_KEY',    '``+hF(13DYB3xGs*M@{@.+Jwv[.3y>yJ)*+(5Pw0Fe&NY[_G;S1,nn=i.)QRB|!S');
define('NONCE_KEY',        '{1>fsZsH_nE[V7iW4Pq (RV[ o~p%L!w,AVJ5cfa7G[IYvbAqD:V)WwX<>KdBw&F');
define('AUTH_SALT',        'MY8QE?iaM3j^F,vSs/WC75qic(m**0-pLT+gx|Rbzw5PnfKY>dc>GciJ4WKRAWQ9');
define('SECURE_AUTH_SALT', '*ThN@RvYW1=|F&X|pos~3c6<MC7gyBhUhL-{lWVNxSWIw_4.AHakq,57PkYyw@VT');
define('LOGGED_IN_SALT',   ']}Y~DGvrgc8f5D?R)lD,O]S;n`4No.i.IqB!ikjo=/Mf_<(amipjT)!ml}yHbt4P');
define('NONCE_SALT',       'gc@-!abBR|GO1Q2GM=$$RtBuF|-h]4[(EW=oa+.E>6[QV-c>T;I[x=8LRwWV/#Ev');

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
define('WP_DEBUG', false);
define('FS_METHOD', 'direct');

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (! defined('ABSPATH')) {
	define('ABSPATH', __DIR__ . '/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
