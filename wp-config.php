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
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'sweetsclick' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'M^0p8K:Bz!+dFS%;Fc9P4 Q934l@!fr6/6^t*e/mh]08ufxe,Oi7`]vyygPFUTt_' );
define( 'SECURE_AUTH_KEY',  '!M#K{Qrd4=F/!NJfex9?%{snu6%J*Yfh(dUEUT-c`&CKvwuXPZE7[U/KsX.hM<It' );
define( 'LOGGED_IN_KEY',    'zLk(sBf4e/1_kjq;$|alM={>8ZtM46A9^QWa[IT`Y]`08T@0^N243_GTrBaqr@(1' );
define( 'NONCE_KEY',        '9yVK*$Uu9[.S~aIp#US4iMi(E~mB*P xLzDpzwIUFg-m .AA`];?(*>1jZ[I,9x-' );
define( 'AUTH_SALT',        '{g(/foap(i~x/NO4=n^b`32EqQR0=*~5NB}9n@^>ip-#{KVZEf/tP(lM42xu{qqI' );
define( 'SECURE_AUTH_SALT', 'e^>Zc&*@T$I0WtOG<&:8_Krb,36|*P`C82]nd.DI}Y#THug^<u,x/@Hmt|J*l`$M' );
define( 'LOGGED_IN_SALT',   '2SW<JTx(?L;9b9v^ c_g(;%AG[tET}@A}#~sPt.2Z0+?,o !`}mmKkp^uv5=e|<|' );
define( 'NONCE_SALT',       '_`~ucX*`l{B$ d$Uc)[]wqjA sMR-k3XM6EmX^Pm@C,9/s)Jls=7dQ6`&TCc}(wA' );

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

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
