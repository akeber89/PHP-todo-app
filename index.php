<?php

use Todo\Models\Task;

use Todo\Storage\MySqlDatabaseTaskStorage;

require 'vendor/autoload.php';

$db = new PDO('mysql:host=127.0.0.1; dbname=tasks', 'root', 'root');

$storage = new MySqlDatabaseTaskStorage($db);

// $task = new Task;

// $task->setDescription('learn oop');
// $task->setDue(new DateTime('+ 2 days'));

// var_dump($task);
