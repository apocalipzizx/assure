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
define( 'DB_NAME', 'assure' );

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
define( 'AUTH_KEY',         'Q;VL%uqEOfhUL(0 B`)/{-LLY!5{g>hk#~9j: NU,lG}orb[<)COB9b`L$5e:%oi' );
define( 'SECURE_AUTH_KEY',  '5l9aMH=3eY+*4E}/<J=_ijuREIiRjO<=[A(7vMShf0J-V9mv|;k7I@6 ML1*p:qm' );
define( 'LOGGED_IN_KEY',    '|?Un>$iB^id=<ix6G-!C;@_a]`@1#et$k>?FM.HLEv}({%shM%(L!kFn&pAq Il]' );
define( 'NONCE_KEY',        '(j+MfzOLs}i1zDHPe.II^+<U%MG[wpEdL]x+{{/>]ud;Fq7(2@e[e}kl_Tj4Msj>' );
define( 'AUTH_SALT',        'qrSO7KTz|g*Y{y3^//GoSi*+%({{[/p&kh,9(3Nm*k% En`U~TTn :f(@Vn@,Uj.' );
define( 'SECURE_AUTH_SALT', 'ykrhS+QuQ!`3_3L%}hG#,~zW_8}m:z,vn4.q`BKm33yZ1`w26<kadmdPQRu<)G%`' );
define( 'LOGGED_IN_SALT',   'k=6d(Rt`2W}f&oU5Ugt)HvoVA!w:2@B=?F2`4G|jDOf#F[H[rWJJ,_=(iIJy1=[]' );
define( 'NONCE_SALT',       '.rkv-n|elOWf@*GZMDV-f>:P01b]%sDC-T{gDQunB10MiFqPshCzD`HH:y6!u?5@' );

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
