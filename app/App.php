<?php
// echo "Salam";
declare (strict_types = 1);

function getAllFiles(array $files) : array{
    $fileLists = [];
    foreach($files as $file){
    if (is_dir($file)){
        continue;
    }

    array_push($fileLists, $file);
}
    return $fileLists;
}

function readAllFiles(array $files, ?callable $callback):array
{
    $allDatas = [];
    foreach($files as $file){
        if(file_exists(EXTERNAL_PATH.$file)){
            $result = array_merge ($allDatas, readCurrentFile(EXTERNAL_PATH.$file) );
            return $result;
           
        }else{
            trigger_error('File not found', E_USER_WARNING);
        }
    }
    return $allDatas;
}

function readCurrentFile($file){
    $file = fopen($file, 'r');
    $arr = [];
    // $line = fgetcsv ($file);
    // return $line;
    while (($line = fgetcsv ($file)) !==false ){
        array_push($arr, $line) ;
    }
    return $arr;


    fclose($file);
}

// function test(){
//     return 'aa';
// }
?>