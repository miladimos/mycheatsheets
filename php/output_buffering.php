<?php

// ob_start();

// ob_get_length();

// ob_get_clean();

// ob_get_contents();

/////////

ob_start();

phpinfo();
$content = ob_get_contents();
ob_end_clean();
if(strpos($content, "mysql")){
    echo 'Mysqli Extention is Enabled';
} else {
    echo 'Mysqli Extention is Disabled';
}



