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
define( 'DB_NAME', 'my-wp' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'lVifM>zDnm&&J>j(R!#tp7MXbO!=7=WEf<%)iK{WDtd|L6u~(eC~2?iH?E69@uE%' );
define( 'SECURE_AUTH_KEY',  '_y#E&W,6v60S>5ePf@UAnn-wJ#]Zh+ckCNIn80?ToI$40R$aDQ0Y(T)`6!c9G,JA' );
define( 'LOGGED_IN_KEY',    'V&qyManG&3RKa{Im=KflPK*4xMV}fij5b1Oe+AO!FAj1t|*Ru@~RUIQxQEbmAu[H' );
define( 'NONCE_KEY',        'd:nJ2::uk1Z&1Tav5*!7&$#A>NKP6qmqtkq|<5u/xo -a,xB,oeGAuCd{m)S^5c;' );
define( 'AUTH_SALT',        '+Vtql;T9f>ede[K6[.=!&:8!2cCG/Vgm-,o.I;SC:4fA{_}yu-;W-nf.+!cj&>C]' );
define( 'SECURE_AUTH_SALT', 'yjA@E<!Q6(~j-7a&Z|@)X2La/XfQM:RbYj50&*_zj*.J{S3^xa}@RG?)bNE>jeSo' );
define( 'LOGGED_IN_SALT',   'e*l-wi@03f<[aBofv];j|()b,kY}mu#mdd2&;9FgrakWrIs=o39G ]3ac}5-C8o(' );
define( 'NONCE_SALT',       'B=}=0G<5H G_Fo5FQ+p-ugsySm0FD;T:RFfZ*;q<^JGCweQ}m5kkgm)0q~(X4)bc' );

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
define( 'WP_DEBUG', true );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
