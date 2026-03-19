<?php
define( 'WP_CACHE', true );

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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'a)TqU9@puWb>U*)j_MmagKEaz&0W~qo5w_N>)z-H/HCf$9&oe2.yLd~UG~zma~.l' );
define( 'SECURE_AUTH_KEY',   'K6 nzu]*qno0G~q&e7`zQb>IA%L:yt8q`]pK:Rvmf.0yEe6v VHXuc) @~|ExY+z' );
define( 'LOGGED_IN_KEY',     '=*HpH[yrtU#<7xm<NnaQ[b+aGLBkQf?r7H%a;%EPd 6dA`shzYjc7!n:q5`O%aT?' );
define( 'NONCE_KEY',         'cY&{m@A>([JBZUxqR`D8!?nU!ly$/u]|2ZZ!7MZtebw@{L#xpo5u{)!/E~IxRc^S' );
define( 'AUTH_SALT',         'r>i32wkW>j3mj`sEG(pF{+iY[Sg1!:N~dW7N8p`hqPm4O)U$amMqId$6,IhB8;[s' );
define( 'SECURE_AUTH_SALT',  '%rZrgzkq+k1Xd..s}@*8W0-@tE=k!)2]+C|Xk0<Ew4,|HB:^V*}h3xNIi9Bpum~j' );
define( 'LOGGED_IN_SALT',    'bSN3Ur+9cGCW`u:Vy7nE=<56ne0QD@Lm5PhRBV^T$P%;w4%v;SmElicNPl@l1eK<' );
define( 'NONCE_SALT',        '1(8y6vO 8.z@%jzq3jP:K:X5i9u/R]luc7>*W8b6Cpagi*lpSb-@k/m:mTb7PG~$' );
define( 'WP_CACHE_KEY_SALT', 'OUpVciU0HFtUZ`+2bj3*K_R~8J:75%+;&(_T1}6vD?s`30o,_`vq(S_?^,bmzwrj' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
