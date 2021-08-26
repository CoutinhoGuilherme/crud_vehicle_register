<?php

$pdo = new PDO('mysqli:localhost; dbname = vehicles', 'root', 'gui250816');

try {
 $pdo = new PDO('mysqli:localhost; dbname = vehicles', 'root', 'gui250816');    
 $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
}

?>




  