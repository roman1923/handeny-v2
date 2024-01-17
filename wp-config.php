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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'Y9?w,-+&}a.Dg,+BP,QPFUc:W_I5}Y12W.`b;o+NM;^VO,68+8)  j}w|GG:FUt6' );
define( 'SECURE_AUTH_KEY',   'ca39_|)OPn1&yLAYV8( 3n*;G%i`,l4)<./^;uvq~~?(l}3<D5%t=F+^~j!-p aY' );
define( 'LOGGED_IN_KEY',     'xa-#_.]f$R*s3z|Q+0{Jxy<ZEQmOg**E:r4Xk%O4:?5HxPC9@QbZ^Txi]htqMSu5' );
define( 'NONCE_KEY',         '5rTEphS;K6@7%[2Rycc6QcPnrh3<Dh>*cHO9aAT!EHnkGRh*|*a;>$gs^@|cJk;n' );
define( 'AUTH_SALT',         'l?)cHQ_E;<X@/Ib}1?V%Oy}7Z7./+M6J@YJ5uK[Qfhe#m}  E-$M}WR*$3N8_mnI' );
define( 'SECURE_AUTH_SALT',  ';7kabi%y2Ha5r=>b~HW};U<zG$u:jj}vna.l:Lbo&Xl=cj+#1uVH_u;+=f?#{/wX' );
define( 'LOGGED_IN_SALT',    '8s:e;jlN#M+kSL-ZW62d}n&zc1.2tSC{RU}SkbrFg;BM (s:J=^AE+Taz`x/tKUZ' );
define( 'NONCE_SALT',        '#LZG.]=:N@{NAlbvY[3h;NwfYztgfXVVZ/#5;b-T-TVzeQl?48@p,A=5-t kfK+a' );
define( 'WP_CACHE_KEY_SALT', 'R 0=bhu4{_nF2]_I]_.X l8^(>N?+r%azh]Z`SBY9/xt^}5k/Y#Nq*hT-RrI]#;u' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
