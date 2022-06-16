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
define( 'DB_NAME', 'ketan' );

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
define( 'AUTH_KEY',         'pn6i>fsX#>^Hbr{{gJ%-i[^U7m`nKL%|Em~*?@(NLIK-ln%f,wwV%?qC:{HIO<^)' );
define( 'SECURE_AUTH_KEY',  'N`zWkLPJI-FN#VO19 @iUMS*($>EPUfuK2f3u1zgtN2Lp<Sf3rm=d}yJ q&>IG#t' );
define( 'LOGGED_IN_KEY',    '{!t{}=T&nh&gpICq1rJ2Xr~5Sq`Gr!M72FsFQ.J0yP5@F}ENlz?gLe~cW0cCOgT`' );
define( 'NONCE_KEY',        'PK(]ooNcdBt[>2-*#|jTcr)$ 0)J{~H==V2006G2LO]tS4@dT+A*zKsW.]8Lrvt1' );
define( 'AUTH_SALT',        '?=|qQ*0G~3-JWFLc&U/~WK9D`|%Mf5K9?]S8=O1~FC!hhy%*C_3&k~vZe$u=@;Aa' );
define( 'SECURE_AUTH_SALT', '{5SjRI-=Aq&CI2dJcB5Vn8Mo-]9<J1dRKT;D0F#6gN}gt3 e.:l,%|ft:)xX/aTO' );
define( 'LOGGED_IN_SALT',   'CVzf)e0T%[}NH7f1kQm!he)t2e:c?MYivr*l+;,F5N?4%8vp-CIGLUH(+.W^[;1}' );
define( 'NONCE_SALT',       ';`Z7H-WJz&`*|sId47!)u?Tq:Umimsnz?x9-m8qpiY5jX/@q~G$eKAZ&-&#I^&Xu' );

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
