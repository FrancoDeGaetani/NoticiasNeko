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
define( 'DB_NAME', 'noticiasneko' );

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
define( 'AUTH_KEY',         '<U/p-;_n$+=9Pdd{,TUc(2yR%puKYJA]DhwL465i&0Lh*!S-.sEDG6a=eZ%jgH:{' );
define( 'SECURE_AUTH_KEY',  '35v@ZPo[_$jO583zuN<~~.+sF7[{a`.#xI$Iv4HL$.Sc}=TBa?kBl()V$XzjpB2E' );
define( 'LOGGED_IN_KEY',    'F!$D}`Da&4o]|j$~h2x&6q.B<i~ckHk=:&HNq/d}:{&FDDd*b5k|Rux*s`d:R:*$' );
define( 'NONCE_KEY',        'SE?uu>iQ|m[frTe(bW9a:|t^h(sX6*LLNTxSJ;1IFHsWfy/^#^6_uOYROV.vCE6F' );
define( 'AUTH_SALT',        'jzQKROEZSxD]F;Jj~Eg3pghlgsE/vsDd^;03m]w$4`)U4i,ngC76ChU)s=br6%`|' );
define( 'SECURE_AUTH_SALT', 'p e}(yw2O4EKAts&QQyBZqp,vIpeMGS3zj.pwK^3i-B/R}W9r?Ka&9$@]wkC8_.l' );
define( 'LOGGED_IN_SALT',   '[imu=}k*R5DFUQW({l.#s}qFB5C/+44|=nqc)G6YoWr`<`n!6]cRI+<|3B7#a.L8' );
define( 'NONCE_SALT',       '[UmMGeniWC78$^Kil}6-WTa}JUuL/iX[]~4,7gCU9cN-z6 {of&:~`U!Db5lNf7x' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
