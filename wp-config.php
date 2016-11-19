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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'first');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '{yRE3?}1|<oWHZ^mWt)#Be9}EJ4%f$M*sy);6-i%ox;K/n~wOl7NlLH~a)TV.*Z5');
define('SECURE_AUTH_KEY',  ':cA}<~au~3kN-J2zE*yD+7g 0)HLN%ZPN+G9adk-n+<y;rYB$|@2;6CO7}C*?e__');
define('LOGGED_IN_KEY',    'l^Ui [u27f|hLb==8TZ?hd}EtEBM,-lF$@D+D.eTY2;iLLGg-5y5ZhWu=}}.S9|C');
define('NONCE_KEY',        'CEK<6rJV|Qr%aEBzhJFND(P;WEEcOth2F9WlP@Z6 :t@8{,36d.B%Q=grl4d#:&a');
define('AUTH_SALT',        'O|;`dx!vWUb7qOuBd{#O864[,4L.)#znG}c/F$i-/-xSw.l`3Gho[_*;LYGVt[^P');
define('SECURE_AUTH_SALT', '95BIB(<zS>_-!5uLs[:||eimM<IcHe .{*+S4MOp+gUX<h/Cis3S_2|t# D?ii&2');
define('LOGGED_IN_SALT',   'rf`Vx|uBT[5|Y=q!J`y6J?Dw4nPKNmud[@[Ej*Y]yq%{oau?o<n)f2%iw[bQBlh)');
define('NONCE_SALT',       'b:Id/h{o^cD*64h2ZJrl+-X-<3C|]s{8W+|_h;cYX7|udf.bm){5exOeux(H6j}x');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 * 
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
