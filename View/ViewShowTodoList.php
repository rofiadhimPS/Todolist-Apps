<?php

require_once "../BusinessLogic/ShowTodoList.php";
require_once "../View/ViewAddTodoList.php";
require_once "../View/ViewRemoveTodoList.php";
require_once "../Helper/Input.php";

function viewShowTodoList()
{
    showTodoList();

    echo "MENU" . PHP_EOL;
    echo "1. Tambah Todo" . PHP_EOL;
    echo "2. Hapus Todo" . PHP_EOL;
    echo "3. Keluar" . PHP_EOL;

    while (true) {
        
        $pilihan = input("Pilih");

        if ($pilihan == "1"){
            viewAddTodoList();
        } else if ($pilihan == "2"){
            viewRemoveTodoList();
        } else if ($pilihan == "3"){
            break;
        } else {
            "Pilihan tidak dimengerti";
        }
    }

    echo "Sampai Jumpa Lagi" . PHP_EOL;
}