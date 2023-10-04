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
define( 'DB_NAME', 'mapetiteplante' );

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
define( 'AUTH_KEY',         'Tq #b(qA4YWXiM^uGuoxKlWa*!(zV1&8m%JH&ww;N?4fnug5zl68wqDTUlNI7 3+' );
define( 'SECURE_AUTH_KEY',  '(E]4q-8$!f$Z[x]9*v{eumfin5FwR/jl~p{Z hGH(A o-MAd;o`i4C%m nH0i]L_' );
define( 'LOGGED_IN_KEY',    'pk31GR<3CBf:3nc8j?a*kOc`Seprmpz]K_`gn3L& I7X:!7XH9!4S0/9yz{3irNi' );
define( 'NONCE_KEY',        '>bk?ifke+dkR/}1)rP&E`(rOd_M@O}IqN~1]3UDotx&;MM~W+.%X9)rh^Z4i6vwf' );
define( 'AUTH_SALT',        'q}.%T9G ZM0_lZ.^jt1a!}/[!c@c80&H +q6F`ANy`/,Okc3BGc_f=l^cwfk(%][' );
define( 'SECURE_AUTH_SALT', '6 N;%NA)H+g!oueu(2vlk8-Y]b9GQcn%xm<,Lso?Z7w[Bd*?8h_pVmWnyG)xB_F7' );
define( 'LOGGED_IN_SALT',   'y^Z!J~2PC7kg?@ _F.;h>Bm845BIS7-w~JfR@Jb{_98)=y46~=+Bj~^S|yCJEJr&' );
define( 'NONCE_SALT',       '$)@bIu]o<(09AGe3BvHl~{DCjUkRiHDIEavsNLyITU8dU`s#r:tEPE(`=pdC,MHE' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_petiteplante_';

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
