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
define('DB_NAME', 'wordpress');

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
define('AUTH_KEY',         '5ok#lH%Dd=Xw)yc>mpk<f^P.?<_D/]Fq,nw$[z[brh{Y! :&Bg3`jvw1F9-2%)tW');
define('SECURE_AUTH_KEY',  'by1/HRcVtIJ6>m~4?CvxwD<nYal9dZfn%>}Rhsno&~pX{CSl.#Be>rZASXe(jKuN');
define('LOGGED_IN_KEY',    'QJ mRM2okz 4Y3-[nqGt6Nv+V4DfwNh<]?iPiVk6qLY$H3Y@g*j*&&#v#QUCs`X%');
define('NONCE_KEY',        '$&u1;A4tv/0HeQSM?&p,y!];+YB!|GO-I^fj[KFhN0e%F;%8wfjJK.3Jh~/wn4Ix');
define('AUTH_SALT',        'uh=,4YJ)1xp2Rh1}J${8_(<`yg5[HC&TL::b=|W|<Q)=k=W#;k.bJkKtqDAOf1z%');
define('SECURE_AUTH_SALT', 'R#*0xcTu7{i~ME)5T#R7-c_:)<$tGubn^ZiI0|Bt#zIO{QU|%@qP9;-Zqu*rq_%F');
define('LOGGED_IN_SALT',   'sEoluw <LsYbsYuiP2EGMIGoVHvSV(#tV`U4})x{+j_0G1SS;S$S[q|U8*?R|vc{');
define('NONCE_SALT',       '{$S hQ+PNk{[gxBy<zELK1x$d@k>vgJt CW*Wq.#4h(/D|oa6xQ2s9ok&A }yJG%');

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
