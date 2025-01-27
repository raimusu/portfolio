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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', '1a0jn_56877y44' );

/** Database username */
define( 'DB_USER', '1a0jn_46755h48' );

/** Database password */
define( 'DB_PASSWORD', 'Hankei5m/' );

/** Database hostname */
define( 'DB_HOST', 'mysql85.conoha.ne.jp' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'b46<x WGnUnWb[7B(jF[kiPjv$Z{;UMw3PA4xYSdqQR&~=g>h]xc<`Xcd;atH:Qq' );
define( 'SECURE_AUTH_KEY',   '~NzzS:T?;ie<%V4Q4^DGfv)KnMBZ879iCMyAHP>q5 QB,sLh#s0J.gP1bucrZKni' );
define( 'LOGGED_IN_KEY',     '?|8NkS`Fdaoq@xoRUDm0-pcqXf/+Hjd:|^O;fczlTO>3L.}B:|PnC-`tgBe T.qp' );
define( 'NONCE_KEY',         'B$)5oT?z+:hu:mf,pkIyf<~Hv+PN4!X_=Hf%hDisG*@Y)Hh%G@n!43(gmD{kK{5o' );
define( 'AUTH_SALT',         'g`Y_%C<RP^{-6m#<ui5l<L_n@bJ,~|SE`k8jaEMTGDZ{i*<yn&_TK0H|V8nf:^/A' );
define( 'SECURE_AUTH_SALT',  '^U[x[~RbbIWAQjA.GSus,xC~}CX3oWX >B.M,RpC8HW0SzWS_zX4yYOL,xF+CSV1' );
define( 'LOGGED_IN_SALT',    '}F-1OI7lu[Ou4L>)wBP-`uddJ(Vct.X6>7Scv`;Zt6Fm+iPgAHx??D`eJQ:3oLeU' );
define( 'NONCE_SALT',        'Q9mY`epH,D~wKF;T5w3h4(9!XS*sj|O:c}Wl u~n4ms/m%WUMoxA;^q0G4^WAx&Y' );
define( 'WP_CACHE_KEY_SALT', '[}<gfzw4yf1UJ*>SYi^@-+ZkPQ]/dCa%lY&nP&(7eiitpwRG6bWu98` i.<ZtG-_' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

if (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === "https") {
    $_SERVER['HTTPS'] = 'on';
    define('FORCE_SSL_LOGIN', true);
    define('FORCE_SSL_ADMIN', true);
}


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'CW_DASHBOARD_PLUGIN_SID', '43avikFcwJlTqk3Ommshdn4cormjC6nZ06BGwTf3fsM0WoOjvNDGhGBtYTUZjD9PdGEUFaC6HhvnMpYISB2TijTbEA3GgIHV3ou1FIY4bB8.' );
define( 'CW_DASHBOARD_PLUGIN_DID', 'vE0FsiumP6TazZzHRFT04-vW-KX6DapURx68Xy9W--QYcHKZMXLvJW8sxn7mXt66YgMe9Up98CsJJmvlGCbcWK58IZHz1L47e9i_YnYmZNE.' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
