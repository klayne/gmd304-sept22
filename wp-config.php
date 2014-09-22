<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'wordpress');

/** MySQL database password */
define('DB_PASSWORD', 'wordpress');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         ']H,D8.N.1cp*4@g#F-2,{[^+{=m-#*bB>+/q ,:eiI0Wa)]OoU+nUz Pna}Cm%s_');
define('SECURE_AUTH_KEY',  'jLb,Yt]9kc-tcUrLcchk}YJSGg7 MQY!3R.@Y76u<l-9BKb3.P(Q%P1!Geu+Nvzy');
define('LOGGED_IN_KEY',    'Wr!6>}EA{0iHR6~*U<xi_V{YWc3{$MY67#nu>8vH<X7wm@Q;X}(h$)_40Y^dXtM4');
define('NONCE_KEY',        'auO|&@r/I_u!z|`,O7&nH0PQ?}J&c,i15xzI)#v{jEmGoaeLZK<s,Lj5ICc,/;0G');
define('AUTH_SALT',        'bl}KtdTta-2&*Qr6={;G}x<st:+Hv%=||UG+i3*.pBEhLD(,`c&P)ctxa~cb]:h0');
define('SECURE_AUTH_SALT', 'Ld!#hB$1z?6p&[)6v+[fP3RrD5`gRq[jS!8JCzN|=t){D|45;;|z&D atW*bge`]');
define('LOGGED_IN_SALT',   '+0do2-2*P]>s jOtn5V<*LUj.PE}=wBh0{,2#$Z_6gwlW;r:1yx6$[p:X&6e,<,y');
define('NONCE_SALT',       '9ySC}PX)aiU~rC+-A[4?j,RM]v4^l>uP! jv`6Q]Lm$1Ns53?^]9Pu<7<!v>_+!T');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
