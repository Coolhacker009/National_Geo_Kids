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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'wp_projet' );

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
define( 'AUTH_KEY',         '^9pUU@@7-PAW{I4jm?xW9kdKVPfzva&XCP)AuJ?IAgU{L&&,NfAHgiL093rMIaQ[' );
define( 'SECURE_AUTH_KEY',  ';T%>oV]3}9n@M{*5,Wu[({~f=0V$=j`hWIcfsEaujt0kGZfed-+(E$v&%I9ALxI[' );
define( 'LOGGED_IN_KEY',    'fzYWKjoQ`sH^@uJ[HMOpuY){dq*]%}8D|y0-{-/E&Vx^N{hs.t<*a h`BEaG:{FV' );
define( 'NONCE_KEY',        '%a]?jie3PjAg#sOq39HV/C%!B/*}f0sj3p6|]8D!YKQ`%J[(t`kD%iXDTURejEDH' );
define( 'AUTH_SALT',        'o{I;{T)6ZQJ}~`|ebFKG6%]c@%4y`V{Wi:]k2C,bgHbf4LN!jBh9QD <O<^EHN<X' );
define( 'SECURE_AUTH_SALT', '}GQGlX=] P^Imb[?A(T]|^RJeoInPP3Ss!tzHKWnfEeZ dPMu}>I^CWD*<l7RZTV' );
define( 'LOGGED_IN_SALT',   '$/fF]D}2a=)Q$phD7NjG87T*KYJxS)#mD/niR%LE)$6Uah/p>^gK:EV 6z2WQKZs' );
define( 'NONCE_SALT',       'g[b&Guq%8^=mZF4`s)*Pn[oW3Jic!. S-:0$^IR#(~SeD.=}x%k189:X2KKL`:6O' );
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
 * Il est fortemment recommandé que les développeurs d’extensions et
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
