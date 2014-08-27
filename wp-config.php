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
define('DB_NAME', 'oc2');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', '');

/** nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Conjunto de caracteres do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8');

/** O tipo de collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Você pode alterá-las a qualquer momento para desvalidar quaisquer cookies existentes. Isto irá forçar todos os usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '0};;*b[1-h!tGo/EE+@*uq?#|au{( [u.TI${ION}*RE+{]X%MRC9xc-G::=^o)V');
define('SECURE_AUTH_KEY',  'S*{=[Z*pIN}G^(+|K%B]go>: $rM]2_(BQ3M)SF+blA<MRusu8[IFheP-/_;KBVQ');
define('LOGGED_IN_KEY',    '[UghL- w6g#+a42q0$+Sp?+]Q1GUbQFn]e&Wpb0Aq1E;q!5Zy`ow~-+Y>vqx;4+D');
define('NONCE_KEY',        'r^0<0L1GH|jk,EWj_{%.w^v=9x|`{Kcl%[#vs?IYx<-ZPX<Ow]y#{{XgPAj3/r?<');
define('AUTH_SALT',        '6`Wi4T~?@M5U%%@z^/[+`%lW>_G)ThQhUnA-#w1%xo4l]|=zt!LhJmI$|wGH,hby');
define('SECURE_AUTH_SALT', 'tuhPKf3 *&Z$n)4.CYcf#hxs #xq=)e3?wJFEq:Nxot38#&/~Qi:!}>TJ:weQ`UC');
define('LOGGED_IN_SALT',   '7$Wj42=/dkqX%m=4h=7]Fw4x)JiD34/@YKn,R7D)7Y-9WD.nSgn9/^*Y@cO{H1xv');
define('NONCE_SALT',       'Ff62.yYRrp->AqYmqvuw5ZFReGeYhDemDkNT2GlcH)+G.)^9|tw^+=*|{!~]VmnN');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der para cada um um único
 * prefixo. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';

/**
 * O idioma localizado do WordPress é o inglês por padrão.
 *
 * Altere esta definição para localizar o WordPress. Um arquivo MO correspondente ao
 * idioma escolhido deve ser instalado em wp-content/languages. Por exemplo, instale
 * pt_BR.mo em wp-content/languages e altere WPLANG para 'pt_BR' para habilitar o suporte
 * ao português do Brasil.
 */
define('WPLANG', 'pt_BR');

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
