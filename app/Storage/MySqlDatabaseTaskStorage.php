<?php

namespace Todo\Storage;

use PDO;
use Todo\Models\Task;
use Todo\Storage\Contracts\TaskStorageInterface;

class MySqlDatabaseTaskStorage implements TaskStorageInterface
{
    protected $db;

    public function __construct(PDO $db)  // accepting a database connection
    {
        $this->db = $db;
    }

    public function store(Task $task)
    {

    }

    public function update(Task $task)
    {

    }

    public function get($id)
    {

    }

    public function all()
    {
        $statement = $this->db->prepare("

            SELECT id, description, due, complete
            FROM tasks
        ");

        $statement->setFetchMode(PDO::FETCH_CLASS, Task::class);

        $statement->execute();

        return $statement->fetchAll();
    }
}