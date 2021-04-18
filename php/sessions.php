<?php

session_start();
session_name(); // PHPSESSID
// session.name = NEWSESID in ini file
session_id();
session_destroy();

$_SESSION['a'] = 10;

// init_get('session.save_path');

// ini_set('session.cookie_lifetime', 300000);
