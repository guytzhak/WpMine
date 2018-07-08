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
define('DB_NAME', 'mine');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'Semnn7yt!');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'oTblG.S{+%:7^Qn;.q`l?@P;3pdj4!kZjuRs[NQvc{y}:B?p,w{f9.M/c^KKJ@ps');
define('SECURE_AUTH_KEY',  'T<raf`#>sh+5)hpguU9hp[=@.)TjA,a_87S38i[`W$DCu4oB#nL][q(h{2(G)3=_');
define('LOGGED_IN_KEY',    'R5U[?[oI{XR)lEVr yt~h;CA?p9W(b_BruG,7cs@V4MU,S.]MnK@2zn<>h7*(Xvv');
define('NONCE_KEY',        'l(O=Bw|;$gl$_C|D!U$kOK`)-H<Ah,Djy1+L#v-E+;d~/kU/^E O_nE@|;JRsu;w');
define('AUTH_SALT',        'MKlMDrQ^|&1=WYl{c)UdzYBYC/EVp@3{H&D>ce/#cNC1![Qu*U@Ovg](0DeyX,.H');
define('SECURE_AUTH_SALT', 'HGQ[T;[:N)yIU{%{ I-+6lBny%L6_YBZGjlp`-mNbi;iY0!E9gAKc0lt kXWp/~y');
define('LOGGED_IN_SALT',   'DI~~AW1qF?[8GlBKcec*z1Bmm4I4mn]rcVK?xH!e]1YRf;qOd.%weR56nz6*B$6L');
define('NONCE_SALT',       'TRQ&SR.Or<N%OzFe!^O|wNxkAo,dOKxvvOJK,8q(gjTp}{e`Uj0?(+DvN0eQP~e{');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
