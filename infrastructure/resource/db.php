<?php

return [
    /*'default'=>[
        'driver'    => 'mysql',
        'host'      => 'rm-j6c61n6ayya13s7975o.mysql.rds.aliyuncs.com',
        'database'  => 'db_opgroup',
        'username'  => 'dms',
        'password'  => 'I2jOXlwPTetzH6DH',
        'charset'   => 'utf8'
    ],*/
    'default' => [
        'driver'    => 'mysql',
        'host'      => 'localhost',
        'database'  => 'db_opgroup',
        'username'  => 'root',
        'password'  => 'Justin@587087',
        'charset'   => 'utf8mb4',
        'options' => [
            PDO::ATTR_PERSISTENT => true
        ]
    ],
    'www' => [
        'driver'    => 'mysql',
        'host'      => 'localhost',
        'database'  => 'db_www',
        'username'  => 'root',
        'password'  => 'Justin@587087',
        'charset'   => 'utf8mb4',
        'options' => [
            PDO::ATTR_PERSISTENT => true
        ]
    ],
    'db_common' => [
        'driver'    => 'mysql',
        'host'      => 'localhost',
        'database'  => 'db_common',
        'username'  => 'root',
        'password'  => 'Justin@587087',
        'charset'   => 'utf8mb4',
        'options' => [
            PDO::ATTR_PERSISTENT => true
        ]
    ]
];