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
define('DB_NAME', '1002Pattes');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'u$vMI%r|ZG1_S7Oyw.9,%Uh2`zg[Qm6ZN1Zxxgn$|0lv-A}=94J{ZCy#dZm@*.Q<');
define('SECURE_AUTH_KEY',  'bwk)7KZFBx>5?oE1Jl@,AK 6D9luI%]FY4Wije=v~K Fk#3!/RmHI7:=uyh?[{9w');
define('LOGGED_IN_KEY',    'qun4 J5>1X;?9qVZvW+4;Vq]0.blkXSwKF6bUdC<zHz~=oHM,fS*}rdAU,R$FZ6.');
define('NONCE_KEY',        '4>!_k&SyO<C1Yq}y# _=K{aE7=K`*@8/giJ%cm>F9sOLMAhko2CSL1>ZNmIuCb}r');
define('AUTH_SALT',        '.p]1Ca0,O&FMTWC?{ KhE-QKt g*GJ;)@K;X:c(E>RfY&w@2_zh>SMED@|3B+&P(');
define('SECURE_AUTH_SALT', 'fSq0e$-zr;?9jtpz =RH3]S?1vXx9L8XbDte:5,jc=Nwmt;9Y*[yM|T63)CR[&82');
define('LOGGED_IN_SALT',   'Ql=F W^`fW0S[bE,|_7WBVP?kbt]6h]KHMu7ZJK.zoa;L$S uYpQMHGQiYtl|Fp4');
define('NONCE_SALT',       '+gC,pP[ljVoTbK#OA(j#,dW+snTM@qCb9##uNaHUKrZY)RHcawLN L B-IZGP%.J');

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
