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
define( 'DB_NAME', 'library' );

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
define( 'AUTH_KEY',         'HZ8x1m4aX3g}k]!U=2+N_.rkl7wF!Fmutv^|(gN@z .8C%?#>]`~1`@+fp3ZMZ=u' );
define( 'SECURE_AUTH_KEY',  '!q2oL/ed`uQ^k%.`ScVE[ndNe.{o7]F 3 3=.5+gCFtt($>&NvjlURRhb]Y~vy}{' );
define( 'LOGGED_IN_KEY',    '`^49~f.7N&qGvD|o~)&l<G@8^c:Kw0`6omS7u`Sruk$|QmLs%Hw{J6eaOTkV}4,=' );
define( 'NONCE_KEY',        'tDcV@rhr(4d@#t7ls`[p7x`.nx07];iKhlhw{G=d||SLW8LC:e`W7Y`JTV(|le$`' );
define( 'AUTH_SALT',        '`(9 >yy9 =)j0*W:UgU31;fGx$S1Wa&7UJ6U|%Zk#l }*y<dOvCP4>M3k `b_sgs' );
define( 'SECURE_AUTH_SALT', 'gM3*h9S#X3q0=*N1T;NVfu*hMmS.[YN7{&QrsA]w[jm z%HL2(+u>`#6?8XR<=3-' );
define( 'LOGGED_IN_SALT',   ';-+_!v.PosJHf^b`mlUcbSIluk]@*WjH~*4}61P1VK{IfWr}e7^7}`?ty|AFCeih' );
define( 'NONCE_SALT',       'LzW]>%Rd]{PsSq_#mZk{[JpDJFpEktms?~[Q.UNyA9M[8{xY3+)).+,*dO1hDs`Y' );

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
