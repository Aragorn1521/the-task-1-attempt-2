<?php

namespace TaskNumber1;

require_once __DIR__ . '/vendor/autoload.php';

/*
 * Задание 1 - создание Базы данных,создание таблицы и ее заполнение из sql файлов
 */

use TaskNumber1\components\DatabaseCreation;

$databaseCreation = new DatabaseCreation();
$databaseCreation->DbCreation();
$databaseCreation->CreatingATable();
$databaseCreation->PopulatingTheTable();
