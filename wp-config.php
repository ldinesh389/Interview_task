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
define( 'DB_NAME', 'iangreen' );

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
define( 'AUTH_KEY',         'kJl{Yk,6KE*s7i-jyxy~Zd(M.IjQTA[DRQp^UUyN}-_yI6wVk#9Y=*om_$?w-vAi' );
define( 'SECURE_AUTH_KEY',  'r?iq]k,}PrdF,A(oXvAgz&x`Kw~ev*g.,<eNTT u3,lbg|wVuTs&^&i9[/*CL<4m' );
define( 'LOGGED_IN_KEY',    '<.[0pt_FHZky&_fMWU@|Y3CU8%7r%%HE0>}nWrhfd+IPfmy;a2}TH(get ]}.!M4' );
define( 'NONCE_KEY',        '!D6-#+S4x&w*j&n#_[DNV}Z:W*R;W6hL7*&f6*X!8GtLIqiN01c|fq2[qX1=_ct?' );
define( 'AUTH_SALT',        '5O2<^Np(QQv:KBbDrT.Q755,bL#5_;D2xtr}>6wg?tJD<%/~23m4R,,E?.E%C^fD' );
define( 'SECURE_AUTH_SALT', '}e_W}30#E62yM}$)WxODMOc{a~kR}~$()o=Llg/Lg?ngV}W=_%fxh~zu/$}tfBn:' );
define( 'LOGGED_IN_SALT',   '5N5_2Bs`go/v-]mF+~Vv@q-5)p[CbGvknZEj=O2v~hKRe0p23HN-*?B }ciD5b+{' );
define( 'NONCE_SALT',       ']. F+7(~[DRe9pHWMb/>`H2W[8;;x{=#iE|d7)u8=u`}20^T`!{1}2 Cq,6Oz5!`' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'ig_';

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
define( 'ALLOW_UNFILTERED_UPLOADS', true );


/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
