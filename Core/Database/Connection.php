<?php 
$DatabaseName = 'mysql:host=localhost; dbname=InspirationWarrior';
$user = 'root';
$password = '';

try{
    $pdo = new PDO($DatabaseName,$user,$password);
}catch(PDOException $e){
    echo'Connection error!'. $e->getMessage();
}
?>