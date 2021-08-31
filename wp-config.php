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
define( 'DB_NAME', 'shaping_spaces' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'j)2/.Q<7%=D0uu<{v#]8CMk;kIPjuHT^t]Y5XAbQbD8VL+lY4^=vJ;<*AcT a Ms' );
define( 'SECURE_AUTH_KEY',  '>KJ1WKjX&ehb!;t>C{Gpzt~~&<cv_CR/n2tQd;4aok8Di7&XYBL/,04n9FV5@?/P' );
define( 'LOGGED_IN_KEY',    'T:BZ,%7I{RLl.gkdXMA>4Kez,oS|In8lQ=k8t{T~K:AX6,J3!-+7GAFqdWw[ZQu2' );
define( 'NONCE_KEY',        'XG7Z<`(N!lkkm;/9w ;yx6ORntvn~&P[#aoQ#f,JdU:rh ovN#@2J -kH+FSfs?/' );
define( 'AUTH_SALT',        ':DSzhp~,_ka&Ygl,}w_e.5ci.!_Ra5+Le.TvzUm=^ZWkry.SFI.%zp+o*j~);gSc' );
define( 'SECURE_AUTH_SALT', 'C[.DS{UfR8o#;.%3bcEHM8W *8uVgTZFLYES=Rm|LqE@{zm9;W#=:gqS1cGy1^.c' );
define( 'LOGGED_IN_SALT',   'P.s1H@Q?tOu}z|iZJA4b7!bLw3H]vH8{>.g*1k~husr]Tpx)a--4=07Rw`R~;d55' );
define( 'NONCE_SALT',       '_eX8tX!Q+Df?<D?[nYE<~=a,^8PVc|EM&v<>8sHlY-E9dj a0 ]<06W{@ NoU:^V' );

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
