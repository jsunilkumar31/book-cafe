<?php
define( 'WP_CACHE', true );
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
define( 'DB_NAME', 'u614250440_0uDM5' );

/** MySQL database username */
define( 'DB_USER', 'u614250440_K5GlF' );

/** MySQL database password */
define( 'DB_PASSWORD', 'XWo7DCKTp3' );

/** MySQL hostname */
define( 'DB_HOST', 'mysql' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          '!ujR1BP0+?:$u[0]l{^.2cB4XxVO)fefP/435mZ?h{ytB-f-Xz~^fx#``Bod>ONx' );
define( 'SECURE_AUTH_KEY',   '^yqJjUlTD):/7_NmQ,)!`$]r6FAy@ uLe9C~~XZz?Ow@k;A4s5cfwGI0}_N6^FTw' );
define( 'LOGGED_IN_KEY',     '~e*;Lk#0tT18}bn05mF+Oe0r( ?MA:{UUgF]}}rY+c`scXOR(pG_S; l,wmf8/hM' );
define( 'NONCE_KEY',         ']VF 94bdW1^^9qZwf*Ugj<3y;zC =x=Kcby<0ncH&_el?|jcf+jpu;(*k@S8`,CL' );
define( 'AUTH_SALT',         '|h^jyJNR[b_,uD9iC8T~I<tQY`bI=G%3.?jDGZuu-25RpJ}*U4:|g?~0O#heS:}(' );
define( 'SECURE_AUTH_SALT',  'I}_^4j#X*cLkN#c>1;8*%AS(m]-z)MJ&<*#.9}BR;KC,e2l,=q0N>IZhE`e$.2mv' );
define( 'LOGGED_IN_SALT',    'ASJ[p1cJM{8:.uciBv5wXKFC8WGco(=#E{N/o:Enk{ky`R;{ScJ.Yoib-Qsj) 4.' );
define( 'NONCE_SALT',        '>pv}6o0[VRj-!A=NDW/<Kw:.Qp-/yG6gTZD(fMj*;>z`ul}mz-HR6YaeM`igHgV>' );
define( 'WP_CACHE_KEY_SALT', 'DX3E*i=&%VE}#95IjG>M$^QF#e5+]63m/Uf:geCKX!}3LN$;lB075Cam5}yEj~ni' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
