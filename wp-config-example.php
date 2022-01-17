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
define( 'DB_NAME', 'abcd_market' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '(cT;2ZBurj$Acj=KBr<@zD#W,+s<R;-*-[:xPpe{AH ,QM#Hl3ok$.o/*(Z x~xX' );
define( 'SECURE_AUTH_KEY',  '{c!esZiPQWV&V j~:_dBBH{1)?|<4,q@Ch.Q7;8mAI+%(xi{9-e+9~w>4dmOW_oK' );
define( 'LOGGED_IN_KEY',    '1p#a6FAm*dI>;mLul^ztTrsn<I>@~2HK{M$%m-,5v:ultULf*PU|&pV7h3SI|%z9' );
define( 'NONCE_KEY',        'uo>lH:]i>)w ss;2)ilCd$n!/i{zy_[ZHIDY-9,LHyZx<?fcT58sQ<1eKfN@l&-o' );
define( 'AUTH_SALT',        ':uxx#smqO9`q3O*_-Gt(*CuwuwG{_,_4_/@z6kF&g^:E(Y{82,acS9)LRKBYj)xY' );
define( 'SECURE_AUTH_SALT', 'ymqOFJ!*#;8O<lm~q5DhZwyT3W:<DXZ#~E<T@Iu$x)/*fI(LFia-hGYxc5)3Ctl1' );
define( 'LOGGED_IN_SALT',   'i+{-g@h(It9]C2*@Biq,)WYlowNdaX;ptx,LnT=`=E@$]O-D2?3rH1Y5bROfkk_I' );
define( 'NONCE_SALT',       'I|Bh<6*b~)M|E@O2EE:3oi6Vctyis<Jk2QrX`wYrc@d63Y4y-g=.;f5G.JAg,3oN' );

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

//Wordpress
define( 'WPMS_SMTP_HOST', 'contoh'); // Host surat SMTP. 
define( 'WPMS_SMTP_PORT', 587 ); // Nomor port server SMTP. 
define('WPMS_SSL', ''); // Kemungkinan nilai '', 'ssl', 'tls' - perhatikan TLS bukan STARTTLS. 
define('WPMS_SMTP_AUTH', true); // True menyalakannya, false mematikannya. 
define( 'WPMS_SMTP_USER', 'nama pengguna'); // Nama pengguna autentikasi SMTP, hanya digunakan jika WPMS_SMTP_AUTH benar. 
define('WPMS_SMTP_PASS', 'sandi'); // Kata sandi otentikasi SMTP, hanya digunakan jika WPMS_SMTP_AUTH benar. 
define('WPMS_SMTP_AUTOTLS', true); // True menyalakannya, false mematikannya. 
define('WPMS_MAILER', 'smtp');

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
