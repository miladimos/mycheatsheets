<?php


// Unix-Base System: /
// Windows-Base System: / \

// echo DIRECTORY_SEPARATOR . '<br>';

// echo "Filename: ". __FILE__ . '<br />';
// echo "Directory: ". __DIR__ . '<br />';
// echo "Directory: ". dirname(__FILE__) . '<br />';
// echo "Directory: ". dirname(__DIR__) . '<br />';
// echo "Basename: ". basename(__FILE__) . '<br />';
// echo "Basename: ". basename(__DIR__) . '<br />';

// $path_parts = pathinfo(__FILE__);
// echo '<pre>';
// print_r($path_parts);
// echo '</pre>';


// $file = __DIR__ . '\\'. 'file.txt';
// echo $file;
// echo '<pre>';
// print_r(pathinfo($file));
// echo '</pre>';
// if (file_exists($file))
//     echo "exists";
// else
//     echo "no exists";


// is_dir();
// is_file();
// filesize();
// is_readable();
// is_writeable();


// $path = __DIR__ . DIRECTORY_SEPARATOR;
// $newDir = $path . 'newdir/2/images';

// function mkdir_if_not_exists($dir) {
//     if (!file_exists($dir)) {
//         mkdir($dir, 0777, true);
//     }
// }

// function rmdir_if_exists($dir) {
//     if (file_exists($dir)) {
//         rmdir($dir);
//     }
// }




// $path = dirname(dirname(__DIR__));
// $files = scandir($path, SCANDIR_SORT_ASCENDING);
// // $files2 = array_diff($files, array('.'.'..'));

// echo '<pre>';
// print_r($files);
// echo '</pre>';


// echo '<h3>Contents: </h3>';
// $dir = dirname(dirname(__DIR__));
// $handle = opendir($dir);

// // echo $handle;
// // var_dump($handle);

// while(($item = readdir($handle)) !== false) {
    
//     if(in_array($item, ['.','..'])) continue;

//     $fullpath= $dir . '/' . $item;
//     if(is_dir($fullpath))
//         $type = 'Directory';
//     else 
//         $type = 'File';


//     echo '<pre>';
//     print_r($item . $type);
//     echo '</pre>';
// }


// closedir($handle);


// glob(pattern, flag);

// copy('x.txt', 'x.txt.bak');
// rename('oldname','newname');
// unlink('path');

// chmod(path, code); // Change Modification
// chown(); // Change Owner
// chgrp(); // Change Group

// echo filegroup('file');