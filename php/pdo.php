<?php

try {    
	$pdo = new PDO("mysql:host=localhost;dbname=my_personal_contacts", 'root', 'melody');     
    
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);     
	$pdo->exec('SET NAMES "utf8"');     
    
	$sql_stmt = "SELECT * FROM `my_contacts`";     
	$result = $pdo->query($sql_stmt);     
	$result->setFetchMode(PDO::FETCH_ASSOC);     
	$data = array();     
	foreach ($result as $row) {         
	$data[] = $row;     
  }     
print_r($data); 
} 
catch (PDOException $e) {     
	echo $e->getMessage(); 
} 