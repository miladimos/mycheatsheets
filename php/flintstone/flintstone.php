<?php

use Flintstone\Flintstone;
use Flintstone\Formatter\JsonFormatter;

require_once __DIR__ . '/vendor/flintstone/loader.php';

$options = [
    'dir' => getcwd(),
    'ext' => '.db',
    'gzip' => false,
    'cache' => true,
    'formatter' => new JsonFormatter(),
];

$flintstone_users = new Flintstone('users', $options);

$user1 = [
    'username' => 'admin',
    'password' => '4321'
];

$flintstone_users->set('1', $user1);

$flintstone_users->set('2', [
    'username' => 'writer',
    '1234'
]);

// echo json_encode($flintstone_users->get('1'));

// echo json_encode($flintstone_users->delete('1'));

// echo json_encode($flintstone_users->getAll());

// var_export($flintstone_users->getKeys());
// echo count($flintstone_users->getKeys());

// var_export($flintstone_users->flush());


