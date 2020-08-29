<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
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
define( 'DB_NAME', 'psm_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'l929(AmGCj)AkF@&@bkwZ4|sh$9)k;HrnjH|`Nx+@%YYE{.?f$}R6,A1Q:DNBSD#' );
define( 'SECURE_AUTH_KEY',  '!669D% >f+PCJjyo=XK/1:GjpHN`[Sizbg,$6zC:W!O8<hYIr^9PZ1;TdzKml(GM' );
define( 'LOGGED_IN_KEY',    't,2Ao[pt9klI4l9ibud3<7>jdP{cp)Ax@3axy.T=98ojxpKA)3C}QHhk9T.GZG.S' );
define( 'NONCE_KEY',        'n@zM_Ad^+!s!u*7&NKLjt_mmFc-~#JAd1+)}+Oc)#``jFH;@k}(Ou3&ki!cAFLT)' );
define( 'AUTH_SALT',        'IT7NCG?L$JNh6C%!}(hdBOKZ]-%ZMtH%UG1Yq/Q2j:]GAjwi#9|iP]+Z|=j4y >B' );
define( 'SECURE_AUTH_SALT', 'g)$Cy:#8D*wa.PWuZ>jT E:s<s1q.E/5*E*xX_#LJC?cq~s`w?eAxpUf!xUEDf l' );
define( 'LOGGED_IN_SALT',   '!,@S%VPZmU$&T=tNjhY!g>2h|oDQ`}l_@Ue`%n5fA_0( *CO-lsdkpWT`eKy.}LN' );
define( 'NONCE_SALT',       ':;*YX9.=<>Bt`#tvD@%BfU^CvT>P1V^qQQF@mE,XI+GHc1w4d- Xs1m+;9d[pF^{' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
