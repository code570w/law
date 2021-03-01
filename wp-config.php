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
/** The name of the database for WordPress we added*/
define( 'DB_NAME', 'lawdb' );

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
define( 'AUTH_KEY',         'G[3V4-m9n&@{^OLb-k`sia$(|W}%2pADrrJBDhw%CXmog|zbCqw$e|1<_b^1lc()' );
define( 'SECURE_AUTH_KEY',  'RmBkAICLkU+OW8L5#C;.lHf~94M{^m&/bd]TYAi_%[c.Z)mePy+GiK9`g<F8l%2z' );
define( 'LOGGED_IN_KEY',    '|^0=e?^OH#u5;@;CP<V)=h4Jb_fiDy1R)pr?%)G>hJiKsjp5H>+>/#=/F.$I!es5' );
define( 'NONCE_KEY',        'AwDsY^1P<|B~MFOyUDE~uCj;__h_kL;$%1917{;1>eh;#gDVs&A5s 2,0h:a%)F.' );
define( 'AUTH_SALT',        '7>,Ns_JzBh^*|q{Q:q+)IEo=A->*hQI$$^<4RhN;$N MrhcvQvWfdgNRL`}VgsEG' );
define( 'SECURE_AUTH_SALT', '&vN_]}l9$m(BFz==RX,=bXG22YA1z#|i|(R&FB4T,+GW&:`d09Qf&UJ6~9^m*;=>' );
define( 'LOGGED_IN_SALT',   'AU<XiBp:9ws>KV(J:CANl?(~?P)f6wKd=b$Pkmu p_Nx2kCYgy(XVjU^]+RT@iB&' );
define( 'NONCE_SALT',       'K=b_iz0h~3Z<if-@&LIXEu|2LusounzZ{`pr7q#u:97Kcw+V[3#pnS^E[-D5FlB`' );

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
