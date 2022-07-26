<?php
$database = 'mysql:host=localhost; dbname=pocketguide';
$user = 'pocketguide-admin';
$pwd = 'Rr!yFiEYz/ArNYj*';
try{
$pdo = new PDO($database, $user, $pwd);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
echo 'Connection success!';
}catch(PDOException $e){
echo 'Connection failed: '.$e->getMessage();
}
?>