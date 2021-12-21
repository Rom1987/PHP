<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'wordpress' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'bgX@13DhhN5n=g?MOToH~M,,feBs1wAF%->K8JhqeE{x.k)Advb?=e(#rWRJo}i:' );
define( 'SECURE_AUTH_KEY',  '%CemFnm0HK?FXHtI9rr)!])`JHgRg:W)#[{Qg-|a7LGuZgCy%7s5[pSPHSn|OZh5' );
define( 'LOGGED_IN_KEY',    '5tJZWr%2mHn}sW~}OV#o<JNGNeswZF>P1Bt<WUmmu:/a8IRzrOcmkJIvjOlr-yGC' );
define( 'NONCE_KEY',        '(/E7uTs-Y)q@`:c9l,T+[A>H;g_.},U{qnl@|HMHyhDo&B$nUtvXHN2swd||[g>l' );
define( 'AUTH_SALT',        '78AFPAewn+c%x]4[]r>;d15ry9`8=Ys|C!ziDW[BZ+ki(Y]2<9:DlXrT_4B_lS^y' );
define( 'SECURE_AUTH_SALT', 'oGSb)]pJ%-j1jWu!xKr<X0~zjA@aM]lNM!v^ CtDlftnv$A_j=!f+0).yVtHB&N.' );
define( 'LOGGED_IN_SALT',   'MIxPZu1R4{L-#BATP0eLb`#Om`@!t6UxR[3_6#kwKj~^_~Ysk*p~~^_1K5,a>@,*' );
define( 'NONCE_SALT',       '^8&z2WrO1-[s51z#&ozKarW$EJ;f,)a>mFKP!#zM(JHQgQG296 6^hq{^G+SLbCk' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

// добавленный. Для создания множество сайтов. 
define('WP_ALLOW_MULTISITE', true);

define('MULTISITE', true);
define('SUBDOMAIN_INSTALL', false);
define('DOMAIN_CURRENT_SITE', 'wordpress');
define('PATH_CURRENT_SITE', '/');
define('SITE_ID_CURRENT_SITE', 1);
define('BLOG_ID_CURRENT_SITE', 1);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
