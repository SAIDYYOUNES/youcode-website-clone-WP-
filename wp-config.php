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
define( 'DB_NAME', 'youcode_clone' );

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
define( 'AUTH_KEY',         'gFG~I-[?ybp/Lce%6$]_#&l|3Z4*)`2x4rTWbGs:mK~#v`<{Tgosu&W$5</f[iFF' );
define( 'SECURE_AUTH_KEY',  'Z0kcbIu4/@uxLR?B9tCmaVvU9D2F%CW0K{pW*|!(lp`XP4WhWCn4JVu@w_]{tZwV' );
define( 'LOGGED_IN_KEY',    '3uN0+|ML~r=@vnfUgx;@!ppr[/yUHn}<7G^]1 fM=.#Sm=_|=:+NB:T|tQHah?6x' );
define( 'NONCE_KEY',        ':[gj&b>6`X{-BApkJ.ROsVlc-tBX591CIOSG?)F`X}96&s~220R#cQ r=J8ZsO=R' );
define( 'AUTH_SALT',        'RUe*,5&97+XcfN:vU<z?rmu-gVrOuky+Mg0&ShpLd8RXD<Qoz0:8B{W_,~-D}o80' );
define( 'SECURE_AUTH_SALT', '6*0gdQ)]-z6ZRko{$dP]$4E^sHA4,muvL,t:-?Foiv1>fdK%5y<7%eCU4d)bHCZh' );
define( 'LOGGED_IN_SALT',   'hj<b^ohn;2`Lb[E_uT{=VVf,8Q&OYn[&mFx+QWH1OSGu)x3*`2qH^KPVAegoqz6N' );
define( 'NONCE_SALT',       'd.N*?BQ_al+:3~gfH]th%%6|_7{Mi&Y{J*ucNWA`zlVQ6d3GP1d@Dl>?t~r9i4Ns' );
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
