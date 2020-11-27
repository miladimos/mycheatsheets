<?php 


echo '<pre>';
// print_r($_SERVER);
echo '</pre>';

/*
Array
(
    [DOCUMENT_ROOT] => C:\path\mycheatsheets
    [REMOTE_ADDR] => ::1
    [REMOTE_PORT] => 7981
    [SERVER_SOFTWARE] => PHP 7.4.9 Development Server
    [SERVER_PROTOCOL] => HTTP/1.1
    [SERVER_NAME] => localhost
    [SERVER_PORT] => 3000
    [REQUEST_URI] => /php/supper_globals.php
    [REQUEST_METHOD] => GET
    [SCRIPT_NAME] => /php/supper_globals.php
    [SCRIPT_FILENAME] => C:\path\mycheatsheets\php\supper_globals.php
    [PHP_SELF] => /php/supper_globals.php
    [HTTP_HOST] => localhost:3000
    [HTTP_CONNECTION] => keep-alive
    [HTTP_CACHE_CONTROL] => max-age=0
    [HTTP_UPGRADE_INSECURE_REQUESTS] => 1
    [HTTP_USER_AGENT] => Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.66 Safari/537.36
    [HTTP_ACCEPT] => text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*//*;q=0.8,application/signed-exchange;v=b3;q=0.9
    [HTTP_SEC_FETCH_SITE] => none
    [HTTP_SEC_FETCH_MODE] => navigate
    [HTTP_SEC_FETCH_USER] => ?1
    [HTTP_SEC_FETCH_DEST] => document
    [HTTP_ACCEPT_ENCODING] => gzip, deflate, br
    [HTTP_ACCEPT_LANGUAGE] => fa-IR,fa;q=0.9,he-IL;q=0.8,he;q=0.7,tr-TR;q=0.6,tr;q=0.5,en-US;q=0.4,en;q=0.3
    [REQUEST_TIME_FLOAT] => 1606477552.7485
    [REQUEST_TIME] => 1606477552
)
*/

echo '__LINE__ = ' . __LINE__ . '<br >';
echo '__DIR__ = ' . __DIR__ . '<br >';
echo '__FILE__ = ' . __FILE__ . '<br >';
echo 'dirname(__FILE__) = ' . dirname(__FILE__) . '<br >';

func();


function func () {
    echo '__FUNCTION__ = ' . __FUNCTION__ . '<br >';
}

/*
    __CLASS__ : The currnet Class
    __METHOD__ : The currnet  Method of Class
    __NAMESPACE__ : The currnet Namespace
    __TRAIT__ : The currnet Trait

*/
echo '<pre>';
print_r($_GET);
print_r($_POST);
print_r($_REQUEST);
echo '</pre>';

echo 'Hello '. $_GET['name'] ;


$text = 'i Like Php';
$encoded = urlencode($text);
$decoded = urldecode($text);

$tag = '<a href="#"> Link </a>';
$a = htmlentities($text);
$b = html_entity_decode($a);

$c = htmlspecialchars($tag);
$d = htmlspecialchars_decode($c);