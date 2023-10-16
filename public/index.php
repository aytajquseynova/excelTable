<?php
declare (strict_types = 1);


$root = dirname(__DIR__) . DIRECTORY_SEPARATOR;
define('APP_PATH', $root . 'APP' . DIRECTORY_SEPARATOR);
define('EXTERNAL_PATH', $root . 'External' . DIRECTORY_SEPARATOR);
define('VIEW_PATH', $root . 'View' . DIRECTORY_SEPARATOR);
// echo APP_PATH ."<br>";
// echo EXTERNAL_PATH."<br>";
// echo VIEW_PATH."<br>";

// echo $root;
// butun fayllarin oldugu kok qovlugu verir
// DIRECTORY_SEPARATOR TERS slash 

// esas kodlar app.phpde
// bir de helper.php de olacaq

require APP_PATH.'App.php';
require APP_PATH.'helper.php';

// $files = [];

// $fileLists = [];
$files = getAllFiles(scandir(EXTERNAL_PATH));


// foreach($files as $file){
//     if (is_dir($file)){
//         continue;
//     }

//     array_push($fileLists, $file);
// }




// print_r ($fileLists);
$datas = readAllFiles($files, 'readCurrentFile');
// echo "<pre>";
// print_r ($datas);
// echo "</pre>";
require VIEW_PATH.'index.php';
?>