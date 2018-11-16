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
define('DB_NAME', 'portafolio');

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
define('AUTH_KEY',         '8t~:$>s9A7HofL:yxbAfUKnPAPpJpa(4pt r$*j&NrAO#VzqI0e-uVe`HY$#4bs*');
define('SECURE_AUTH_KEY',  'JFVHADNPb-;U;ZDn f,6hnb%_&)kwM{g:}adkUFW~SqlNWgWQ26ROY1o9^rMx3wl');
define('LOGGED_IN_KEY',    '0Pw8i2}SFt=NQJo/p>>@x>m,?qlh<HL)A U}IRkW8-hhe&u,Q.FAg[V%(ge<Ly9`');
define('NONCE_KEY',        'do3F1}iz}:,< HJ?I^R8vwu.4=JLi:#ZR[ygx6N<uCBU{7CDxWPk08k,QjUD q|%');
define('AUTH_SALT',        'c7]0:mz>zF^<1+v5O h@#m>d+F %mte)7rDk3<i>0(1Jyoj4?y4Q1^]GtG#kysn[');
define('SECURE_AUTH_SALT', ' N<n;PgIFEU.]6EwAtf~(l{LA#MB`5|XQ D|~!x`$bxdL4F|aJJiM5ymogimh>o-');
define('LOGGED_IN_SALT',   '4a8<E$sP8og>rt=5K#M[Nu|;vhw7rxRuu=ZwY}w1-4;HaR cndRdfCJAc)Hzs PL');
define('NONCE_SALT',       '4~9LVLpXX0?)5&=EK STgqKGRBIq65Tb*dkhxA,>&7<GN*}!Ik^S&PS[]YCo9 mx');

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
