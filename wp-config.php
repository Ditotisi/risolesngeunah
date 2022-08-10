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
define( 'DB_NAME', 'db_risolesngeunah' );

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
define( 'AUTH_KEY',         ',dhK/(> |yb~Vgi%}O0@T+Z:JpzE]R=|]Vo{6s^WB}_elA.oEXYV2#f%A*}M:()G' );
define( 'SECURE_AUTH_KEY',  '|LQao1|M@l=%t;aAm;dW=;66k}|.MR;h#*6s=QQ]@a(r(I:`wmxf]D%(cc  ;PF%' );
define( 'LOGGED_IN_KEY',    '.YZMiM>U%RM8iNRR:>I|yrwa[ADq(#7?l$vb}Z2,]sNrhv(c=4<.uyXgtdeXPz [' );
define( 'NONCE_KEY',        '3,~*G55s=@C;nXz~kS(!#G+.;KD+rNCN`Jn6<WOv-$k~GwM-u9WKJI4iA5MR eJJ' );
define( 'AUTH_SALT',        '#U#W<z+&r)#1Ej`yE+B}kRuoh+UsRSc2yi~}(4:H8hIWnp_nO,7{]2H:_el9I-2)' );
define( 'SECURE_AUTH_SALT', '<Y`S/b:Sw],1ly|?52=Sk<S)SgcCa|1$|0pZ;h?,Bdw6w(j`@fZ=k,7cJUQTQ=kq' );
define( 'LOGGED_IN_SALT',   'xr(+m8A,+4)Q[l=6[>2!HtbeN)vB%-@#pOZ.q nfJfn4l1R:_*.c.uWer*N83`@k' );
define( 'NONCE_SALT',       'XY*CZHWqPjsW 6vC7qN;CJhtrL}2]?JCMz.Jo.vOkwvcR<Gk>GhN>c&9j?Bq9PWu' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'rn_';

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
