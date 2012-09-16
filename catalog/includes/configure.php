<?php
  define('HTTP_SERVER', 'http://nawa.ibhupi.com');
  define('HTTPS_SERVER', 'http://nawa.ibhupi.com');
  define('ENABLE_SSL', false);
  define('HTTP_COOKIE_DOMAIN', '');
  define('HTTPS_COOKIE_DOMAIN', '');
  define('HTTP_COOKIE_PATH', '/abazaar/catalog/');
  define('HTTPS_COOKIE_PATH', '/abazaar/catalog/');
  define('DIR_WS_HTTP_CATALOG', '/abazaar/catalog/');
  define('DIR_WS_HTTPS_CATALOG', '/abazaar/catalog/');
  define('DIR_WS_IMAGES', 'images/');
  define('DIR_WS_ICONS', DIR_WS_IMAGES . 'icons/');
  define('DIR_WS_INCLUDES', 'includes/');
  define('DIR_WS_FUNCTIONS', DIR_WS_INCLUDES . 'functions/');
  define('DIR_WS_CLASSES', DIR_WS_INCLUDES . 'classes/');
  define('DIR_WS_MODULES', DIR_WS_INCLUDES . 'modules/');
  define('DIR_WS_LANGUAGES', DIR_WS_INCLUDES . 'languages/');

  define('DIR_WS_DOWNLOAD_PUBLIC', 'pub/');
<<<<<<< HEAD
  define('DIR_FS_CATALOG', '/var/www/html/abazaar/catalog/');
=======
  define('DIR_FS_CATALOG', '/tech/w-php/shop/catalog/');
>>>>>>> a75c64512abf906d50e62642b3612c66977718e8
  define('DIR_FS_DOWNLOAD', DIR_FS_CATALOG . 'download/');
  define('DIR_FS_DOWNLOAD_PUBLIC', DIR_FS_CATALOG . 'pub/');

  define('DB_SERVER', 'localhost');
  define('DB_SERVER_USERNAME', 'root');
  define('DB_SERVER_PASSWORD', 'savvanavu');
  define('DB_DATABASE', 'asianbazaar');
  define('USE_PCONNECT', 'false');
  define('STORE_SESSIONS', 'mysql');
  define('CFG_TIME_ZONE', 'Asia/Tokyo');
?>