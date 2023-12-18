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
define( 'DB_NAME', 'firstwp' );

/** Database username */
define( 'DB_USER', 'firstwp' );

/** Database password */
define( 'DB_PASSWORD', 'Admin@123#' );

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
define( 'AUTH_KEY',         'uhESiggaZ,*a;~ifb,=I5{gez${QX90=4b8>DnQ=GudO+3gx*ACFp}|W}_=qk=0A' );
define( 'SECURE_AUTH_KEY',  'U3Mw*QXlL.f4:=A6AUr||6P3U8;v8|]O|UpjKWDntp?^9Oa6/ FT?+3sNZ?/Ck!q' );
define( 'LOGGED_IN_KEY',    'Z9%m u^~d^gf$AqE9p*Ji6fr`X/ X!;=Hi)//er2h}K9q v+;E;O<mqu%fmTDr,7' );
define( 'NONCE_KEY',        ':.QxVh~ee7OS19!*8E7<<@bl]RxkS,ji~[Y-MWl&(/(/:[/aRx:}3yx$Qn}Pi`j7' );
define( 'AUTH_SALT',        '@lxPIyx6TT*7{7&pH%yn?4PQTKW5=K&K%Gv6,TsGrfc,.D?d59ni<#G?V~2C{F:6' );
define( 'SECURE_AUTH_SALT', 'Ps9]}ii|3,~qm3rB>#/TS,YZ{/gr+6]*0]:WWw/{PfT<]`f^L{azk%kET;..S2$#' );
define( 'LOGGED_IN_SALT',   'X=}Y=bZ$+MzW&jMwxnuyXR$xeZ6a8B3{qmk}v6IKqtwTGX*8 7?0n/ddS(pAdk2M' );
define( 'NONCE_SALT',       'T@S>N0K|}D>U8 Sqye#H.uX!vz$6i%SVooco$2~m^vo%fXdC7Ap.wK!}@&/gS3R#' );

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
