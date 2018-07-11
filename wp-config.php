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
define('DB_NAME', 'stroyinvest');

/** Имя пользователя MySQL */
define('DB_USER', 'admin');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '12345qwert');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         '#Mt|oV?SJ$A!gtAJUs+LxyZrB^B&Y3wQ}OjCA9[Q.W,2lp?hf#=O^z4!dDk+L6P1');
define('SECURE_AUTH_KEY',  'ELBsZsha02<d,O}jtV^~rNgH4R0!SmbrS! D]5L!Jqn9?fZ1JU]$ANV0ec[ULj<~');
define('LOGGED_IN_KEY',    '}?KCvHhHT+_jZE+Ay}$*Yd+UKwWeRBtYN>DP~DVxZnK_6(-HO(/iPMv;a#w?JWkr');
define('NONCE_KEY',        'u9rnih57O!>$15)r!-n%&7I.ejLT}+|.=00BJ=[X.t_JJ;3w;>]GUv+pS9+8Lal~');
define('AUTH_SALT',        ')ox6TQdJl5xT={3th0y=2.Wq+ 49F 3W|d:swx1K0&2_<R`91*2Z-rFM3N^6F+DG');
define('SECURE_AUTH_SALT', 'p84&}|abTckB^yh@2I`PIlQ`%1{l.-}7Gy$pvkw)$+?A/SdGGDf7a1&l)vmHb#qF');
define('LOGGED_IN_SALT',   '.<;J+aDm/N9Qwab[92+I~Qb&LZPb^gML8xAy1Gu7JidD!`Wp=o^yT.`RpSuG d4}');
define('NONCE_SALT',       'iskR{b=Rl,I|E9!tzSRK}(f*s`BGmyQs:_:wI$}_qou=Rf-*?^}`v3:27Th!p/|g');

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
