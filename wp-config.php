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
define( 'DB_NAME', 'wpgit' );

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
define( 'AUTH_KEY',         'gbY8wNV^8oC8B8CYqX@I7]zluCG `&h&_0)_qU{6!0TS9x51rj-B0YJ<>vbqu=na' );
define( 'SECURE_AUTH_KEY',  'NXbI=Z{dlj^s*1nddP:1Qb<q;[8^R{P.~1T{2#A (w^nKgs<E Y$N6tp@U40!m%N' );
define( 'LOGGED_IN_KEY',    'K]d@CZ)x7SyZ-+` v#A!&mABM.50$1T~ `wkRBdT$Pw&sH~;5fOJEY1dRf:RMoX*' );
define( 'NONCE_KEY',        '#Wq_BfI[p{m|fGIf:o){qJveO-syHLzk.m3br[EcFwY+KJfB8q+zEj_(=Pvx806#' );
define( 'AUTH_SALT',        'NmHf)*^fO|@%,q`5MhGhtuX8I1N4]G}<w2? )QQ5Ob.[1..dcV8kqt4mf`i92sor' );
define( 'SECURE_AUTH_SALT', 'kH`ppp;@T$xvi^Cw$Qz,>Ch1nijgU#54c$-d~ >NE+ym]zCIHWDBO{bxKL@*5&sx' );
define( 'LOGGED_IN_SALT',   'ky1-gr4Pv=9Ei!6WA7g{x=d3:&krr-{X2. Xij(7%*+.*Na1:2K/B^yP+d[V(i<8' );
define( 'NONCE_SALT',       'R)0%77Pr%C*(lZl$KH>ww}vPxm^4E:I#oOM(~?Om$xmv!rajVeDrCdFy2n,*PLEi' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpgit_';

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
