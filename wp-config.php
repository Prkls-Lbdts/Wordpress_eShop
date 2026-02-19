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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'password' );

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
define( 'AUTH_KEY',         '|T2q/~7Vx0VJ()miWb~4_n{CT<jA^8B$$`NRO-tKJI)}7kBTJ?aN$+_FwI+nkGOO' );
define( 'SECURE_AUTH_KEY',  '`jG Jxc?BPg/|*d+5>CzjHk-V1}d:Q5YG)Dee^Vlm)SDE_%a#8o0T-rb*xXR$=L+' );
define( 'LOGGED_IN_KEY',    '#Zft2Ne{y]KW $${x1UoMcQ`Ib@=XWtIO:^a_>cwP[jCwO4F%%+oJ7xP2x```6.w' );
define( 'NONCE_KEY',        'VM7~i::59aB=oghH3%_5g4u8ks2W9QU7xg3v?#%_NOeLZ3/L8&iC|#MT;oV.Ko:h' );
define( 'AUTH_SALT',        'H.2{7u0xV!a])3w?olnn2CkQYo<iJ9RMfS71sl8$HOi7(Cwe%=tzy:PIC3CvsgtY' );
define( 'SECURE_AUTH_SALT', '%?6qjm5ToUliC,JDWm$hbuzGiofT8DNye~4j01}u}2xlhmZ!k^&)}268oTrlK2/l' );
define( 'LOGGED_IN_SALT',   ',Zbk0x:3+KRfd6^!h6BOd#x_=aA7`i8$f#l;qc:on+6q~v[Q?LdgT:yhU,u_;Rb3' );
define( 'NONCE_SALT',       'za!o.~xfkU>}N`o[Hu/ZuPb+~!!b0K!aPMR;[Jc^U<|cC6JDxYhn)?.hD^>`~X4|' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
