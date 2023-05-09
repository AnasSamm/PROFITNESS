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
define( 'DB_NAME', 'anoos' );

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
define( 'AUTH_KEY',         '1S,SuY9^1UtG^&66h)eonjSCQY<5xTpWNP5IkAXPPS1_Mp9ewn[ =0r/!_WaQE%B' );
define( 'SECURE_AUTH_KEY',  '3a/SMFC!xGMz&8|dYbu84n2Op$%_J,muvI<0xc]B57j?<45^Wj+a.Xd2WJ;@%rRW' );
define( 'LOGGED_IN_KEY',    'mOdFFC=sUub24Md~|2|.LdHL4vbm 2~a0@93)[=Xbj:G2Lre#4fVV_{;L.a4HzpH' );
define( 'NONCE_KEY',        'MFddz}ig9fSD96U22e+(.MRsVa_?q%[2-+&Ayql,t7{W@%K>SIX_/!i1J|G`r!:E' );
define( 'AUTH_SALT',        'O)kPr8@mESn>oK~ B~~)edXNf3[)jov*hT}1Lh4Z1~p`7F,]?&3t9,`3.H<Nviu4' );
define( 'SECURE_AUTH_SALT', '#r/a|>C3)r&q;)s{<*yCtBm$QDz)p_jW}5lyb)IC$OehRl;>va0jg?xi{rmO~asj' );
define( 'LOGGED_IN_SALT',   'l<$6*Fd Ww:kZHKI4B%kStJY(QwK;L}{g~q0h*W<-POp3hQXaL }XWq+)zINPlrZ' );
define( 'NONCE_SALT',       'Lwtk>jP= (PMOKWU51L/5bf6Lf9hF{W/5MssI/ge[o*E+ ]mLH{3f;x3@H(BKOq ' );

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
