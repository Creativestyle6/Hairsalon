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
define( 'DB_NAME', 'hairsalon' );

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
define( 'AUTH_KEY',         'g5ixKhF};h@IDI>N?JN(&rYhn<UUa,nipu.l%F7UefA?6=Pb{hF^1s8PY}W@|BUn' );
define( 'SECURE_AUTH_KEY',  'ym(|N/~H]W{Sf_e;0#ziIBs@r[h_r:6T7<;5qWyc4jU5<$-$.lWLTEn$V*7MVg|V' );
define( 'LOGGED_IN_KEY',    'cGK42gmQE*]t!vS9XD(05!}pMQ:jI/KuRnuesPDs9C)fgi?vcp7R95knu?/Om=PE' );
define( 'NONCE_KEY',        '5{[c?ce=X|Nk!2}#1(sqMXn;SO2<4+C<NXPnT1V!0g&}AI}j,`8({tX~$sV~wp?r' );
define( 'AUTH_SALT',        'HF<?:i}P:Iwvj8~m)ez:)&^.]A&kyB$jbi(.{0i3Vrt9;l[MP #gB@&:XTBw+HGa' );
define( 'SECURE_AUTH_SALT', 'z0b2Ubi28Fnytj[CD<2P!>p=fCsjK;#A~+SV_X*sPf*e]/L|oI<8~w.icu<f1*lY' );
define( 'LOGGED_IN_SALT',   '{R53f[.c-+T Hqdw&]IF|lRMN0oxAj^o}#SPhRS$oLhdx+03Fz?{L!;7PEGEt*8?' );
define( 'NONCE_SALT',       'M4qh,&05.CsBcm~i]}f}ZUDr6B~Ye$u</oh(Gx@U7}m,W`_G?BF6?6(7HZ=UWOvg' );

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
