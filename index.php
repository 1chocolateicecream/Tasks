<?php
$tasks = [
    "task 1",
    "task 2",
    "task 3"
];



while (true) {
    $input = readline("Command: ");

    if ($input == "n") {
        break;
    }
    // else {
    //     echo "$input\n";
    // }


    switch ($input) {
        case '1':
            echo "tasks list\n";
            // printAllTasks($tasks);
            break;
        case 'a':
            echo "add task\n";
            break;
        case 'r':
            echo "remove task\n";
            break;
        default:
            echo "something went wrong\n";
            break;
    }
}
