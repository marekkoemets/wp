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
define( 'DB_PASSWORD', '123456' );

/** Database hostname */
define( 'DB_HOST', 'db' );

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
define( 'AUTH_KEY',         'VS6CFMMJM9rXKE9078TIXM00~|pcmh&OJvTAW;4gv)$p-<Wa@_Z[}P1/8@m4:`(X' );
define( 'SECURE_AUTH_KEY',  'Kq6]<Lrn,mWd7i{J!`/Q1>|-q(cA+)o0G<2amht@il(nF%is}ZY]M0~+_i$Hvo,<' );
define( 'LOGGED_IN_KEY',    '2/diqMg0eD]4p](#2YX8*XdzV *Y>282T{.fwM .W=onXH*mTAL pEUnGyV&$@I^' );
define( 'NONCE_KEY',        '}3[ i)Cu^u%$efe=I2VEx)./lw;{l^1rjr?Ur7MUb]_RxHc)e8bCsmg2;N?] H^(' );
define( 'AUTH_SALT',        'rNW8!LaL?X<{U ,?;P:Z#+]{a:_30@`}Rg]1i&|USkT-w4XV-J#CO>NTB|RuL419' );
define( 'SECURE_AUTH_SALT', 'AJ+?P%=CH9AFmW8aCKf}rTg_^5;BJNo1gvBm(ad-kI+9_9bXcC%LiMT=Pa$@EL-F' );
define( 'LOGGED_IN_SALT',   '>0B}^;7IbX,hQYda]?XY?7[6Du^twn99hBnD*,;[c8Ghu$KG*ly`IlIQ)WxV^=x{' );
define( 'NONCE_SALT',       'amz79=Bet%eGG/{f)(=(,H]a Jo`m_rfNPR,n1?Rp~CUUuW10M/CK{2A5A~ZzDDM' );

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
