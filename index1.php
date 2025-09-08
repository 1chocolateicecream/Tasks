<?php

$tasks = ["task 1", "task 2", "task 3"];

function showAllTasks($inputTasks)
{
    echo "=== List of all tasks ===\n";
    foreach ($inputTasks as $task) {
        echo $task . "\n";
    }
    echo "==================\n\n";
}

function addNewTask(&$inputTasks){
    $newTask = readline("enter new task: ");
    $inputTasks[] = $newTask;
}

while (true) {
    echo "Task Manager\n";
    echo "0 - exit\n";
    echo "1 - Show all tasks\n";
    echo "2 - Add new task\n";
    $input = readline("some user input(0 or 1): ");

    switch ($input) {
        case 0 or "n":
            exit;
        case 1:
            showAllTasks($tasks);
            break;
        case 2:
            addNewTask($tasks);
            break;
    }
}
