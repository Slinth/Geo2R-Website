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
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'sT-|H;BoIsV_(& Yb.!&~%6;tPJ$[M@:tHOJ/c9rEr):6brXh^LBaXengR^|#RMU');
define('SECURE_AUTH_KEY',  'EWy,2Km9PJ-M4/-4+<EK{F?Y_{xARKU0AL`Fz(pX6x|#B}$Q`($:#BtF|x5[`S:6');
define('LOGGED_IN_KEY',    'frWa?(0(/E6#c[V6ABa2uZq8p]@OzkJnZ/ZdhAn7[_ATXO-)<Fi;ANn^jQ4G~VOq');
define('NONCE_KEY',        '>IjqIO%6R_$X~}*`&rhvvk|(@l3zeW5~BBThi}`X@>-3{-S1xWXJW8hGh4YcN =a');
define('AUTH_SALT',        '#)[3mG8xiu9HH8%`V51,=qgvjx0MU70R]SQ2/?/Oeb(kZu#b#fUh2./3@UTRsC#v');
define('SECURE_AUTH_SALT', 'a^6mE?Kq[c(PMQ*;mFNckS|IBABmkWSv$A1a6;$k61|L]h82t5E= l*GmW{#Pv*8');
define('LOGGED_IN_SALT',   '3(&])| j=bo^WX6HC);%8&P@%R9Q:5HnR2zi6W:tTfDq^0?ZPVQf$-nvz;&tAF*Q');
define('NONCE_SALT',       'C4r]|7zD_EL]~6Ln,HC)8cM9D<xIbb164l}$jC~FQ7v$^pLHwX{!TJAg/]}nx8FA');
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