<?php
try{
    $pdo = new PDO('mysql:host=localhost;dbname=ijdb;charset=utf8','ijdbuser','mypassword');
    $output = 'Database connection estabilished';
    
    
}
catch(PDOException $exception){
    $output = ' Unable to connect to the database server: '.$exception->getMessage();
}

include __DIR__ . '/../templates/output.html.php';