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
define( 'DB_NAME', 'cvc' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost:8889' );

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
define( 'AUTH_KEY',         '&CqGGrpw**HTBT2y(tLjKDXn[&?mw}$CK(NsNead.@;uvfhS)SOkhp&2%j $PK#*' );
define( 'SECURE_AUTH_KEY',  'H)Nj^V31u%Y?@7a]aZ}mI%a$vekmg+wId$XZ6AQL#.~0uNj#SLs+#F$!pEj1t(-(' );
define( 'LOGGED_IN_KEY',    'w#zBUj>?PC?f>P-02-R!zMU[eEybV3/j;|JNPID?bRi/zyp/:aYF|^qEO1xU5WyU' );
define( 'NONCE_KEY',        'z,o]PB7~e()^yz;Q1K9F$P3&*y>=MhB3DE/qNptNw?=6(&4QTfO[jVAK -m{Csq(' );
define( 'AUTH_SALT',        'w[0(?&{EHD9(!avkDU)pwROHsyoH*:J7sv#hb{g5/v{Dj*3j+v/J$$w/PwUoji]2' );
define( 'SECURE_AUTH_SALT', 'A.Nr#VWpe&_:B;Xs$_T`Xm3`]($F7Gx,>0yUCP3!rKx~a7[~`uQT7uW7g|amTOT9' );
define( 'LOGGED_IN_SALT',   'f=~BfG;bjh<vxGYlz9T4 Ee4FpxAc{`F,!a5K.`5wRP151,)?v11uB5_|ev[u*c1' );
define( 'NONCE_SALT',       '@g&F**lWIC7b{y(9qeZe$~OX|GLPUtifP^rg|^v6WWjKCj$S(=~*1:8OsRr +/f5' );

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
