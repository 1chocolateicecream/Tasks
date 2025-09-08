<?php

class Task
{
    public $id;
    public $content;

    public function __construct($id = null, $content = "")
    {
        $this->id = $id;
        $this->content = $content;
    }

    public function display()
    {
        echo "task id: " . $this->id . "\n";
        echo "task content: " . $this->content . "\n";
        echo "\n";
    }

    function __destruct()
    {
        echo "task id {$this->id} is being deleted.\n";
    }
}

$tasks = [];

function showAllTasks($inputTasks)
{
    echo "=== List of all tasks ===\n";
    foreach ($inputTasks as $task) {
        $task->display();
    }
    echo "==================\n\n";
}

function addNewTask(&$inputTasks)
{
    $newContent = readline("Enter new task content: ");
    $newId = count($inputTasks) + 1; // lai cilvekam butu vieglak
    $newTask = new Task($newId, $newContent);
    $inputTasks[] = $newTask;
}

function editTask(&$inputTasks)
{
    $indexToEdit = readline("Enter task id to edit: ");
    $found = false;

    foreach ($inputTasks as $task) {
        if ($task->id == $indexToEdit) {
            $found = true;
            $newContent = readline("Enter new content for task id {$task->id}: ");
            $task->content = $newContent;
            echo "Task id {$task->id} successfully updated.\n";
            $task->display();
            break;
        }
    }

    if (!$found) {
        echo "Error: Task with id {$indexToEdit} doesn't exist.\n";
    }
}

while (true) {
    echo "Task Manager\n";
    echo "0 - exit\n";
    echo "1 - Show all tasks\n";
    echo "2 - Add new task\n";
    echo "3 - Edit task\n";
    $input = readline("Select an option (0, 1, 2, 3): ");

    switch ($input) {
        case 0:
            exit;
        case 1:
            showAllTasks($tasks);
            break;
        case 2:
            addNewTask($tasks);
            break;
        case 3:
            editTask($tasks);
            break;
        default:
            echo "Invalid option, try again.\n";
    }
}
