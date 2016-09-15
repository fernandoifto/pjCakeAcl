<?php
$baseDir = dirname(dirname(__FILE__));
return [
    'plugins' => [
        'Access' => $baseDir . '/plugins/Access/',
        'Bake' => $baseDir . '/vendor/cakephp/bake/',
        'DebugKit' => $baseDir . '/vendor/cakephp/debug_kit/',
        'Migrations' => $baseDir . '/vendor/cakephp/migrations/',
        'TwitterBootstrap' => $baseDir . '/vendor/cakephp-brasil/twitter-bootstrap/'
    ]
];