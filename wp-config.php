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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'portfolio');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         ':8IkS4trkaV<CTwVm51e)Tq_39ZC?HJ W^ljQa]Wnw$IO51Wyw>D*3E{,nFws^%p');
define('SECURE_AUTH_KEY',  'S.75sRj7#YMWPC3IS8yELH3>YigTj_{gqtEoupPKy(Pa%(bFVg;_?KS]6B+1v}w7');
define('LOGGED_IN_KEY',    'Tz*ll&iW0pB)[S^cyG{/nDIi&W[gUg/Xl< {]=9?DZq(z0jvTlrsEE/^*1,rxd,L');
define('NONCE_KEY',        ' klM#x[Lp2=V1[tL>2T~Uss@P3*O]UCi@XgjqR>0y8nIXO/HTCgT:,TRb4$aRLlz');
define('AUTH_SALT',        'vf=G^k_1gCddKxY<]UdG]V}Ee05k`sm/TBS%qz`#J$VyWBx5n~zKU4_1ByDL.LjU');
define('SECURE_AUTH_SALT', 'W%ruM/Gs)]]!8<mAuEvf))cJ.<{@ SU;EOo/cT[uMFVXbmC+h{[pvN+7+!vNMc_B');
define('LOGGED_IN_SALT',   'L:-[<k_[#r}o31ng/{Yh%,yKVX#v9/(v_ru)(M X~<D79R-Q%Wt-?4O&82AI@c@2');
define('NONCE_SALT',       'M@^Tv^7g>xkv>qU{gukW{8&( +.wv&F!a/VlL}$b+-=r+9Bm{bbynN`-$UKSbRKd');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
