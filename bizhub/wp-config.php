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
define( 'DB_NAME', 'u614250440_EmCeZ' );

/** MySQL database username */
define( 'DB_USER', 'u614250440_dYoXE' );

/** MySQL database password */
define( 'DB_PASSWORD', '2V9rqjFKpW' );

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
define( 'AUTH_KEY',          ')nJX!).NdvDt{F?TT[Ajvw>>M5v$Y{cBY_)E8>0=#(*&SM8}|e)`}(sHu2Fll&!J' );
define( 'SECURE_AUTH_KEY',   'yJSd5Qz;<4HA2@C`vT84thQ-E?n+t5BD@rG)KMr0Z%.y?0;$x/|glq~AH#[Jv1Dp' );
define( 'LOGGED_IN_KEY',     '974` $uO+_9x.EVCbU_l!*2pe g~GB=,<Z{`5VRz;S>:6[U(aU|*L_osofW(R9HE' );
define( 'NONCE_KEY',         '%qG(Z{lco >w/YpQ?XuB .+K#zU5vyLWROzRasP!]$Aj:1N(x%lFo[RL.ep)|TU]' );
define( 'AUTH_SALT',         ' F7Ur#X%=Dj2COh2*e||{!`,;UHp}qFNnqQKV.X6J3<d<S0}ni:niO]*<X{6b(Bx' );
define( 'SECURE_AUTH_SALT',  'W2;CTa9Q%-zlGsztPTM%ZmOQ#U<kgAqHoD6(TxlmND-N~C#/Ky<K=o@A|JR?ssS~' );
define( 'LOGGED_IN_SALT',    '7C~@$Drih0Z#v36.0ui@cNzoi=[1dQf~1{^s}> Z{UxCU:7a~%5lE;JoA]tfr{&U' );
define( 'NONCE_SALT',        'a!Us%BUzn{befv5vwXtGYJ`(J*TTt?I.(d*+g:CFx]oz)e*|DJ3&UV>C*Kf4(x:{' );
define( 'WP_CACHE_KEY_SALT', 'Xv0]ONXiaOlz#p<u^l*!D&8s$oH%>h|kAg+(AI{y-C`U>w} Wa@w*S0{jqJI-?;%' );

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
