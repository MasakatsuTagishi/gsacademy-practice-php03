<?php

// 関数
function connect_to_db() {
    $dbn = 'mysql:dbname=gsacf_l05_04;charset=utf8;port=3306;host=localhost';
    $user = 'root';
    $pwd = '';

    try {
      return new PDO($dbn, $user, $pwd);
    } catch (PDOException $e) {
    echo json_encode(["db error" => "{$e->getMessage()}"]);
    exit();
    }   
}