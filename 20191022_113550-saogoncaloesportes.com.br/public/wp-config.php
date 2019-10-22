<?php
/**
 * As configurações básicas do WordPress.
 *
 * Esse arquivo contém as seguintes configurações: configurações de MySQL, Prefixo de Tabelas,
 * Chaves secretas, Idioma do WordPress, e ABSPATH. Você pode encontrar mais informações
 * visitando {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. Você pode obter as configurações de MySQL de seu servidor de hospedagem.
 *
 * Esse arquivo é usado pelo script ed criação wp-config.php durante a
 * instalação. Você não precisa usar o site, você pode apenas salvar esse arquivo
 * como "wp-config.php" e preencher os valores.
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar essas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'db_sgaesportes');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'user_sgaesportes');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', 'Pc5wo-/6L.PD');

/** nome do host do MySQL */
define('DB_HOST', 'mysql796.umbler.com');

/** Conjunto de caracteres do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8mb4');

/** O tipo de collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

define('FS_METHOD','direct');

//define('WP_CACHE', true); //Added by WP-Cache Manager

define( 'WPCACHEHOME', '/home/saogoncaloesportes.com.br/public/wp-content/plugins/wp-super-cache/' ); //Added by WP-Cache Manager

define('WP_HOME','http://saogoncaloesportes.com.br/');
define('WP_SITEURL','http://saogoncaloesportes.com.br/');


/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Você pode alterá-las a qualquer momento para desvalidar quaisquer cookies existentes. Isto irá forçar todos os usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '1~_`G+a{[9 vRmehG!MHNNK*)-F1/R/TRHjh+L)6hRgEYmGh$P<gd`}.tA?~XRmS');
define('SECURE_AUTH_KEY',  'r92N~dXz_XE[9`;vdURQ^Ti}{5ZF_r?Ih,;QEma4}M0rbVQu97>$:iD$A0?HJ=cB');
define('LOGGED_IN_KEY',    '}}1>Uz14zX*Nam#PloEr2gIS-snw7o50Cq8/i<e`Vnwwc^`GEgk>:26$*M;sJw)x');
define('NONCE_KEY',        'f= O,uV8ebzCm;0&XBl?0sQ^WxLu}&XEMfL42~OuA&|e2|3bPT`MCU,h C*LS4;?');
define('AUTH_SALT',        '`rsj1AR0T@1~r!4wm;f9$0{~uTO$BNyd]3),[XSR,R?C(Ysp>YcC }NONwQ6sfqr');
define('SECURE_AUTH_SALT', '+*pkuE]OIhXB[Q#@v+BnHYmdHGJ6Bg[eRy]5|f}QsraWxa$(xwl_1n1`LoS*Vma]');
define('LOGGED_IN_SALT',   '^WLq|o96^k}57 /Z5(.X0_*]@WnWsL&l>F3uYA*_t+.$:^>D(lm{jcc~i@JC,5G7');
define('NONCE_SALT',       '5wrw<eR{X_3!ibUS5q7:hXaM&vy>OnUviH4Z74{?*4:|-@E-Jv?VDmQ<~<-Mls_]');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der para cada um um único
 * prefixo. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';


/**
 * Para desenvolvedores: Modo debugging WordPress.
 *
 * altere isto para true para ativar a exibição de avisos durante o desenvolvimento.
 * é altamente recomendável que os desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
    define('ABSPATH', dirname(__FILE__) . '/');

/** Configura as variáveis do WordPress e arquivos inclusos. */
require_once(ABSPATH . 'wp-settings.php');
