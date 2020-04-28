<?php

use Todo\Models\Task;

require 'vendor/autoload.php';

$db = new PDO('mysql:host=127.0.0.1; dbname=tasks', 'root', 'root');


$tasks = $db->prepare("SELECT * FROM tasks");

$tasks->setFetchMode(PDO::FETCH_CLASS, Task::class);

$tasks->execute();

