<?php

return [
    'class' => 'yii\db\Connection',
    'dsn' => 'pgsql:host=pgdb;port=5432;dbname=mydatabase',  // Замените на ваш DSN для PostgreSQL
    'username' => 'postgres',  // Имя пользователя PostgreSQL
    'password' => '326',       // Пароль для пользователя PostgreSQL
    'charset' => 'utf8',       // Кодировка
    
    // Опции кэша схемы (для производственной среды)
    //'enableSchemaCache' => true,
    //'schemaCacheDuration' => 60,
    //'schemaCache' => 'cache',
];
