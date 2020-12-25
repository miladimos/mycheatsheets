<?php

$db = new SQLite3('database.db');

// $db->query("
//     CREATE TABLE IF NOT EXISTS users (
//         id INTEGER PRIMARY KEY AUTOINCREMENT,
//         username TEXT NOT NULL
//     );
// ");

// $db->query("
//     INSERT INTO users (
//         username
//     ) VALUES
//      ( 'admin' ),
//      ( 'writer' ),
//      ( 'editor')
//     ;
// ");

$users = $db->query("
        SELECT * FROM users
");

while(true) {

    $row = $users->fetchArray(SQLITE3_ASSOC);
    if(!$row) break;

    echo json_encode($row);
}



