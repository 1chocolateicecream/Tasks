<?php

// echo "something\n";

$tasks = ["task 1", "task 2", "task 3"];

function showAllTasks($inputTasks)
{
    foreach ($inputTasks as $task) {
        echo $task . "\n";
    }
}

while (true) {
    $input = readline("some user input(0 or 1): ");
    if ($input == "n") {
        exit;
    }

    switch ($input) {
        case 0:
            exit;
        case 1:
            showAllTasks($tasks);
            break;
    }
}
