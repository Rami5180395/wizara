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
define( 'DB_NAME', 'wizara' );

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
define( 'AUTH_KEY',         'Y4!J1>~v/IU7Q*LMpoDKbTWP(VUJu?4)TMc.y6XXHw #fgR.bU|R8](]y7@jQ.1f' );
define( 'SECURE_AUTH_KEY',  '+-<iWfb7.}XXk83B/ApGze:QT!;&;0a{SW>N{gNv9M760r;jtl_[; 6dniJSj! l' );
define( 'LOGGED_IN_KEY',    '}*4ndVR.4}PuG>5BLqog0fCXmFIeke@XtT22~Lv26P)^GGF97b6J_ JM>H:fV[W8' );
define( 'NONCE_KEY',        '&SupzYZOU&sq~ x9=Yg4VumZDQvqsF/7*(VqaO]G* O?A<mfzA+BbtU!w:2W)7qv' );
define( 'AUTH_SALT',        '_LwVOq)7,eeXOuLEpy1H2CAtd=&jk!PlZS;x}qiWWgm*IRXo^mQ|qsnsG&.#U#:U' );
define( 'SECURE_AUTH_SALT', '1Os?&,vK%N]:X88J!pJ7?/))Hf^^&6`?x:l/jHx?]X%s-b/S6XY_z>F_lk(z0%dY' );
define( 'LOGGED_IN_SALT',   'bc9xMk~h=/T1Wf%W(@qj{zuTFiBfyf=^Tv8[Q,wS]_{Z&xb01+Y[qiYpWIO}0fNY' );
define( 'NONCE_SALT',       '~p*F MyI0@j(? |xphf#n]%K{my6&U;Opl7X_f&50z^oLr/`Z0AbXlBBfJ II}Dn' );

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
define( 'FS_METHOD', 'direct' );
