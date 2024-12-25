<?php

require_once "../Model/TodoList.php";
require_once "../BusinessLogic/AddTodoList.php";

addTodoList("Muh");
addTodoList("Rofiadhim");
addTodoList("Rajab");

var_dump($todoList);
