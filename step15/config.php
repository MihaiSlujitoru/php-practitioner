<?php 

return [
    'database' => [
        'name' => 'tasks',
        'username' => 'mihai',
        'password' => '',
        'connection' => 'mysql:host=127.0.0.1',
        'options' => [
            PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION
        ],
    ]
];