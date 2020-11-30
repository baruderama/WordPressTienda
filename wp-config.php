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
define( 'DB_NAME', 'tiendaWordPress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'm`C2dQNH(q/WQ[ld_f A_rj*89`irn^Jp[V.Q[kxyDU)A;:mYLel AThL?WYQ@M[' );
define( 'SECURE_AUTH_KEY',  'pQQQms9L 5]O?o^d ?1F;osDcq&c@[y^O(]Hs/LEN]v]f&-jPTo3*SgAkc})lD%{' );
define( 'LOGGED_IN_KEY',    '<=)4nSUs@D,KSss/XVad)^*L@2HtiA.:Q8KbC,):2 S-ge4I!Af>D0?nu`;BW HW' );
define( 'NONCE_KEY',        '-M?@t|yY]0Tbw^UnZ$*oO7:]+wip~[:u]<<.0,b,9xyqa7GcvKSM|DBWhvVy]a<h' );
define( 'AUTH_SALT',        ':>DWufI,kp?C^.8tWw Ki( v^|]zg|GGj9!oWfVs&@<Hwv$tV#$b*AFbcq??XD%q' );
define( 'SECURE_AUTH_SALT', 'F1<)$>xRjg1B/Y,^[3s{we{~P.kgwSeVojC23*bP]|H9+>>xH2=^puTd6I%r$>l(' );
define( 'LOGGED_IN_SALT',   '2wSHEjn?[D]+y$gvds#>W6)xE7NwhC-%V/MV2fP:M^2SejpOSf(iZ>ekuV0:39 w' );
define( 'NONCE_SALT',       'azeEspF}drR#-UljGLq(5hD$^et-Vl0[IIZ0iLYDz?p=]T_R9$%@$3qF$O%#!nXJ' );

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

