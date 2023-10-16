<?php
declare (strict_types = 1);

$root = dirname(__DIR__) . DIRECTORY_SEPARATOR;
define('APP_PATH', $root . 'APP' . DIRECTORY_SEPARATOR);
define('EXTERNAL_PATH', $root . 'External' . DIRECTORY_SEPARATOR);
define('VIEW_PATH', $root . 'View' . DIRECTORY_SEPARATOR);

require APP_PATH.'App.php';
require APP_PATH.'helper.php';

$files = getAllFiles(scandir(EXTERNAL_PATH));

$datas = readAllFiles($files, 'readCurrentFile');
require VIEW_PATH.'index.php';
?>