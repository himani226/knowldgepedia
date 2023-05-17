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
define( 'DB_NAME', 'knowledgepedia_db' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
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
define( 'AUTH_KEY',         'xRLdCG1p-$,SGW4J$bMhm6Nt?*S;,KH|0SDi[>i;3e@ku,ew:oj40-Yty)}!4U6K' );
define( 'SECURE_AUTH_KEY',  '*wl+,U[%G6P2,PiG|y)CW37,L1S-W;$**V.}HZk/aalJdB-{?|0P89/YP?W(*5.A' );
define( 'LOGGED_IN_KEY',    '^ON/!ZqEG$ILcNT{z%)_&:< `d@OnC/[$nxzRHfYrf$AT0TOJ!5]D/uOSkR_zJ*@' );
define( 'NONCE_KEY',        'k&xz&cv:vBbb{y8KUuFwRl,`thaSGJTP*q24su~|`*>m1XvWb3Egr.AafY@-?-p6' );
define( 'AUTH_SALT',        '@H/6C5jPjtU:!FE4j9D5Xg0^]z#p,</kR&**&%dAmvj(3o3U.% .MW$U2a#k06Mc' );
define( 'SECURE_AUTH_SALT', 'klHc=[e&5%N3n%QgFu{ /|qTforDRF%d^PmHM{#ii(C,AI,dM5gBEx?sP5{9 S]u' );
define( 'LOGGED_IN_SALT',   '?ZIV]n]+=k.m{mKdj/W=-]A6.8^9T,Ro3f)5FFg1>OY)l-m@{yyHP`g1<XT)^PPJ' );
define( 'NONCE_SALT',       '_mAX&fV1^/cs=N32d(cRakf}R_QYAMQ<6.9S4Qe4M,2W9{KpZ3B0y^*c&F!rT#M<' );

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
