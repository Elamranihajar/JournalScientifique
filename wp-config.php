<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link https://fr.wordpress.org/support/article/editing-wp-config-php/ Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'JournalScientifique' );


/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');
// Utiliser la fonction mail() de PHP pour l'envoi d'e-mails
define( 'WPMS_MAILER', 'php' );

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('WP_MEMORY_LIMIT', '2048M');
define( 'AUTH_KEY',         'QLMX^-j 9$m >SD[DQ]p%:J0{*4 %c:th{?R Ab{CEbhTkNg:)&+Wr5CmDE2WL v' );
define( 'SECURE_AUTH_KEY',  '4DwP(v_18SZA${gJRRCNeeF9w`_fx]:(d{hPs@x`#uj@gZo;#91AUf[4UT*{E2oO' );
define( 'LOGGED_IN_KEY',    'Ff7/9ngj|;-yaTX8XKW j1PL8K9J(gR*RD]p s$3{KDvo5+&ajKS*d7eVCZu%!R6' );
define( 'NONCE_KEY',        'UYD}3@24Sha-g*$M)Y1gNgJ<RHmtyNJ/so59lonT#fMkC{j>E[SB1FG>g3dn4%E&' );
define( 'AUTH_SALT',        'V;2&>BDs9jHC;RS]^4{D_8%FnWjD-M_mu.p19K;P-F4Jd}34ij:CyQtJ A;jtglG' );
define( 'SECURE_AUTH_SALT', 'f/#FkNDp/Kd!?w=|N*WLT3r{Evl[GrU<73DP;565?_}:5yMR*ggu3bdNpb-}]LKZ' );
define( 'LOGGED_IN_SALT',   'l%R.!tvMKxYm]uuO,Y(Po(7p4V;Rq$O7^`Mk4DPQJ2U_v4%gEB:[kWD._P,}(6P8' );
define( 'NONCE_SALT',       'SPf&2G2~~l,Rh7:{e.{8./!77-bve]^um/|)0r8_|NyR_5J[TU7+]UukQw:`1e2:' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs et développeuses : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs et développeuses d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur la documentation.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
