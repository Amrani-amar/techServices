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
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define('AUTH_KEY',         'Hh3V9lGTeQyTD6cMGQBAb2HfHrkUgE+aWjKBVcSRyBXmTOjIndMm7H8tSDwfrWD9PrbFEK+pMq9ceQA6aUe3sQ==');
define('SECURE_AUTH_KEY',  'InXPvhjU6hGnNphszu6IhHqjDcArQFuHfWI8mtDR6vHvy8Kncwq0VNKzBXVRnaPxzIchxwnWoPW3RJRAdWHSTQ==');
define('LOGGED_IN_KEY',    '08j3EGahuL8wfx3HjRgxMqy0NzoGoliQn33bOmCnylh3GX5rbeRAJYKv+InjrAfIt9hU4ek6EG4rjug7IJj8sQ==');
define('NONCE_KEY',        'jQJVEc7IU/gZb0TBCqB2UrRRgFzdDBIRlcs3IDcB5KiPg/IlzSBzOeC2eX90dScWefzRTgZYkbrJB7fbYOzq/w==');
define('AUTH_SALT',        '1RRzqUDw9Y0rFGPXHo/Jk7aUOo6Eu69CcoK0W7c2ggy9M2vMea8y9ZEXIr8N9A0snesF2z7j7NRBPI5VL5+ObQ==');
define('SECURE_AUTH_SALT', 'oM/rx7vqg5uJvH633nJs+cZ2D3hJVh0u2WKeln3ebU1G1ZG0iXUTDCxyDE7Jpy2Ts0q/vQIYQljutzVvO2yFBA==');
define('LOGGED_IN_SALT',   'hNP9yc6o38pVVoRiEwTQT/n4gx+bpbz8BhM+mdBw0bxXlG53uL3ADdhrVz5jtaYvG12ZOmUGplH5sCRYK3htTQ==');
define('NONCE_SALT',       'tlxP+6mZQ54tOeXzmT71dKcKsrNjNLKCTieirdOKB+kSQw5w1GgdiHCEoI33iVwofO7xh2ufpqvtvlIIxYb4xQ==');


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


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

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
