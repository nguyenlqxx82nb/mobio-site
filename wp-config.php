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
define( 'DB_NAME', 'mdb' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'j4))G*.FtR]`.b`b6f-?_pI|3l[KJa7Yk(Wc<yZP.,`-hum4u-YqYb_$?Ri69dvJ' );
define( 'SECURE_AUTH_KEY',  'J=#svqD!Np!@=/q2.7`2$7V~#JU8^?1R(?Y7Q6.o$>o58ieQUw!K_w_/t|.xg&<U' );
define( 'LOGGED_IN_KEY',    ' .3~;Kr,K>7Jr<E*O`qMu~q0h288d9/=3ZDV?EH}#r]J,liwRW1=9+k$oa4!X3`+' );
define( 'NONCE_KEY',        'OGd_@&d2jg3Ai0POEWY-RuQXCW[G`(yAo?#>A__RyRcj~6vz3qUS9kUU!eS7kQG}' );
define( 'AUTH_SALT',        'F.A.o.k832BY!)Eqz8]{97Jep^M6A/SSb{wnyyGUZI6WaCxKQbmhy}u^thH$t_eR' );
define( 'SECURE_AUTH_SALT', 'mdS^>!+&oP&kaE#%|zOAvIM)vh>9._MhfR~bSDiCL*/m-R@v0bK^?MNa.IhVHK ,' );
define( 'LOGGED_IN_SALT',   'UQZx37%M8~[Xep1)3K]8/0]Z`^8q!`Hi9.74|3mqpapoJgdS+oQlGx Mqxr3Se`%' );
define( 'NONCE_SALT',       'Rp`?B& //&#wM+dOaY~oScgTf~*UCgHt|j@#*do+s<LSAJ1CN1^<NUNA=cp(@:yQ' );

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
define('WP_HOME', 'http://localhost:8080/site/');
define('WP_SITEURL', 'http://localhost:8080/site/');
/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
/** Sets up 'direct' method for wordpress, auto update without ftp */
define('FS_METHOD','direct');

