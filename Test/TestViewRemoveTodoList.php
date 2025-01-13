<?php

require_once "../Model/TodoList.php";
require_once "../View/ViewRemoveTodoList.php";
require_once "../BusinessLogic/AddTodoList.php";
require_once "../View/ViewShowTodoList.php";

addTodoList("Muh");
addTodoList("Rofiadhim");
addTodoList("Rajab");
addTodoList("Programmer");
addTodoList("Expert");

showTodoList();

viewRemoveTodoList();

showTodoList();

