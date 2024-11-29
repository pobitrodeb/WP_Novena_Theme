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
define( 'DB_NAME', 'novena-theme' );

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
define( 'AUTH_KEY',         'o;pp<qv||)d!Kezo)G1CqN^z-~F?EX0L]_LLi~dz5YzLf5pYk(mJSpM&5IJOfMfk' );
define( 'SECURE_AUTH_KEY',  '#0mBq^l2/gq)x9CrUR=Oc<2zrQ<58]SL/T8-hA[_.IJk(7]0ro#OXS!UFN^3*6Gz' );
define( 'LOGGED_IN_KEY',    'O1V#wqx`gX4gVy1nU|ARwBToY=dX~EK<Om!X{tUy`k, UE+j+4fi*b(ce[o~4Xxw' );
define( 'NONCE_KEY',        'V&ski-Q}RG4_(gK#WLg?)b-3[3pr%y3A)`0bT<Xh@CGt3LHyt+bioWu+}E9TY?li' );
define( 'AUTH_SALT',        '-$PYd7#S.nZM!Cw$]Im2^&Rc<dFn.Dln!jh4.!iAA@rOmxp_hNj|hk>x{+dmapA<' );
define( 'SECURE_AUTH_SALT', '2mfH0f0#F?xUd}?.Ny<MAS:Jco0O5vZ/$FpFxPlS|LeKVN z{X:3Au4]3~U+]3|R' );
define( 'LOGGED_IN_SALT',   '~mX6(|{N`7m,|&S>(Yq62ApR9Q[nX!.^`MK*.^GJajn5|lRU#j?+cMSSP%s[J|e1' );
define( 'NONCE_SALT',       '4NW$q$z!WNCI8P8FOkHid pCQYmwjhA7nSoMr~B;Fs;j(;WG{C[H_wR0a~|@}RpZ' );

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
