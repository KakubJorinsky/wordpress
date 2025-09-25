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
define( 'DB_NAME', 'sisa_pangma' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'xyms2bjNy#sr}Z{5R8}]/OM4ww8:wg[uP5,vtYJ0h=1bA+t{9).p~Xp`p`-q[7.B' );
define( 'SECURE_AUTH_KEY',  'u7hX:3:H-nnX v>AT3,rMOV&Ybuu&]Fk$;2di`v^7QhkmFbuZq!4$/#gOj-aV}M*' );
define( 'LOGGED_IN_KEY',    '6.QCy>Xw`?|uY&p.+2ZE.= aJJF0EH1{]d?q296!NsLS[#5/{C#eI`g*vY%S<EWb' );
define( 'NONCE_KEY',        '4N^B(b{}4xCmea~#l^FJGY^|Z%f^H#hQSDvxBQO5i:Dv|XKFzZ1 KvZgT6G*fo8&' );
define( 'AUTH_SALT',        '>S6[#~}r&Dxc6e8/C|0Bblx+2JZ63BF,6k@SmeIWd&]igVy`[M:k]]!~|cbwq*Z5' );
define( 'SECURE_AUTH_SALT', ']c<k@|EMx(XZRiFUp9U~h$VrfHA (;(+qvBemYs Lm?2,P:#aT^>f](M9a~7y[1k' );
define( 'LOGGED_IN_SALT',   'G(,p:0|_ZuI9m3Bi?S)#,G0cxbu22E@wDyC8n8OsB3Q7f[7K7YWVYHs+,Qghm*lk' );
define( 'NONCE_SALT',       'R</r L2Ig_ja6*U<`@LYdb&>c`?S=2;;c8D1JD(xI^r/F:fRwz#tTQtg!_o{qLUX' );

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
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
