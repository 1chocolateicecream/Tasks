<?php
while (true) {
    $input = readline("Command: ");

    if ($input == "n") {
        break;
    }
    // else {
    //     echo "$input\n";
    // }

    $tasks = [
        "task 1",
        "task 2",
        "task 3"
    ];

    switch ($input) {
        case '1':
            echo "tasks list\n";
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
