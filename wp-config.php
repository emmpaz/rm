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
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'rm' );

/** Database username */
define( 'DB_USER', 'user' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'E+m&(-9NJzz8q_&q_NFgdC,3&#h.(rC}&@oi|3lh8K>+cqMV2]S%YR+q>wh%j;w`' );
define( 'SECURE_AUTH_KEY',  'Ou/Z#mRX0a3`Km=+!0(N ?MVO:hteqSR-)1?/sPc#i4?{8jY:f_yRGGTLA*#Aw?v' );
define( 'LOGGED_IN_KEY',    '$FM!+acnEw#NKT+ d+B7y5(t~o7Adu-@YpaI3YV/~9ivrB-b^{h1cB+nJdakVe#[' );
define( 'NONCE_KEY',        '2NFk&0,u6e{}u%,zm:I-rD+?P2$+ u:*45:{ :!)$YI2%2UT<7KXkzAw@4oay~f%' );
define( 'AUTH_SALT',        '8#VuB0~8}u#}r9Yq#`HWo_Ax}Qzdu:t<IP@R2>~ow&Hr-Swo4{-~.8MKIHE`b.t-' );
define( 'SECURE_AUTH_SALT', ';k}>hu )bFc^[h@5n{,$6Nv,1( +I8U.5l8u_?1f+ol NuGVEu}1d$!t`(r/s#Vo' );
define( 'LOGGED_IN_SALT',   '<H`KRnqplGspaM,Oz(8:74bXqBSCw +/-?SuCU0)ljE?)p=s`Hg3[!3mpG=RJe^t' );
define( 'NONCE_SALT',       'n99&C,Tgb>n0cCjc,e05DDiahLUz|v@$4rFb}TUZtfVma#T(1o$:<JfJYOM9Irsm' );

/**#@-*/

/**
 * WordPress database table prefix.
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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
