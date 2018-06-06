<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'wordpressDB');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', '');

/** Adresse de l’hébergement MySQL. */
define('DB_HOST', 'localhost:3306');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8');

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'bs6tFjA!&@Ol!4(U^iuH9>-U(&-yHi<^-?/o[-X2qnk2VcYE:l-Vi1A4+?70BD>4');
define('SECURE_AUTH_KEY',  ']`N&*?Z#2WSJ-+y`S~1$^y#rxE`gJ*y~rw%J/6o;h403joO`n%*zg~Cpo8gz!uFe');
define('LOGGED_IN_KEY',    'jJgEg(3|Q?*s-9da$p=@EN$`:wctxBA-;I}_]:xoOk}~|z -SYz N$<pPiW^44x<');
define('NONCE_KEY',        'PY!i|g,&PSHcbTw6C.fyGw}dEk D]WM3:T% !T!_nH]/|+(qh<>u6`C^ A5LwITX');
define('AUTH_SALT',        '6%-zZ1uj-H+Ft #>7J*;-+-#tcZ1GOnN51m3?F%l8qj+h68O(-<KP8YbU*XApRJ2');
define('SECURE_AUTH_SALT', '+C%z+s{ALr[=]:BAY$JKJtt;)9%<`$-+BZ3?SU+58)AvCMrP3nPn)r-?*42gHnx8');
define('LOGGED_IN_SALT',   '|a|-MA[M:?Nslu8^INdgsbah}islNK+<%(F>dR)~+2Gr2(N|CDdD5J68P:xY%aTj');
define('NONCE_SALT',       'k-U)g7#>uwXn&%$<uY]g$U<5tKuO;S-H*)gD0d}[-;Fa>c[zUHQ^+:iD x48)ngi');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');