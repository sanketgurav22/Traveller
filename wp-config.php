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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

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
define( 'AUTH_KEY',         'AMWT A(s8<8/mY8YG{y/TekbF6_l7Y$Uq1G#=OXb:M+@c Qi0ycjI2:pS3Hz;j?H' );
define( 'SECURE_AUTH_KEY',  ' <Y{o^ww*C-mO:hei~.sOoX<G4YJAichi0.qLJNZ}`KO%#Oz1c}:{T #*,|HRqP+' );
define( 'LOGGED_IN_KEY',    'Pf;sB%@m{v0k6+5;j<qgO?1R`w}K_7P+bk)>0<P,z<%A|`m$Znuka}oDCyTj!Y=f' );
define( 'NONCE_KEY',        ';hB|1@Yp8!B<dw|Ta:;qql-ST 8tdI<u_|x]gusaQS-H@Y[l4l-3,, z;Rgf24j?' );
define( 'AUTH_SALT',        '&Hxz!4l6]EVXQmC2#rGu2B;0C@(GgK?QISS]&2g_l}{97!L8j|g6[D{|Hi:vx<6<' );
define( 'SECURE_AUTH_SALT', 'd?RrKzfx@$ P=a#eEGd5B}<;%j|@{>n9w)]Q4pX5SphlFMnt_v< (#Y1C1pNC|VL' );
define( 'LOGGED_IN_SALT',   '(j1kQ^PCIp?~[m(kGdS+/w5uya`k|E1|t/]*wyNH 4D~<hlt2;#wCQzGw-Z6Z{(T' );
define( 'NONCE_SALT',       'YIR5@==6~-Py=MLr0to8pjb5_@ $5_;F3r-/<uLuqj7`NNzD6qQvJ<6~8[X;Y^1@' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
