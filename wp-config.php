<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp-vue-data' );

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
define( 'AUTH_KEY',         '{S;6Wqg`dH W+:it<ZW%gWW-=seRCg)p,|bRO^2D)Z%&uujC#`TSLPhjj^#X*}.`' );
define( 'SECURE_AUTH_KEY',  '|#33bsPhsQSQ0~JYAU%(myHOPtzt,]x7tCAm|ZMqR{&N:d?qt>oJX&Ga2D_d9RUD' );
define( 'LOGGED_IN_KEY',    '5VT5FzwNL:W,zVvS WRinoayK28)Y@_tgx eU~S)w0P&p=.A{ c<BR6m!`,uq)*U' );
define( 'NONCE_KEY',        'JOr}im(}9IuL;wL&y^m!87c2Z6N,0(~8K^)[;rK(D}*Du&Bbe#e#+);}^se2jIC[' );
define( 'AUTH_SALT',        '#R4()HE0LTG$e35Fl:-+16W^!t(UgJQ9DBJ3@V?0F-=;eX%A$7vaC,@E977H{Q-(' );
define( 'SECURE_AUTH_SALT', '0*kQ]&T2ewca?RE4[dx&bzIk /t|u<.g@]b+l$DTdvy&|_ bu!?W@enE=.Lqou4x' );
define( 'LOGGED_IN_SALT',   'Rzia7-)w%YOzfD[M4YENY-[so D@4Ci/*fG/D5,AiuG`$ ,;wp{qQ0 JO7sDTv J' );
define( 'NONCE_SALT',       '!nz$tQ*kU_U^Q.D(A,Dg#UA$UF5YYwHnOlevd%0t]t_&#A.F[L>&TJ}B#X(-&IL?' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
