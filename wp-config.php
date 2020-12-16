<?php
define('WP_AUTO_UPDATE_CORE', 'minor');// This setting is required to make sure that WordPress updates can be properly managed in WordPress Toolkit. Remove this line if this WordPress website is not managed by WordPress Toolkit anymore.
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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'domaince_blogdb' );

/** MySQL database username */
define( 'DB_USER', 'domaince_bloguser' );

/** MySQL database password */
define( 'DB_PASSWORD', 'e2UZ~E%?-}CT' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          '[-^lS6/Ag@ooM~L5{<rM(Y:HVcL6D;l!BnSf{c6v76W}VPw7|PCe]t|w{@l7|Ch;' );
define( 'SECURE_AUTH_KEY',   'dNa+J:!&~DEXt/_l`_A{*q@;UzjEx,=LK1=Vv6po:9&)!kxtJ.*mNF]n7RRJ+kB]' );
define( 'LOGGED_IN_KEY',     '59{P o%8?ZfxT&*j%g_dfqG1X=sy`25]c9mhg^(kvcs#S8s[;l~pG{>K5xhL;fTp' );
define( 'NONCE_KEY',         'tV2wnT<.J/`*6WQ4d;sI0M>^rU.:koiieav8Q_tEZUXuzRSt~/&qU[Gppa;/aB:s' );
define( 'AUTH_SALT',         'w{rfq0;)<zCK$%n%xO,i@!E:TN9 Wt4XH6]*=R:nT9xNj6$E)^Uv|7O+%JrA$-BH' );
define( 'SECURE_AUTH_SALT',  ' bhoEZNKZ117Bjv{z;VGjeF+X!#m:b~qw[=yS!34ZkKQ%`1~H}jk|%*3M~y{,q%Y' );
define( 'LOGGED_IN_SALT',    '2gqx3JU#EifF^yxzs}+nN}/(*DZ=)gIKN^S`-:qra+*Ro&BAco]a<b@sy0-Z_kY3' );
define( 'NONCE_SALT',        '+@hH=LLh4R%E)0av7.OrS7_7wC/fLR@ZVxA<}##Qs$RNp@u^gx>T-*_~&$qI1FD7' );
define( 'WP_CACHE_KEY_SALT', '3r|qy?f4]hhA}zC[YD?W<C{f~p?we`H8JAQj!R~u/^HNW>Gj24Zfmh0~/4[xMeW3' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
