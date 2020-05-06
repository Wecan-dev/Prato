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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'db_prato' );

/** MySQL database username */
define( 'DB_USER', 'admin' );

/** MySQL database password */
define( 'DB_PASSWORD', '123456' );

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
define( 'AUTH_KEY',         'U ?;}PHP~->yA#8;,Y:1E.9D3}qF?0 PAtopf-t uwK8#_#3?=d|z5#XokqBX+)K' );
define( 'SECURE_AUTH_KEY',  'YFqiVx)eFA#GCDu)/jVl#zQIzK.PuR(%D%b.s5^WS#QyZ=iYUk>@g~F~&,St.UOD' );
define( 'LOGGED_IN_KEY',    'M=)2!;$N$fcLo@AwaSZ+3ny?Nc}+k1p{ttFUn5ajEKq1.Utn*3#^(~ljM]VTl0M(' );
define( 'NONCE_KEY',        ']a-@4KegoXa+Z i0<LZ dM8vw+#djD%8#Gr~|XP=xshE_KNjsU,m#O!3;b>CYG9!' );
define( 'AUTH_SALT',        '>^TB}!M4`5x6?zhiZCh.M(_e3_W0$?CHMDA#p934,.b@}}{1}z%!CF*am(p@@<Ur' );
define( 'SECURE_AUTH_SALT', 'g{(>FB^nE<ZlbgnV X@ax~(ZT=qZ]kDRQ?*?gM^P9zkQ+,ww-z<Gb)y!z4vp?|TD' );
define( 'LOGGED_IN_SALT',   'lS3?4^Lt~ew{%8cZ(Is1Uys6!$j] .#SYAAk&{zxW:0S2BPrfNTm`h}-#_qtk&#;' );
define( 'NONCE_SALT',       '-qbOt`C*S1OGBHS$/Z!}gt#K,Q6j]?]BQm!LZ}<0R4<,qR>3 !&{I)!{#(NXq-lW' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
