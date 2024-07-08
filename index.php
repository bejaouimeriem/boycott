<?php 

    require_once('./db_connect/index.php');

    $users=$pdo->prepare("select * from users");
    $users->execute();

    $res=$users->fetchAll();
    $page_titel="list users";
    $template="index";

    include "./layout.phtml";


?>