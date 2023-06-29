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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'camposville_db' );

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
define( 'AUTH_KEY',         't?#[p~Eo&fKaNhp:1G3&R5h)JCV{4@azP_mA!XYIuu[N{5P5s+S^2Hiui<Q!?z,L' );
define( 'SECURE_AUTH_KEY',  'w4D;Lka/G9!8JK{UxQ2X#?cw<PDigpmt#K<((}t_TYPhJ]]O+$EA_kXCQwG&S5oa' );
define( 'LOGGED_IN_KEY',    'Ipc]N@,k(+b}wt3-r;K,d ;6MK_]lbpY$yWn|to7(R;4~|)<!n`Lcafoma.fbM<>' );
define( 'NONCE_KEY',        '8O>i5,zmzxzl9Yj.kvKCJ+c6K JjLYBM;kb5P:zs:{SXj(4@;C|deN<9_>D!msvQ' );
define( 'AUTH_SALT',        'Z7b/Y6b;Qu74m-no%KbrIDBOhE nOC6=iNPANf=}|Lj#]]8lb7mdEP0=aBj5C5/R' );
define( 'SECURE_AUTH_SALT', 'pB;!.X1/I}/-uqlk)#o2*O,6_Fh%<Kz,P8>q8p#aLsYypADIx.qb~+BaHp9C[?wM' );
define( 'LOGGED_IN_SALT',   '6hH8A77<0_5^Z|#fgSJ3{4um~}$mxM}`I&%TR7VVAt``dSk,I+OwA6a|^(go?<i3' );
define( 'NONCE_SALT',       'rg[3yI7[/A*tFN?,JBR!`[V=#Bc57}<P>?)R+!iDPe5DMok2g/}rN1-(:Xdj/%<.' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
