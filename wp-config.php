<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'touss_tassar' );

/** MySQL database username */
define( 'DB_USER', 'maicha' );

/** MySQL database password */
define( 'DB_PASSWORD', 'passer12345' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '9i~CrHssR#B/J-?!bzht$Z3Zw+7D?&E!gy8[lbf:7,rd_J0_}g^}ww{e:lY$ds~-' );
define( 'SECURE_AUTH_KEY',  '7o=qO6^&QJ`fqn4hixwv9kU_(dIqUfs3;C;$_S)z-G-XQ,P5yqq89q,4c]JGI/TP' );
define( 'LOGGED_IN_KEY',    '~,M^KOG_3Y`bjy]#K d/Uf<m2+6eETHm3YU_lZv@jB&!6kbzZh~D,)i.Kz|>;VQ!' );
define( 'NONCE_KEY',        'LP?VIqSA691X/mx347LloQBIAsc$%_#W4Oy;Z2S/.5~^KL-v@eUFFC,IZD=BH68q' );
define( 'AUTH_SALT',        '<xV;9IP~~`^{XSO@H2s$ts(1&# d#NF@$et0aqq9$dgrFB-cL z9a4rU[Zfuq0e,' );
define( 'SECURE_AUTH_SALT', '|ehOv. }r+QZM=&nKd9?Da)Fo`FJ1EhzTa[fNau;D0<$v.*e]}7+!&`_:ar{.Lrg' );
define( 'LOGGED_IN_SALT',   'l]CYHGdW4Bi%=T9Jb%@cy7X&pSSNId* kz-O.ixpAPrOFG}b__yZYMncf0(7H5^s' );
define( 'NONCE_SALT',       ')%xI,~<Mnhl)B?pIPGzm5,]aB7D3p]8;|=4+_C.~HUiZ|:1VCOF1{2M_/u|W$P&h' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
