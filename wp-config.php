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
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'nhom20' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         '&nq{1=gl#Bwk|}/!!=TZ7Vy)O1j+M:*V<#Cq:8BXkXA4o1!MhI/Z;YmC>m#JB RU' );
define( 'SECURE_AUTH_KEY',  '2ra%w+NWMD7&aOT6J(AYQpM1oU<tO6&;=lfGkezG5iy8=uo?QmvHT}8qzPZH[gQ>' );
define( 'LOGGED_IN_KEY',    'x+{N4Fj>b:2=&v6G; *!!;}uRJ!zXSr>Q %Qeh9s$vjhN^qFcVr(/@VBSH:t{O*#' );
define( 'NONCE_KEY',        'X8[ZRoETyXL;0$pecC8Fm.6G1R0:.^X}^mhIHxvh.6da|c1YNj;Mt|ZmOGD*c1;3' );
define( 'AUTH_SALT',        '?*li%%daJH?eUcgPZzo:$dvGy[-Tr|[=a]!YZH<%/v}k V;>_TMTIq,~,ZQHRNsX' );
define( 'SECURE_AUTH_SALT', 'dePV.sXN&nN=*=I{aC=Q]OQ$M>We?UTHyX$T$m`3g,c1VM-en.6OOaSqM)Oz@NAM' );
define( 'LOGGED_IN_SALT',   'N2jR.|`?=mxz:+6~hBo+C?:F P_[(V@b/.4LQ(HGXMci{dvXgNqNJT%VjnkCl)yg' );
define( 'NONCE_SALT',       'WV#tP@<ke>.%KG=@x6PgGv}XWeJJv1sjT{eCcf;+9P,nuFH|<w?JasXA=~LrptdJ' );

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
