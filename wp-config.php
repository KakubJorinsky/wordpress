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
define( 'AUTH_KEY',         '0_6+9SH%ao_O42%0mNbXYZ7^*b!(i7*Ddc0] 8dA<miF{KP+WB#v16~@%kRdJSq3' );
define( 'SECURE_AUTH_KEY',  'WNsR!220J+)&<0B-5UEI!G bPNaS%laxUlKPoTe:,#S_P+6 w(yq/|/=8yX@Zt/)' );
define( 'LOGGED_IN_KEY',    'LnW[F9YDvC<k3];[%PEmOKShl_dOvJM(v:E^tx U/p YL/v)NHO:vTwwg9}VW`hW' );
define( 'NONCE_KEY',        'NTI@Hx!:fNl4_BbW26&u.t%DR?!6F6ifZJdO[bATx3#<<y;0?puv^eVTq;*ZY=Qh' );
define( 'AUTH_SALT',        'F?68mg$$a?eiF+RKqrNImeB mig<(Z%`uT~[qk{PyWXEss(/ u_kNfu/eax8s,zX' );
define( 'SECURE_AUTH_SALT', 'Y+tEHo^UMW.^c?#jTmBWz,|2aAP%I.aJ3 9YdXn(zP(5o+c~+W9O+M}8FVkl]yAz' );
define( 'LOGGED_IN_SALT',   '7}wP/2)bX6p-)Rby@?bu8Q<<)S(S3ISa`b%T(fgz$`/QsF^~w?n`^; rA|9umEtm' );
define( 'NONCE_SALT',       '&V|Zt?Jc^YjPPcqhWm?dmjwXn~B;{lY gN%-6i[7KCoprd<AQW`@fz;3g9 tU`L ' );

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
