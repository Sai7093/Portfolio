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
define( 'DB_NAME', 'site5' );

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
define( 'AUTH_KEY',         'ieQxD6]oJVpnrErZdB{|Kuhqb9B3w4(ZE:FlJiySV.7M?.3V&@a<ypSp}!n3z!dX' );
define( 'SECURE_AUTH_KEY',  'JpGBZ%4?3+E =4YX%Nf}$$V;0};`z/E#Sn?2axcS7OrGps|]iZkx%`/] A:Z(c;Z' );
define( 'LOGGED_IN_KEY',    'x$EH+RKw;6r=i|j(%wv5:J-)HWX9e&~VHRYUSVP(tq04@6/ASgLmE&=;p.F>H5nv' );
define( 'NONCE_KEY',        '8Im`FjdY7cj;m]pXB_d&?J?AOQLDpJ6VY .%B:ebqh^C  )(/6MQ8Qwn|hxjEa47' );
define( 'AUTH_SALT',        'Mj$PQj|613nXQCG}m6C^^ZX,8mc$:;Xr]|$huss[saq2v`y<6E N%1Q_|8hEm7e)' );
define( 'SECURE_AUTH_SALT', 'i@8?d8}B-}Di_!Bwu^O3UE1_/-=bS:O0^fTo.n6b16FA!_bj:-bYM`*<`m~/V]LG' );
define( 'LOGGED_IN_SALT',   '[_6@eXb54yt%@$#t#hKlc3)9hJ0Mo4:w-UEcgS%C!;()>|1!pdCoU`46GQWZ>I*P' );
define( 'NONCE_SALT',       'Z?A_9= qR`L89^A8!XTNV~ilVD[XUi`QWM}oAI<ftOs!>u;]t#w@rl!|w +.l~ar' );

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
