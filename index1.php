<?php

// echo "something\n";

$tasks = ["task 1", "task 2", "task 3"];

while (true) {
    $input = readline("some user input(0 or 1): ");
    if ($input == "n") {
        exit;
    }

    switch ($input) {
        case 0:
            echo "i equals 0";
            break;
        case 1:
            echo "i equals 1";
            break;
        case 2:
            echo "i equals 2";
            break;
        default:
            echo "i is not equal to 0, 1 or 2";
    }
}
