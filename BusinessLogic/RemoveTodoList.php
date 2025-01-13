<?php

function removeTodoList(int $number)
{
    global $todoList;

    if ($number > sizeof($todoList)){
        return false;
    }

    for ($i = $number; $i < sizeof($todoList); $i++){
        $todoList[$i] = $todoList[$i+1];
    }

    // 1. Bob
    // 2. Roney
    // 3. Rio
    // 4. Andi
    // 5. Max 

    unset($todoList[sizeof($todoList)]);

    return true;
}