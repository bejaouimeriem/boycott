<?php
   
    $pdo=new PDO("mysql:host=localhost;dbname=boycott;",'root','');
    $users=$pdo->query('select * from users');
    $res=$users->fetchAll();
    var_dump($res);




?>