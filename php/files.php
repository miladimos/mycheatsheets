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

// touch('dir/text.txt');

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
// rmdir('dir');
// echo getcwd();
// fseek($handle, $offset, $flag); // SEEK_SET | SEEK_CUR | SEEK_END
// ftell($handle);
// rewind($handle);

// chmod(path, code); // Change Modification
// chown(); // Change Owner
// chgrp(); // Change Group

// echo filegroup('file');


// $lines = file('https://google.com/');
// foreach($lines as $line) {
//     echo $line;
// }


// $file = __DIR__ . '\\' . 'file.txt';
// // $lines = file($file);
// // foreach($lines as $line) {
// //     echo $line . '<br >';
// // }

// $content = file_get_contents($file);
// var_dump($content);

// file_put_contents($file, '\r\nThis Thirth Line', FILE_APPEND);




// $data = ['abc', 12, 'this is test'];
// file_put_contents($file, serialize($data));

// $d = unserialize(file_get_contents($file));

// json_encode();
// json_decode();


///////////////
// $file = __DIR__ . '\\' . 'file.txt';
// $handle = fopen($file, 'r');
// if($handle === false) die("Thi file cannot be openned.");
// $data = fread($handle, 6);
// echo $data;

// $line = fgets($handle);
// echo $line;


// while(true) {
//     $line = fgets($handle);
//     if( $line === false) break;
//     echo $line;
// }


// while(($line = fgets($handle)) !== false) {
//     if( $line === false) break;
//     echo $line;
// }

// header('Content-Type: text/txt');
// while(!feof($handle)) {
//     $line = fgets($handle);
//     $line = str_replace(['\r', '\n'], '', $line);
//     echo $line;
// }

// fclose($handle);




///////////////////////// Write File

// $file = __DIR__ . '\\' . 'file.txt';
// $handle = fopen($file, 'w');
// if($handle === false) die("Thi file cannot be openned.");

// $data = 'this new data';
// fwrite($handle, $data);
// fputs($handle, 'f');

// fclose($handle);


//////////////// Temp File

// echo 'Temp Dir: '. sys_get_temp_dir() . '<br >';

// $handle = tmpfile();
// fwrite($handle, "Write Test");
// fseek($handle, 0);
// echo fread($handle, 1024);
// fclose($handle);

// $dir = sys_get_temp_dir();
// $filename = tempnam($dir, 'px-');
// $filename2 =$dir . DIRECTORY_SEPARATOR .  uniqid("TestPrefix-") . '.tmp';

// echo $filename;


////////////////////////// CSV

// $handle = fopen('test.csv', 'w');

// $arrValues = array(
//     'name,age,email',
//     'milad,19,milad@gmail.com',
//     'ali,14,ali@gmail.com',
//     'amir,24,amir@gmail.com',
//     'mani,17,mani@gmail.com',
// );
// foreach($arrValues as $line) {
//     fputcsv($handle, explode(',', $line));
// }

// fclose($handle);
 
////////

// $handle = fopen('test.csv', 'r');

// while($line = fgetcsv($handle, 0, ',')) {

// }
// fclose($handle);



