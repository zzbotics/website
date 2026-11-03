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
define( 'DB_NAME', 'db-wp-website' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '=9RvrQCk2H`MN)=|X.cic~2LOO2;h+wAcu*0_v|_w~GEEl?B,2eAGGYP2r(2)435' );
define( 'SECURE_AUTH_KEY',  '>8wY`;)h*q<H&X:<0o$;^U.NlRf]%c.Cnd>KN0{FF9.wo< 3Z6Gj_SX1of;95~C8' );
define( 'LOGGED_IN_KEY',    '.N`O!PD*7y}Oey^b,Ne%mg_7;(IksU|K7&l<=bsY+Gh5;a!V8}g}|aauuurlv.aX' );
define( 'NONCE_KEY',        'BNd&uB8z@RE0K}J/5&aE4h$os{88MZCth}$|3pS#d_{V;AaDwMoi^v[NBfbX}FC$' );
define( 'AUTH_SALT',        'UyB$(@W)o#pJ#C%|=je%3Sr?;4tpien44#8,1F[+UOQN=%TlCLsh9Vad-kXYIb]@' );
define( 'SECURE_AUTH_SALT', '~[j)X;xZfQ=&oJ}wC8?K&pdEURYBkk#$~6G%Nb%20K~ooI[bAF5H8?&1S|GsEIg$' );
define( 'LOGGED_IN_SALT',   'B|/Tm*_+#%6?YQEHE$Pe*LekSory*8DAtqi/D7|(`&qf*B.I_!,s~+qsKUy(+J;9' );
define( 'NONCE_SALT',       '92}&.xcs$7f|N--UEd4@LS;=6AiaCFF{0N21O|?~p?3KJ6X>N|7mgu<FH>iOT)yH' );

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
