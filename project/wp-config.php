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
define('DB_NAME', 'iskrennost');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');

/** Имя сервера MySQL */
define('DB_HOST', '127.0.0.1');

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
define('AUTH_KEY',         '8u$`[,O2<wp5Bl!Xr}Y i}WMV>;^Tk#sEJ/bCi9|%jQu].ag7g#$]g/>:i32(mCE');
define('SECURE_AUTH_KEY',  '_|BelY,;%T)EJdicNdFETdg@?3rZyrR<I9ut0[|&QaD3?BVmgp9PisS<eT$F0^Nj');
define('LOGGED_IN_KEY',    'l%.IIrw=FGpK>!i+(VUj^G_XML/3Dyawy0JYcMIEC;mCoSwD}XaAIs:zeS42gUz5');
define('NONCE_KEY',        '/}H ep]f9lf~Ge,xDCRLRdST[W[izubCu,B3J6yh*O}:)5kwF5u2}CiTu?=nTPI ');
define('AUTH_SALT',        'Z5r7a_eNkSNi8~)qLHC7^_lPJ>7-i}nt1V,^)ZmrT3m H=q# G/j:=#i3Ocvpz/@');
define('SECURE_AUTH_SALT', 'P42o3Ek6+FikP_T,#mZHih/i-w1l(2gO_I,8=>qg$W1pn [1jd4*@XLwn[>FN;g5');
define('LOGGED_IN_SALT',   '|k{_-Ln0.(T,;QWv>Zl^^~]EoCsekPO||]~wzM6Z^;GZ%Rhe?Q4v3oi%wg,+nFy`');
define('NONCE_SALT',       'C$wu-}J6E4iJYgU0)qez6c-.i}j*Ye6}^c5?}|!+UxL}x5U6f7L:d7u9VE0B]4bG');

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
