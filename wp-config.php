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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '3A*OeBgfI{^.pH2{rLU5a~C=QvVBdx]=_t_ynUqnM1-$jk[}c([sG<BQ` 5oxn9T' );
define( 'SECURE_AUTH_KEY',  'F14L<AFY?M$/C~fU%X|*,0o,vRbm0h[$yCqZg@G%pT0.jQ`R};.V@.PzAhcJ8n9C' );
define( 'LOGGED_IN_KEY',    'r,RTJOeA.rHi;r$i*uTQz^LH%,]$DR-]0xrlmH-gk#D>p9o:Q0Kz5mQUHl7/K;zF' );
define( 'NONCE_KEY',        '*L>M;f@Czok=S:Osy/2<dwm6~ Rrs7L];R,`;Y.1FThNmO c0^{}`7lLFCK,ZJq;' );
define( 'AUTH_SALT',        'X%sU4piuu`Wsd<IRFiSoh[?m(m(<-%i5d[hW`2jC4]kaJ_|s4VxE`l6)6QQNiP[=' );
define( 'SECURE_AUTH_SALT', ',t?4HR?uYax>jH[`;xp:_g-+uWNrwQ7V?>62w/BfXRjC]aH|X}nOr1ZU>9cE/nRB' );
define( 'LOGGED_IN_SALT',   'u+$yy&SD}^j7bwf$hIE 4eyP?1`d;pa-e#}BKq)GZdIvD.Zh<-auPhy-(TgpN+7>' );
define( 'NONCE_SALT',       'Px8U+VYa=l4H#+@hL4P6:>{PWQ6?gU;OdfHCcF5bO<fbg,uQ.-/wB#r,:kchHy*8' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
