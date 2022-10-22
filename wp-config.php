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
define( 'AUTH_KEY',         ';Rxn$Xyi7YV@,tm []^2e1$PSM0v{X`!D_K,Tr}@FZhRx)3|nOtG}<RroKLt50du' );
define( 'SECURE_AUTH_KEY',  '2Wc?Cfd*2Qc4s6Z.5v}:jDV_!hxD(NMl#K[t^Fd :g`?gdqTB)k!XHUp!_=F#vTG' );
define( 'LOGGED_IN_KEY',    'zN?]3SofJ~8TvHsE-jjP|:u6><u$U<SQ6sg^Iy<C}mD!|OzZ+Q@967r+5RYm[*P-' );
define( 'NONCE_KEY',        'Xi#RHb>~zCco2N%>$=0`mZ Hui[e=ND/vz#0w^D%-lLV.rkebK,3sK(252*pG/K=' );
define( 'AUTH_SALT',        'E2Ix&wgFwK4O5]i$p35on>m(T|TiGlXN(Uqlo^cWkSV byD]F_Mf)}qO4(}CJF#-' );
define( 'SECURE_AUTH_SALT', '&6#J~PXF.[48KuGI*f|eVijvT!>cH$xz6:{!S)c&a!S68@03 ?&<i!S;Z8~r8},}' );
define( 'LOGGED_IN_SALT',   'Vjo!w%=cK4=AEf0PGuD|sMFuJ1=EuLFkqZ341%4qRV)&>;~*cUIq(jjsRXL[@h8r' );
define( 'NONCE_SALT',       'hSfVx%I[%!a+0_6+cjP#[[#{3K.6Skuz1f_}]O;7/(2gLXD}R@atK /cGz6ec]`a' );

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
