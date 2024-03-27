<?php

// require_once 'vendor/autoload.php';
require_once 'vendor/scoper-autoload.php';

$f = new \Illuminate\Support\Fluent([
    'name' => 'Andrew',
    'is_verified' => true
]);

var_dump($f->get('name'));
