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
define( 'AUTH_KEY',          'jomc{Tv=W!qT^<xI%CS;V{*H]nr*QXT(*Tl,YZD{trctNvs$.,<k%9XbG2O~&@dM' );
define( 'SECURE_AUTH_KEY',   '4}=LkVzD:<}5L#tGY4i6pM>B(LG&p}?gq82]w/[oQr:*7SO<97#,$Fety3p*[ u5' );
define( 'LOGGED_IN_KEY',     '9WXIOnr?]0)q|nw*I0g1;u4LTK,dOk._hpN*JT(}YOZE]m=2LrIP(tF IF-&er.e' );
define( 'NONCE_KEY',         'U@67_!n40oMhHm~($vSKrfz@+jfp5&y[Gg8cH__6QTPvS`r`QuAV)N#E:Z=R}q+X' );
define( 'AUTH_SALT',         '.w2F:I)+_7Tp8*5Z_0)Ke(E##M9,40:84o?V*#eySw%)9]lUO]7gAm6xr$0|Xp1Z' );
define( 'SECURE_AUTH_SALT',  'L=#$#N+p[w~[Rln>g?F>p9S[6Id@AI$iBN([w{9(hfvL{l=rGm%(k>i.fHYHyv59' );
define( 'LOGGED_IN_SALT',    '8?[n]AI7si1:IP;-3mlTe=,f}jcaY2FLm{]uW.a*BqBd|E-xr#?)%6RJYS -xMY|' );
define( 'NONCE_SALT',        'X!CUG{RhYBM[*;=j-09S3QN#($Irqz_iG9 Fj^|69]}0!Pn2,JbaLyo!};-.&UAY' );
define( 'WP_CACHE_KEY_SALT', 'INs]Zl2vp_EO3X?E6D(8.i|}t{V=O5s1cW+mT.,E{QTDPsvr,bC}:]q8)_Dptr-q' );


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

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
