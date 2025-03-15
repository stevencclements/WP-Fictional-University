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
define( 'DB_NAME', 'fictional_university' );

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
define( 'AUTH_KEY',         'm^+2 A:Q*MaCGg-<R:tCjd;a`Y5g.BO`WrD?x<iAtEp/#~w.`Q@BJYugkFe88:mn' );
define( 'SECURE_AUTH_KEY',  'N9H5.eTGp5H7@)xJeFsSXv6n/@Qzu_54ii,wPOaV3us_5U+$7w%Es~z9Q@u{96-<' );
define( 'LOGGED_IN_KEY',    '=^!msYyOaxa!,cpt(fDjXJwFFrL_)07ltx/qK0MD1);sl{lZP.(P6c|*m#PAyiJ?' );
define( 'NONCE_KEY',        '>bx,!YTgf y!RPl/Ydy1faTHFa0lWlp6LG8HuTdm)#u*D ^57e((J1]C<?)7>C.o' );
define( 'AUTH_SALT',        'v`Qh<[fv>OG_v,r0d 5`HvN&FqVI]MKZAlssZ}GX,t5K{f43J/YMo,A7{|CI-qmz' );
define( 'SECURE_AUTH_SALT', ' ]7_YM-m[L_CDo5C{Jrw;N0OPhU*2mX~[Gv%PgNLE5P%@*h6N>(F&z;%v(e{G,#O' );
define( 'LOGGED_IN_SALT',   'PcUfTE8xE%|EQOcO*~]ObdmGO/]4YsX38MY~z%4G1Q(6O=U,BF[}]yv{;QEp05PW' );
define( 'NONCE_SALT',       '^!Y`ZWK/9F4;x;1V]e5;e(@wa`yJW(7z0,&S`}vuf6!G0$R19j}Cld{K) _8mk5:' );

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
