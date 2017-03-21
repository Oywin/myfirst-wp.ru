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
define('DB_NAME', 'ecrew_rustest');

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
define('AUTH_KEY',         'MLC m?pofHxLr$^c2=-rSOt0:N Vx=7DsIXN8uYU|Jqa+z:lk#m]hGtl|wvF*`:6');
define('SECURE_AUTH_KEY',  '~ek}R+RBZ+jNs$H=Yt-X0w:Ythe1-u!II{tJr1QY4SGCUcDZ(CI;qmS9F-w>lc,_');
define('LOGGED_IN_KEY',    '/]QM9KTk=niQ<;PkdbI:GaQ{bb wc.K>(rhxNOEr+>cUtMXh|I`$ErwM+cje|7#K');
define('NONCE_KEY',        'xHWb1s !}.C=}<d%WH=hD~-jL/Y4:y>j65AcB3R}(I&l^IDhkB8dNM[xzzRgnc4=');
define('AUTH_SALT',        '@p/)yeL0-D9j-ge?}yg-sHaM_C-AQe1j-1fP`/ujij(p>CP77^X-c. -U!VH$pWz');
define('SECURE_AUTH_SALT', 'k;RM|,3}T[M5uxVvffE-[i$]iMdO^[0h&B=<7o%%*JA?7(<Y6Zf!3,tq^}J`RdKo');
define('LOGGED_IN_SALT',   '^U,KP@#0|&yyoyZtsyD?]ZY_;]&Wpc2$7|Drz?-3;):@5GRtsDlgp==z+EDED^d3');
define('NONCE_SALT',       '=Q>?|3QDP!-jG#Z+UGf BdbQ9+68^$w:!y8rP:}1je0z]-  W qxfE,Dx|hfOudH');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'base_';

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
