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
define( 'DB_NAME', 'edertton_frigac' );

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
define( 'AUTH_KEY',         'V 8~G?)5,4S{*a{L#.jhrk)(VQTJxrCe`8xpg;t,EtwDOjs.B<i=u]+8n$7;]n%w' );
define( 'SECURE_AUTH_KEY',  'dp}WBJsd9>|=K?9hV5Hc3V~9A*t$lLP ZJsi4pcetQ!9UZCz}_UG)l^@tQlW^{[1' );
define( 'LOGGED_IN_KEY',    '! <bxALF{B_v+h!uz8*tCl_5f@Cew:!BYWX^&,$U+p}xr>$$@]WCih4kXd(Acl3^' );
define( 'NONCE_KEY',        '8~I3)ze=f*?h)9k?gM1ZIGm_Ne?l3{(C>h_i]EG{sK,.7 9Cx.YYTMaaX$0jJb##' );
define( 'AUTH_SALT',        'S{;V],4T-qcmw5]N?aEKf_/m]o]f<Np<mW{7%p 3dAB71BJyjF7iD/0;%ypD#_by' );
define( 'SECURE_AUTH_SALT', ')eUSq>n[4*S,Jwicv$%?tNasQsTmjb4jo}~Ts*YHl<b5s-j[!t+bZN>LNL5iyEh.' );
define( 'LOGGED_IN_SALT',   'LA*MSQDid#MEmTHnhQs3|oiH#=AP:Gyi!k4<M6-%^iFxG:>F,8RDsSCif?V=(J;,' );
define( 'NONCE_SALT',       'TMyo~>}f)@D=boI:#X$?HP8`KCRm2[ut>vMk+]/FubX, ED2Zyr4K)J;%,st.2@%' );

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
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
