<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do banco de dados
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do banco de dados - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'jornada-viagens' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define( 'DB_COLLATE', '' );

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '?7J0jRB$o1 4G}_b-Q];QVvlk#Y,QUv3ZA;T=?VMtw(!.5]D/gb/85Bphw=A}J{1' );
define( 'SECURE_AUTH_KEY',  '<XKjw}L|GK;lW:cC<m*Kj+A].(j_nE6Za/X *^(I0]El.oam$eeoH%z*U(g._Q/q' );
define( 'LOGGED_IN_KEY',    'Nx=Z~rbG$Lf44-%,-E]SD*<9w#;YA;|BM,3Q79LH!IKe^PUni.4_oxT:?]K;1SRp' );
define( 'NONCE_KEY',        'FTA(/@7?wv1%kNi1gUyG.tA1}w[tZNUC8rD_}G|qq;JSkRk?sl|Jk_8kNQJWpH/i' );
define( 'AUTH_SALT',        '+Y*[nCKc*w<o|>aogAS}Yg[X5CEK$FiZ!ISu.q+IhXvv#~#O. rPwGQt_Dak@?oj' );
define( 'SECURE_AUTH_SALT', '^jZ%#$wq74Z|*TqR%(uPRWVn$1Kk=RQ9mG0-b:=<5Gz3V<r>TX,0Ba1-Nfd<KL2&' );
define( 'LOGGED_IN_SALT',   'HINDw:@u[Ml+R:udYLtTpof)tu5;v^z;qeV#I^Dv`V9jilnB}SdX}O^OLDl_P9dL' );
define( 'NONCE_SALT',       'eEGG)Q!in0D2j6acWWYy.t ujDbZIKlWD(n4hBzb<J4,$Q/*Io0?!y>?<([VK|[[' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Adicione valores personalizados entre esta linha até "Isto é tudo". */



/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
