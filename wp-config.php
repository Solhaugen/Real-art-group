<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'rag');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost:3306');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '0:|=1|<Jz;o$kX:<]DzPGgW?Kdbk*L<%Pl5/id,31)U0L41Otyb,]zG5(e`R^ckB');
define('SECURE_AUTH_KEY',  '=jHl9K>KNkE,L/ynlxKpha>m_-B#*Me(:UG76%6O:}Q*4=Z7@YRJyvjhxMYu@mKA');
define('LOGGED_IN_KEY',    'j`KE+!bl;:`8B9!f=!vJ@%jc !GzoWi:BiMBkV45y);o6kLir9>9q=pMaZn7v4U ');
define('NONCE_KEY',        'fs9)4:$04+xpFd@;W%Xte4;%U%(9(q*[<5w(%k)6~~/.)[&moBcA,uCO?r#}PBH*');
define('AUTH_SALT',        'zTnmQfADWpMK{O`8WnP6]!K{^?bMsh^!U72F1YY T/on# ;j@1QA7MdUAL:Cg#wV');
define('SECURE_AUTH_SALT', 'd[I-uuDr3f+#yi8oYV;Gdw+{-IHZ=-dnj3Jv[8:qpk8z/>D k&9F|R6={Z{B/P2[');
define('LOGGED_IN_SALT',   '8UtU!4!iam4;~OH+ 8|T1o4&d|<%!SM%D7P6{j @%BM{%<-lCRO yvc>Az>evlpi');
define('NONCE_SALT',       'oe}FNJF:;1h9y)o953k82%)MknV$uUS;AFRzx(C@r}^aREVJ13J%|~h Azh7w-VM');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
