<?php


/**
 * $_FILES:
 *  name , type : mime_type, size: size in byte, tmp_name, error
 * 
 */

// <form method="post" enctype="multipart/form-data">
//     <input type="file" name="file" />
// </form>

$name = $_FILES['file']['name'];
$tmp_name = $_FILES['file']['tmp_name'];

if(substr($name, strlen($name)-4, 4) === '.ext') {
    echo 'can not upload ext files';
}
if(move_uploaded_file($tmp_name, "uploadedFiles/$tmp_name")) {
    echo 'File uploaded successfully';
} else {
    echo 'Error in File uploaded' . $_FILES['file']['error'];
}