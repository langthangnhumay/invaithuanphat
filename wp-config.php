<?php
define('WP_CACHE', true); // Added by WP Rocket
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
define( 'DB_NAME', 'inva7jwo86g_invaithuanphat' );

/** Database username */
define( 'DB_USER', 'inva7jwo86g_invaithuanphat' );

/** Database password */
define( 'DB_PASSWORD', 'c15S44fZkph' );

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
define( 'AUTH_KEY',         'a&HpH9q(3Y;Qs]?p.]M{LO[%^D {)P,&=(~x*<n_6nx:4##[=p&2N=u}(X]UQQpe' );
define( 'SECURE_AUTH_KEY',  'UbB8;|[Bc[pr1ypXh/]7o#J@4o sif~LtjZ3KBHIt:ga3@xvS`GvkQ_n:OmMRVxv' );
define( 'LOGGED_IN_KEY',    ' 7P`Nh`U5krN/b]zlM`q@g2%0usq!v|Z9@Tr^tFt$FS1*<);MsY?Vo2`wf{ORlW:' );
define( 'NONCE_KEY',        '5}E+!1A?:$u:#@lc84o,s^-^;e/]$`nY~.lBF;sK@t:l4oRK4,Tq)1f;NF#m(V#k' );
define( 'AUTH_SALT',        '6G3<|yEB0b+3s* j?yZ8hKU^1uRjSxZ{IWUUwBwV;#,GG.,tE$j$6<._6-?J^!@4' );
define( 'SECURE_AUTH_SALT', 'Ct9o)2O4Cx=EG7DUm$4iv[r=eW(sx~X8B5_3#V%?ou3lsKgga$Lw,2y|#Zey[}p(' );
define( 'LOGGED_IN_SALT',   'QKAhz$AdRJ+W%?4SB`K2Bi-an=y8@r(iy1*@$h:a$,fNbp[h.X}{I2`R_bd@+z3b' );
define( 'NONCE_SALT',       'xVW~J=Q~~!(f>S+JJ:v<PdthK}%)j(#W~UD!9q!AiF(ktGC#{N}=Px5U:+?C?5y}' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'g2hr52p_';

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
