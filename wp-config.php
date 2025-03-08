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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'mysql' );

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
define( 'AUTH_KEY',         'cy?6_H<d[.DRi!RCS6T`j0]xJsNHi[zt2oYPcG;sdE[+E6Rg(xG{95q^V$0e:Y>@' );
define( 'SECURE_AUTH_KEY',  '0d@Bt6Jtx4W#N:w!?KTA$UQw_(.#36d6#oG.s4_8 4.`WU.,7tR.8YV`/%nGdNtU' );
define( 'LOGGED_IN_KEY',    'D0BJ$e:Pa!$i13%%.1b<I}O<nUt1gEd:Y_$k?<MQ4Z70;6caD>WGw+TLque#*<3r' );
define( 'NONCE_KEY',        'igqvAJPKj+8B_J(s<zrOa>)J=haA=Q)C*{Eg#([v3,&H-^:$PKm{VhLg#yE_i}3;' );
define( 'AUTH_SALT',        'p EX8M=2CO9>/]`FFU-3:L&()j?G<Qp#h*o#p!BKyO9l2i|o&yQn21s@za;Surj ' );
define( 'SECURE_AUTH_SALT', 'FAXQu3JOBf+dk17_Lqn3QBdCmq/KKTWC:YX?q$Kf*^&?!r5g4(p<8Nzx;A],1Qyf' );
define( 'LOGGED_IN_SALT',   'h&7xQI[cgWCOCleI[^K[cN(Daxfa&k~#@3B|<a<q)7=;t,Ha}dZ HoL`|YBK*Vpl' );
define( 'NONCE_SALT',       '!pK |=%Z>alk@w%7xp0mt+pq8,C2f[.lS+DwYr6hkoz<,2)&6ABf-;g!8IxPC/Xa' );

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
