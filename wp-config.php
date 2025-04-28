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
define( 'AUTH_KEY',          'LB}]J9BU:q{{ |U5qj8=SCS$5cbNai}:_/=B4@tn4Uf+MdYPEmLf9d-r{STW2CZn' );
define( 'SECURE_AUTH_KEY',   '!jUx3M+`hA>k!ZvRp*,ox*2-}i{3eBI:`uW)xV){c{ZIpyo2] qse:[.rQpEU8JU' );
define( 'LOGGED_IN_KEY',     'PkA#jrPIVJ|X|(<[R]O5<EYNP5]Y=dD,^<V#hTmb#PA]r{2EX|7*Sf,I) c^c7dp' );
define( 'NONCE_KEY',         'WXXRK|>zb6;);qyDsYHN/)6.psY]^ido%`ZKOK&3KI8;y>w{?r4n.fmlbf)I?H*c' );
define( 'AUTH_SALT',         '}R|edj|1C1{}<Z[Pl@6re([klg#b`Bv~(yMZk|X#t4DaKC,bAY#Zu6hw8[;&x_cX' );
define( 'SECURE_AUTH_SALT',  '6I`R&WTFWp-P<Sv3ie#Z,Xq+O91a@k*wxQTkLm?;p2Q.H `PL]`I[pSD)9s>v7$Y' );
define( 'LOGGED_IN_SALT',    'CZ=xB|1/+Ff.vyCw/dEMsXp}sJqV!);._]>{L1 c{/Ph6LW0tk]ZApAT?UWbM>@-' );
define( 'NONCE_SALT',        '8ZP>Ta|NQVP_3gll>~L[a)y&7rgKyv]tSWSF2?qXXtbpWwI<at3QY)ls)N[@=Dzr' );
define( 'WP_CACHE_KEY_SALT', 'B_|M(Eai]Nde#9+5OW*f:cXm0[_r=~tj|6%ao%?xVqStNPuTsa)_N [q_wJ&ZJaC' );


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
