<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
 *
 * Réglages MySQL
 * Préfixe de table
 * Clés secrètes
 * Langue utilisée
 * ABSPATH
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'annaelleemerytest' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'Tam47koo.' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );

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
define( 'AUTH_KEY',         '*0V]<Q>x)Lm$|lBA?uy*uVPrPdF?gipVGTx4/2]MqS6Myhz~a$q~vkU a[Sns[t$' );
define( 'SECURE_AUTH_KEY',  'Msy|^kIydnWrF2Odiwng.(|Wj$=q3fGbO,+mIcH*AEFP#[ymcz9}fDMw(Hdu#Di,' );
define( 'LOGGED_IN_KEY',    'N{%O9N1`{ fA80lQp!Aw2=38!*|3ix!Yq*!)]B/r>O?F_QB??gR`t)qi>3eZ4XY8' );
define( 'NONCE_KEY',        'z6,bLS*H>?GPP*?#e</sK&|!^|#NK9E*zt4J!7 F>k(!gB&R-|*F-anlU!,~gqIm' );
define( 'AUTH_SALT',        'Ow_Xgl!)Q}ajzRCFu[?7{Fp81g6CU7ze_V9RYQtb&mf}sU{mg>a,j8&RGaxknN(B' );
define( 'SECURE_AUTH_SALT', '7)F>^[/QHl:y#fvxL (Rs}g,)#Wu{qeU9vcUEbE6@wXL^d%7hf~j1V5oEMYk%?^L' );
define( 'LOGGED_IN_SALT',   'VeS.,,:k69C2.c@-03!q6XIjm%=Z,H4[s?uJcNzFsx:A9-W,n`~,hy<C)gu1=^<g' );
define( 'NONCE_SALT',       'QcZT1$RudS%TgoDci wV:>$f=j?42y{p7|xqJh=/[.T?%#`@7cq59N]6ndh87FXE' );
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
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
