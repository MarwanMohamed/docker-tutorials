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
define( 'DB_NAME', 'wordpress');

/** MySQL database username */
define( 'DB_USER', 'wordpress');

/** MySQL database password */
define( 'DB_PASSWORD', 'wordpress');

/** MySQL hostname */
define( 'DB_HOST', 'db:3306');

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'l h 8SpHjr7+T2W`[jGy>7+Xz:H~ZFQ:1S%;5z?uqJ tV3Ai4oJea4d)Ws=v|mb@' );
define( 'SECURE_AUTH_KEY',  '=P/?d;U<&+W+ZW{W-T#sy3,P{I:OrP)xlNW=#?b}~g3<raZB.&Z>&*Wp R.PP=Yc' );
define( 'LOGGED_IN_KEY',    'dUp]8[;5hH.l{xUj$OrI5Jp?2A DYDU[S[ezq:M5C_MDkiB*/N!HTJ``()PgGqUi' );
define( 'NONCE_KEY',        '}nar79}Sz|_wge?$089 efSi=:v%J@^]<DB!R*8<4J?Wb[uvrww%UB69,kZK,gy7' );
define( 'AUTH_SALT',        'ft!pdRpIkcW_#`ita@.2h9#)p~ck?J]GtN@]dS7GQuQ<L|2rbrf[}Y#C3$WxG<Y)' );
define( 'SECURE_AUTH_SALT', 'gdKGAVsN]jD4T_D&4fVv=$a^=pKhHwNAj>b,uPki(C%fIeK?yG(8BBf,H5dq(8!Y' );
define( 'LOGGED_IN_SALT',   '{=G;MF,wbKt]l,!~ F^0oK.Gohf=p4Z,?oCfj-(VlA<m=5,$RI+X.!!nM:h15O&-' );
define( 'NONCE_SALT',       'Oo_vPOMPh+}I.q@$ndQW-TfSWVomG|.U/,be%dWCw6pS0HappFoX^o[:6$E`>J$;' );

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
