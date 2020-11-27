<?php 


/*
    E_ERROR, E_WARNING, E_PARSE, E_NOTICE, E_ALL
*/

error_reporting(0); // Turn off all error reporting

error_reporting(E_ERROR | E_WARNING | E_PARSE);

error_reporting(E_ALL & ~E_NOTICE);

error_reporting(-1); // E_ALL

// default -> error_reporting(E_ALL & ~E_NOTICE & ~E_STRICT & ~E_DEPRICATED); 

ini_set('error_reporting', E_ALL);


get_defined_vars();
get_defined_constants();
get_defined_functions();

try {} 
catch(Exception $e) {}
finally {}