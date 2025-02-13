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
define( 'DB_NAME', 'techcert' );

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
define( 'AUTH_KEY',         'lL|YiXqjdn,8Y:V%i6VWyB<LZ~n,Pk+!f;Jl)PXu+6g`MOzF<l);zRX?WK&:_tD!' );
define( 'SECURE_AUTH_KEY',  'yh)3|WJ0|$!W4E2APdX-3*dHvNgl:TJ`5bM:HmmEzIb3dP0/_Df Y)O?|v!>h11K' );
define( 'LOGGED_IN_KEY',    'u;A!.g#4};pN)&_NS0b4!c5#FFbnP5]a.76hM:WXPpcn)wFK,Gs:jMf @asT*gTU' );
define( 'NONCE_KEY',        '+#^2i{/w ]mv)SC,;c(A)Q5}X2E&2l!IN+g0&pEIN%S8 DwYJ/D2gXv_G6 ^X0}p' );
define( 'AUTH_SALT',        '1(<3Z=_pkD[%q?I[ii9d_n%J?]db-IA,:nN6yGOZ=tzY^{dC!6B}8Joc9,)HK,Jt' );
define( 'SECURE_AUTH_SALT', '6zNQ|F-!#WjfnYm&)9s$3:Ob}{0;SXc3:dW2$IjIfuYZ-2RZ1&QN>[8jqzreENbX' );
define( 'LOGGED_IN_SALT',   'tka_{LL6cA-pen?|_hRzhn a$8elV8Q>Ayrq}ZKH&]Qr6ax:Q/7vW=,oAVfPJtTA' );
define( 'NONCE_SALT',       '?{wmd0|UCv4zY8]jA2MUss%e8Y|>SsZ5VvHrDKm-u{Od]4wd8YOl0y1f[GhXTgAc' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'tc_';

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

define( 'WPCF7_AUTOP', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
