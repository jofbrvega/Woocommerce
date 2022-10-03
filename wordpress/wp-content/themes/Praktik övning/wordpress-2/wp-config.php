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
define( 'DB_NAME', 'wtmg-wp-db' );

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
define( 'AUTH_KEY',         '#|UD&By];7P$Gh+t,;s)_%=)FtuhRC%qyUf>Zr8R9[DMlHLIzx&FvZ[nv]X1`$Zg' );
define( 'SECURE_AUTH_KEY',  'NV1ZKQT e^lPLq// ~@-t-Yn c2pKMwtRI`;,Kxt&r3I[iHkB6w=|=O~B]& =Jsj' );
define( 'LOGGED_IN_KEY',    'IT!lPG$;dw36oQ:Ebda<#QegrXuLVI%~ycKkw+obZl_i07x_XzGCTswX+NiILZw$' );
define( 'NONCE_KEY',        'o<:w}z4!z2;)`XGEQ-46&J=$!Kh0:,o1M(Ny*pC[>(g|DQ,PeiJ9hL/@VHIwYKhW' );
define( 'AUTH_SALT',        'K4X.%6)c,JB8E(=|LKf8jKI>X}|h!& lyf7B|M+$,Qr~=pM%o_2/#a UHBHt!|0q' );
define( 'SECURE_AUTH_SALT', 'EH}]kypU,~OB2,}N1NIsb%>:JArN;FgPTn9FS]<gl-8>R.B6zkWNti`f~=`>[qas' );
define( 'LOGGED_IN_SALT',   '2@qT^o#MX*NIqw zRE90+:V3O26Cw{XCyj*IW2rSBv:a9L1FY._wyGlJh[rT:]H-' );
define( 'NONCE_SALT',       'r;+.pU,L0P)s^+_`r@_0nM)B5nHXVT;j~rk~zK]=Trw-6Ds+(KANjfrlH=Q~;i}N' );

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
