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
define( 'DB_NAME', 'skogsgull_db' );

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
define( 'AUTH_KEY',         'u-MwjeL-N2@rfestR!T`m{lvt8[mvb3QCv6;0fpJIfT+rhE3P[Eor-m9DV- /UlH' );
define( 'SECURE_AUTH_KEY',  'CFLb^[;0UENp)_$F7&/2d&_xe`4N/rMXd{AxCriU&]R=i+:t/;ZQ=v(0}!B[Ft^c' );
define( 'LOGGED_IN_KEY',    '33^jGNUtbgL$KsVl4iVB ,@^.tI<KJ|ZoU3A9v46U`|a;NeW%{N5[X7^]HDZ^Xv4' );
define( 'NONCE_KEY',        'BkwzoV]B+NT6HpVqOd9goeTkFvsmm/vxQ[0{g:3$_xGXZ0.|ke,VjL*HH:rG@E[i' );
define( 'AUTH_SALT',        'du5k?6`F8[_~!Q nFlDFpDu%K2<5!PcX)A9MD/ JHnvaz*8g$ISu%Ca4;/F9(HIB' );
define( 'SECURE_AUTH_SALT', ',?I)w,WqyyN8(]r@a4Gz*eS`_SHqv*CS;ku`.2+L(J*ov!Uzh-P@edlM<3=.Ts?t' );
define( 'LOGGED_IN_SALT',   ']F1skBAV+RBt^t1OEXo;-UC$6YJUlOp[{m};GnJXs/^9tFH^Bhk[#}BVJAA&EMrL' );
define( 'NONCE_SALT',       'EHkF-~Y|s8,z~5<pi][+}}zjjERkIM##SN9CV8;.1sy>(Q6CtM@]@5:,m&_dnpbz' );

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
