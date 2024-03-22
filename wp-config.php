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
define( 'DB_NAME', 'jishan' );

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
define( 'AUTH_KEY',         'Y?2i5_gm&!Sx=SnGP)K8(Z5oW8RP7T;b64gzppX^3F}2XB6ih+P#:hi~LFX}4lGX' );
define( 'SECURE_AUTH_KEY',  'r[aW,K=$;,VH}]}v`EVd_ez.IYL$a#z1R#EU}_q,#`4Cpghx.R%LG.S;xSAd(7EM' );
define( 'LOGGED_IN_KEY',    '&o$ao-^/Zk9t$HD3=HroUxE6f0%VJnpOCSdQ&o:t^!rP^!h^Yf/bY`,F9F3{(~,E' );
define( 'NONCE_KEY',        '&H7GMZe+^j(iKfV3Pe}_,#7^zN&N%haydxyGDQtT/K7!j6ZV7b&5U/ej&[t}rsc3' );
define( 'AUTH_SALT',        '^B>^Qf+69u(C]<[~;w]ov%2@8cGqgQDszw5mWl^l7k(K=:y6c6mX{<P:fIvax&UB' );
define( 'SECURE_AUTH_SALT', '`UBUXmJn#HTm-~uzA8&BSNGg!xUni_QLDa%.4JU.` XM|YWR9c=eRpKvh00y^;08' );
define( 'LOGGED_IN_SALT',   '6Q(Dj;)xK+>;wP-4}T3I9_gdM;vWmf*1kK6}D]{Fla3_R&%mXx9co#e4.HNf[npR' );
define( 'NONCE_SALT',       '%Ak*B &BUEfp`^fB #JDJ+t1RLgAKpN_H3<?o&:oWA<Iag/9:^Ak =HE#s]1W+[[' );

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
