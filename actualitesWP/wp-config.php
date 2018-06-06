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
define('DB_NAME', 'wordpressActus');

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
define('AUTH_KEY',         'kjE<zjQFeV~$e/QI8>c$L2)3?ha19$6#9)In4OfS!d)PTv~RvAQS9e4qm.WY_9Lh');
define('SECURE_AUTH_KEY',  '^&LGeRI#,(VD}ks*{yz9/^47 l5.s(*U /f#&5.3z:+# ,MY9j @.,`mgI~o{YZS');
define('LOGGED_IN_KEY',    'M69KSPa4tv_%S(+w`}.zsd<2-E#3JOGqr7]Gq:$+CObJc#ISp`g](o_#6LB$6_u.');
define('NONCE_KEY',        'EZ(M=<yH=GsZvuJ;|}Q=tTahX~k%w)<Lr<}Iq+|@5RXa1()ISp,5;>m^sv#%9Y) ');
define('AUTH_SALT',        'If:v3!w}NBzh#bz@ZN0Ij+>;<8JvIE0j#w:uY-2dMw4;_RM.JFXqru+ckWp?U8<I');
define('SECURE_AUTH_SALT', '2{UAF?}yrL=Fu#aElO+p{!& nXH1w[E#CaU@.zHNWOZTia[693tGD)=m.lP9,4WD');
define('LOGGED_IN_SALT',   ')S@@M5j)^KfQPv55A@DcTtP,`;|6xRg%B00[E<p[X)(&mX tN;0{O)E.@GbB$&T5');
define('NONCE_SALT',       'wFOb[#:#=K6DG?(L8@[!;o<u)W<P&%[*^i/PSOB`?V;hYn:(S-.vF5m5_3tz(L;4');
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