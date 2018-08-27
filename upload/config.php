<?php
// HTTP
define('HTTP_SERVER', 'http://localhost:3000/');

// HTTPS
define('HTTPS_SERVER', 'http://localhost:3000/');

// DIR
define('DIR_APPLICATION', '/Users/trandong/Documents/Git/GitHub/opencart-master/upload/catalog/');
define('DIR_SYSTEM', '/Users/trandong/Documents/Git/GitHub/opencart-master/upload/system/');
define('DIR_IMAGE', '/Users/trandong/Documents/Git/GitHub/opencart-master/upload/image/');
define('DIR_STORAGE', DIR_SYSTEM . 'storage/');
define('DIR_LANGUAGE', DIR_APPLICATION . 'language/');
define('DIR_TEMPLATE', DIR_APPLICATION . 'view/theme/');
define('DIR_CONFIG', DIR_SYSTEM . 'config/');
define('DIR_CACHE', DIR_STORAGE . 'cache/');
define('DIR_DOWNLOAD', DIR_STORAGE . 'download/');
define('DIR_LOGS', DIR_STORAGE . 'logs/');
define('DIR_MODIFICATION', DIR_STORAGE . 'modification/');
define('DIR_SESSION', DIR_STORAGE . 'session/');
define('DIR_UPLOAD', DIR_STORAGE . 'upload/');

// DB
define('DB_DRIVER', 'pdo');
define('DB_HOSTNAME', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', 'root');
define('DB_DATABASE', 'open_cart');
define('DB_PORT', '3306');
define('DB_PREFIX', 'oc_');