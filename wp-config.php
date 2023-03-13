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
define( 'DB_NAME', 'contact-plugin' );

/** Database username */
define( 'DB_USER', 'kibet' );

/** Database password */
define( 'DB_PASSWORD', 'Kibetrono1996@' );

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
define( 'AUTH_KEY',         '%VwA3X71Q05/;P]>9XQ1;4yNeN4jF,2AMm.EF=9)9~6vum&t9@as~xcsN6OdA#EN' );
define( 'SECURE_AUTH_KEY',  '_R%#TUxa[x?]D0R+fyk0=q$Sb14u`/=rL.ejuWY(EI9)RYMiP:_GL:17t$LV.Zj2' );
define( 'LOGGED_IN_KEY',    '29WJo*@nxgn=myXpUwUVT8)tO&dKGc_#-V]wC{H,}voi>GO??q<?g?MY]Cznh )3' );
define( 'NONCE_KEY',        'hEZ)5v@2+][GTLH$ypRNgqc*!ggpw=`p1M-LuqoAB); **DmL((kZQ/0 .<|-_4h' );
define( 'AUTH_SALT',        '{*6-vPe_8&*o]uX*U#x/O[@Mi`5gZ5XL]*bu!R[%R{)e]1bCJ#=i-&Paq_iK?,T{' );
define( 'SECURE_AUTH_SALT', '^BL9-N Ek/nJTP,T3U5`(Y8V?0Km/b&[(^oJxk+?+PaW| >W,aXB,?yx2Sl$LVuh' );
define( 'LOGGED_IN_SALT',   '_2$$Wi()bNUA{jW&)<Xlx.NaQIk%KMrBY4y_HZ_hMF^x^D|~2:P!]pd=)f*({~uW' );
define( 'NONCE_SALT',       'aG)pR(!j@+2N`6c.fl]/(V|HQ@8.xrwd|a<OIAfr$2!0^F;Q|e^D8g:xq3oF}<;P' );

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