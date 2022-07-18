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
define( 'DB_NAME', 'project01' );

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
define( 'AUTH_KEY',         'G+dPOE0fc#bT>@>MdmI9c?h_=&%j^W>Pcik@;[(aMh-R@.^}XU5v{erwe3jyl`,j' );
define( 'SECURE_AUTH_KEY',  '|N,hVZD5yMc5%,%f}x3cVq&yc6$_&tNH$8=uWqw,NAwyUWm>%8p9USq_p%_G.mq?' );
define( 'LOGGED_IN_KEY',    'f~zUV.!yzC0_ouA^&PYeVn/>>`[=G9x-9$B7)KaCxpzWk2&6L[i<+7O2pcx!C3kW' );
define( 'NONCE_KEY',        '7*^;l*p2sfIUgF[h@1e~4oc(M-U&;>5:; R%M(aQ9%^is1?PoL> ?~{vHLN<i#O[' );
define( 'AUTH_SALT',        'ZT7Wnv;6FfU~JTaltxTWFnU4Sb6bwB0Fvl Wl<fFB6Ws&Pc:)aJ~Roq~r~:2P4,k' );
define( 'SECURE_AUTH_SALT', 'JQ|5(*pKLhdK3HGrcE*:Z=kTT:>pHJ{[cy$:{O`$P$.b)bh7Dqm~a,HEQ?J%8{J)' );
define( 'LOGGED_IN_SALT',   'Li`ZmXM(<LmqC9s4j#<Sx?5u/at]2R;D|ipJ0Wb7v,Rk0m=qn5DJ60>1Q{D:Xb6K' );
define( 'NONCE_SALT',       'Fs5S |02 Z}.bRQd`BE!%w(MFmfAgj)qXRSeO?x2J~B3NN(ugRZ_6Db,ejo&Hq%*' );

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
