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
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'Al+YIvSFlZ5ObVp/q0YKo30HYjUtpI84+uHKxYj1+T6KBzNfUTac/vzK7sBGZZHMxEeTFqTARhjm6AHAJlPCJA==');
define('SECURE_AUTH_KEY',  '/QsBlEA4HdP1Ug5yTTLDPlYDGsQKqcn8dpD72T011kL7YD2NAAjNNa7RvJLdod8IRz6MoPknGQkkWXoRSZ2dPw==');
define('LOGGED_IN_KEY',    'WNdNwPIPS0DOhWMTz2oIj4CKS/Xg1Mj7mXl9I4WuwxhHSQT+lC7JaXksG+unX5kU4qumgH0zeJbphDQULDPkVQ==');
define('NONCE_KEY',        'OHe8o2k8S1mKBUrFDTR4H5/ClwQBE5vzfgKo9XJe8ZO3+WzctELNnA+/sv4rvQ94uQwTdT1WDmUcFwmDRXLzPA==');
define('AUTH_SALT',        '65IkIuOeXTkPnqKlGbGm4Kt9Y8zQN9FwujKDeU+Kucw3sIPPE06hC5WixO2nCcq4xNC3WOGt129gdfYY41/Rhg==');
define('SECURE_AUTH_SALT', 'D/ImC6IAvRMjNo0V/jiaBngjfwlvflgtGKMrVY1dXx/tSFbEaMzJNC5m5DZi4uYZr/mWQtlXPak7TVzjAUD7/w==');
define('LOGGED_IN_SALT',   'Fc8zT1I3wrpRhndf8LSIzNBi0+W5avTColkcasjo7NsIg3KkQEHj0JZypEjKec4kT3zMJMbHwnPUH0GN6qB41Q==');
define('NONCE_SALT',       'n9OtSlaZIJDhwkEUSYvnGyczZfQjSJMXnE5ncF2jKyipF7BSKm41VxuETdShhugmg9QqPKb3qN35IXrbjlC8Ag==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
