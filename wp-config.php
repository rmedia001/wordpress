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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'Xhw[]w=A_?|D7b,ep3{=|Y),C:ky1)Opq{X?A:,fY!|3l>JHtcSg3j|pWR 83QZM' );
define( 'SECURE_AUTH_KEY',  'zH;w,2v{%b]gwGoR&WDs@0@N|v *ikC2{-(ctgAXIbmP#q_L(-xH,KcbZNy:4)Ru' );
define( 'LOGGED_IN_KEY',    'pPg/V{#^{.Vh,us#1XAeoZ%}DEN|bO#)$U$?uW3*1#eaByk?96U=mhT %^g]g@tE' );
define( 'NONCE_KEY',        '|( })#FnPW)vLF/W%[tQ^-qh3+.mBx*l$iKa8k$E49KS|#Rx/i*na7OPdm5nnH2^' );
define( 'AUTH_SALT',        '|7D#h31TLGhkOuOj?h3~P~gi94;R/b7dWziesw*Y9NgFvLmB}&`E{E)b?@G-$M=1' );
define( 'SECURE_AUTH_SALT', '&Sv4#]g )0,fjN90^_dm5<Qvp%npY2+K~%oALD^bHaNrnC1Bd[g.A~`( KAmNwup' );
define( 'LOGGED_IN_SALT',   'XHL(5O7C`<NMm(q&NcSnhq>{9*&,f?{<e:^;R _!Z4UHYG1oD;ud69e{EBE_`DMI' );
define( 'NONCE_SALT',       'KCTCQZ85cc)BK.Q$~tlW5hV+dd kLkE_/ji!skyt29Qw, hLxu~Gf+H2= ;hPrzE' );

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
