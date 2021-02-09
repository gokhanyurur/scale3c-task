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
define( 'DB_NAME', 'scale3c_wp' );

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
define( 'AUTH_KEY',         '8sxL[Z*dn$4/Dvn~wN>32isMhJ>^*s(cUI|&],+mxbx0y9-~/J1FpoyK[-_jt~c(' );
define( 'SECURE_AUTH_KEY',  'oi.tD!_BviDbIqG.bQNU1R`a=[:@2r:2OK=|lOg;~Em:t[7h.:92mvF!#]N1z<%~' );
define( 'LOGGED_IN_KEY',    'v:Ft*V$SamCa1U8Z.;>:CTIt8t(TR8oJl~ir@*-sK(_X5:P]L8f!5Nxn8(#8!{~M' );
define( 'NONCE_KEY',        'l-`$sEo%<;~8|ED=gKZAOJSWz]YrjXK8v@fZQDXHHA^Pd=y2?[-t_S*(db2.66S ' );
define( 'AUTH_SALT',        'o``iUoT/u_GAQLLZU)OmX`Cxc_qJSp%GD%}96WAe}e2+lc5]z/+=}=.3<LR!`;nJ' );
define( 'SECURE_AUTH_SALT', 'J*vVjsC=(G2HNsa#^/X]*bXjG1m,&-#VC`eV$y_PLN`d<Q=H L]~206R:USQqPT~' );
define( 'LOGGED_IN_SALT',   'Yf&X.D&N,<VAM@Y{l84CYPhDf7Tp$4cV_=$Xw>[#2pdmpmW*foB5cE/yx=1~(49p' );
define( 'NONCE_SALT',       'BmSWp.b|oORzFhF(caDG?UY;bdgKUtjK)_H,N~s%o-9+TC=h:J3PQVNXRe 7Y9rQ' );

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
