<?php
    session_start();
    include_once 'inc/Database.php';
    $db = new Database();
    
    $sql = "SELECT `id` , `password`FROM ùser`
            WHERE èmail`= `{$_POST[èmail]}";
            
    $result = $db->select($sql);
?>