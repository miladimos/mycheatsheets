<?php

try {
	$dns = "mysql:host=localhost;dbname=learn;charset=utf8";
	$pdo = new PDO($dns, 'root', '');

	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	// $sql_stmt = "SELECT VERSION()";
	// $result  = $pdo->query($sql_stmt);
	// $version = $result->fetch();
	// echo 'Current mysql version: ' . $version[0] . PHP_EOL;


	$sql_stmt = "SELECT * FROM `user_details`";
	$result = $pdo->query($sql_stmt);
	foreach ($result as $row) {
		echo ($row['username']) . '<br>';
	}

	echo 'Row Count: ' . $result->rowCount();


} catch (PDOException $e) {
	echo $e->getMessage();
}

// $dns = "mysql:host=localhost;dbname=learn;charset=utf8";
// $pdo = new PDO($dns, 'root', '');
// $query = "SELECT * WHERE user_details WHERE username = ?";
// $stmt = $pdo->prepare($query);

// $stms->bindColoumn('UserId', $user_id);
// $stms->bindColoumn('username', $username);

// $params = ['username'];
// $stmt->execute($params);