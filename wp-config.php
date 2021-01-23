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
define( 'DB_NAME', 'moncms' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'P@r99_))/dRi{B&YP=.LZ~fep9#MV4E>#.k3)83Js:X:QG`9iQ=rg7<IiurIwiq(' );
define( 'SECURE_AUTH_KEY',  '9{ji>a10C8Osj&K@}IG+1|H28Fhu+{foX1O|_(2,0wX0+wkH19I9$>aecWJ,mnD|' );
define( 'LOGGED_IN_KEY',    '<d4H6yg4GrTA)i:jC3}<m]@[g.risGke~pd $Ntt})GD|n.!- ^Nov KA dQ9O2$' );
define( 'NONCE_KEY',        'Q|u81j2YyP>@ ERa3G=)I5f*:8,(,7F%eAAvFpObb~qTpjJw.N?CnCx5TXHNyr:<' );
define( 'AUTH_SALT',        '7<+M(*YcI,Y B`Tn-+K*}@h!pp~_Mb,xFHzOwHnC`cNGxyf&_r}5d2!~Yu(b=,t5' );
define( 'SECURE_AUTH_SALT', 'Rgr!.?1#J-^::u27aX<.}2|u21;vHiYbWq2bfc&tB,%;/[<-)YKH^tR7#Y?1U:%l' );
define( 'LOGGED_IN_SALT',   'q<,DC0Df?r-L}S0^..@D3QZ^G1$WEYBtmg>>c;KrZ77zsB+^#&b<7jfG#UB=qW2Y' );
define( 'NONCE_SALT',       'Yy1mzkVYaCR&f(0e DVFxe%Uxl~Ni#>y} }[Da`xH9T1D]H;?|aoU)%CFn%LD8:)' );
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
